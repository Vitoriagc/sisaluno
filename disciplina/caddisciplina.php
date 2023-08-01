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
    <h1>Cadastro de Disciplina</h1><br><br><br>
  <form method="GET" action="cruddisciplina.php">
    <label for="">Nome:</label><br>
     <input type="text" name="nomedisciplina" required maxlength="100"><br>
     <label for="">Carga Horária:</label><br>
     <input type="text" name="ch" required maxlength="3"><br>
     <label for="">Semestre:</label><br>
     <input type="text" name="semestre" required maxlength="5"><br>
     <label for="">ID Professor:</label><br>
     <input type="number" name="idprofessor" required><br>

     <input type="submit" name="cadastrar" value="Cadastrar">
     </form>
     <button class="button"><a href="http://localhost/vitoria/cadastroluno/">Voltar</a></button>
     </div>

</body>

<style>
  

  body {
    height: auto;
    width: auto;
    
}



.d2{
    display: flex;
    flex-direction: row;
    justify-content: center;
    
    height: 80px;
    
}


.d3{
    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 80px;
    
}
.ee{
  display: flex;
  flex-direction: column;
    justify-content: center;
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
    height: 97vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 2.6ch;
    margin-left: 19px;
    border-radius: 6px;
}

h1 {
    margin: 0%;

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
    width: 17.5vh;
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
    width: 18vh;
    border-radius: 13px;
    border: 1px black solid;
    margin-left: 1vh;
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