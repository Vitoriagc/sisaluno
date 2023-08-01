<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   $sql = "SELECT * FROM disciplina where id= :id";

   $retorno = $conexao->prepare($sql);

   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   $retorno->execute();

 
   $array_retorno=$retorno->fetch();
   
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];

?>
<div class="princ">
<h1>Alterar Disciplina</h1><br><br>
  <form method="POST" action="cruddisciplina.php">
  <label for="">Nome:</label><br>
  <input type="text" name="nomedisciplina" value=<?php echo $nomedisciplina?>><br>
     <label for="">Carga Horária:</label><br>
     <input type="text" name="ch" value=<?php echo $ch?>><br>
     <label for="">Semestre:</label ><br>
     <input type="text" name="semestre" value=<?php echo $semestre?>><br>
     <label for="">ID Professor:</label><br>
     <input type="number" name="idprofessor" value=<?php echo $idprofessor?>><br>
     <input type="submit" name="update" value="Alterar">
     <input type="hidden" name="id" id="" value=<?php echo $id ?> >
  </form>
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
    height: 97vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 2.6ch;
    margin-left: 19px;
}

h1 {
    margin: 0;
    margin-bottom: 5vh;
}

input {
    width: 35vh;
    height: 20px;
    border-radius: 5px;
    
}

input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

input[type=submit] {
  background-color: rgb(78, 243, 128);
    height: 4vh;
    width: 15vh;
    margin-top: 4vh;
    cursor: pointer;
    border: 1px black solid;
    border-radius: 13px;
   
    cursor: pointer;
   
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
input[type=submit]:hover{
  background-color: rgb(43, 158, 78);
} 
button{
  background-color: rgb(78, 243, 128);
    height: 4vh;
    width: 15vh;
    border-radius: 50px;
    border: 1px black solid;
    margin-top: 2vh;
    cursor: pointer;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
button:hover{
  background-color: rgb(43, 158, 78);
}
a:link{
    text-decoration: none;
}
a{
    color: black;
}
</style>
</html>