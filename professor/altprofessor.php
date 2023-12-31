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

   
   $sql = "SELECT * FROM professor where id= :id";
   

   $retorno = $conexao->prepare($sql);

   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   
   $retorno->execute();


   $array_retorno=$retorno->fetch();
   

   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $matricula = $array_retorno['matricula'];
   $cpf = $array_retorno['cpf'];
   $dtnasc = $array_retorno['dtnasc'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];


?>
<div class="princ">
<h1>Alterar Professor</h1>
  <form method="POST" action="crudprofessor.php">
  <label for="">Nome:</label><br>
  <input type="text" name="nome" value=<?php echo $nome?>><br>
     <label for="">Idade:</label><br>
     <input type="number" name="idade" value=<?php echo $idade?>><br>
     <label for="">Matricula:</label ><br>
     <input type="text" name="matricula" value=<?php echo $matricula?>><br>
     <label for="">CPF:</label><br>
     <input type="text" name="cpf" value=<?php echo $cpf?>><br>
     <label for="">Data de Nascimento:</label><br>
     <input type="date" name="dtnasc" value=<?php echo $dtnasc?>><br>
     <label for="">Endereço:</label><br>
     <input type="text" name="endereco" value=<?php echo $dtnasc?>><br>
     <input type="hidden" name="id" id="" value=<?php echo $id ?> >
     <label for=""> Qual seu estatus?</label><br>
     <input type="radio" class="estatus" name="estatus" id="radiov" value="Ativo" required><br>
     <label for="">Ativo</label><br> <br>
     <input type="radio" class="estatus" name="estatus" id="radiof" value="Desativo" required><br>
     <label for="" >Desativo</label><br>
     <input type="submit" name="update" value="Alterar">
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
    width: 183vh;
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