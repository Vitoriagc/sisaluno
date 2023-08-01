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



if(isset($_GET['cadastrar'])){
        
        $nome = $_GET["nomeprofessor"];
        $idade = $_GET["idade"];
        $matricula = $_GET["matricula"];
        $cpf = $_GET["cpf"];
        $dtnasc = $_GET["dtnasc"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];

        
        $sql = "INSERT INTO professor(nome,idade,matricula,cpf,dtnasc,endereco,estatus) 
                VALUES('$nome','$idade','$matricula','$cpf','$dtnasc','$endereco', '$estatus')";

    
        $sqlcombanco = $conexao->prepare($sql);

  
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> Professor
                $nome foi incluido com sucesso!!!"; 
                echo " <button class='button'><a href=' http://localhost/vitoria/cadastroluno/'>Voltar</a></button>";
            }
        }

if(isset($_POST['update'])){


    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $dtnasc = $_POST["dtnasc"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $id = $_POST["id"];
   
      
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, matricula= :matricula, cpf= :cpf, dtnasc= :dtnasc, endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    
    $stmt = $conexao->prepare($sql);

    
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':dtnasc',$dtnasc, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O professor
             $nome foi Alterado com sucesso!!"; 

            echo " <button class='button'><a href='http://localhost/vitoria/cadastroluno/'>Voltar</a></button>";
        }

}        



if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> Professor
             $id foi excluido!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>Voltar</a></button>";
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
    width: 170vh;
    height: 95vh;
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