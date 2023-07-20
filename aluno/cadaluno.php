<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
   <div class="princ">
   <h1><br> Cadastro de aluno </h1><br>
  <form method="GET" action="crudaluno.php">
    <label for="">Nome:</label><br>
     <input type="text" name="nomealuno"><br>
     <label for="">Idade:</label><br>
     <input type="number" name="idade"><br>
     <label for="">Matricula:</label><br>
     <input type="text" name="matricula"><br>
     <label for="">CPF:</label><br>
     <input type="text" name="cpf"><br>
     <label for="">Data de Nascimento:</label><br>
     <input type="date" name="dtnasc"><br>
     <label for="">Endereço:</label><br>
     <input type="text" name="endereco"><br>
     <label for="">Estatus:</label><br>
     <input type="text" name="estatus"><br>
    
     <div class="aq">
     <input type="submit" name="cadastrar" value="Cadastrar">
     <button class="button"><a href="http://localhost/vitoria/cadastroluno/">Voltar</a></button>
     </div>
     </form>

    </div>
</body>
</html>

<style>
  

  body {
    height: auto;
    width: auto;
    
}

.aq{
  display: flex;
    flex-direction: row;
    justify-content: center;
    justify-items: center;
    width: 100%;
    margin-top: 19px;
    
}


.princ {
  background-color: rgb(191, 186, 231);
    width: 170vh;
    height: 110vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 2.6ch;
    margin-left: 19px;
    border-radius: 6px;
}

h1 {
    margin: 0;

}
label{
  margin-top: 10vh;
}
input {
    width: 35vh;
    height: 25px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 2vh;
    border: 1px black solid;
}

input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

input[type=submit] {
  background-color: rgb(78, 243, 128);
    height: 6vh;
    width: 17vh;
    border-radius: 13px;
   
    cursor: pointer;
   
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    
}
input[type=submit]:hover{
  background-color: rgb(43, 158, 78);
} 
button{
  background-color: rgb(78, 243, 128);
    height: 6vh;
    width: 17vh;
    border-radius: 13px;
    border: 1px black solid;
   
    margin-left: 2vh;
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
