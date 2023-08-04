<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="princ">
<?php

require_once('..\conexao.php');




if(isset($_GET['cadastrar'])) {
 
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor = $_GET["idprofessor"];

      
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre,idprofessor) 
                VALUES('$nomedisciplina','$ch','$semestre','$idprofessor')";

       
        $sqlcombanco = $conexao->prepare($sql);

        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> A disciplina
                $nomedisciplina foi incluida com sucesso!!!"; 
                echo " <button class='button'><a href='http://localhost/vitoria/cadastroluno/'>Voltar</a></button>";
            }
}

if(isset($_POST['update'])) {

 
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
    $id = $_POST["id"];
   
    
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";

    $stmt = $conexao->prepare($sql);


    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina
             $nomedisciplina foi alterada com sucesso!!"; 

            echo " <button class='button'><a href='listadisciplina.php'>Voltar</a></button>";
        }

}        



if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina
             $id foi excluida!!!"; 

            echo " <button class='button'><a href='listadisciplina.php'>Voltar</a></button>";
        }

}

        
?>
</div>
</body>
<style>
    body {
    height: auto;
    width: auto;
}

.princ {
    background-color: rgb(191, 186, 231);
    width: 183vh;
    height: 97vh;
   
    margin-top: 19px;
    margin-left: 23px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 2.6ch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
button {
    background-color: rgb(78, 243, 128);
    height: 4vh;
    width: 15vh;
    border-radius: 10px;
    border: 0;
    border: 1px black solid;
    margin-top: 2vh;
    cursor: pointer;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

button:hover {
    background-color: rgb(43, 158, 78);
}

a:link {
    text-decoration: none;
}

a {
    color: black;
}
</style>
</html>