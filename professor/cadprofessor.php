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
    <div class="ti">
   <h1><br> Cadastro de Professor </h1><br>
   </div>
  <form method="GET" action="crudprofessor.php">

 
<div class="total">
    <div class="d1">
      <div class="e1">
    <label for="nomeprofessor">Nome:</label>
<input type="text" name="nomeprofessor"  required style="width: 300px;" >
     </div>
     <div class="e2">
     <label for="">Idade:</label>
     <input type="number" name="idade" max="120" min="18"required style="width: 100px;"> 
     </div>
</div>

<div class="d2">
  <div class="e3">
     <label for="">Matricula:</label>
     <input type="text" name="matricula"  required style="width: 250px;">
     </div>
     <div class="e4">
     <label for="">CPF:</label>
     <input type="text" name="cpf"  required style="width: 150px;">
  
     </div>
     </div>

     <div class="d3">
      <div class="e5">
     <label for="">Data de Nascimento:</label>
     <input type="date" name="dtnasc"  required style="width: 150px;" >
     </div>
     <div class="e6">
     <label for="">Endereço:</label>
     <input type="text" name="endereco"  required style="width: 255px;">
     </div>
     </div>
     </div>
  
     <div class="e7">
     <div class="ee">
      <div class="kk">
      <label for="estatus">Qual seu estatus?</label>
      <br>
      <label for="ativo">Ativo</label>
<input type="radio" id="ativo" class="estatus" name="estatus"  required value="Ativo">
  <label for="desativo">Desativo</label>

  <input type="radio" id="desativo" class="estatus" name="estatus"  required value="Desativo">
      </div>

</div>
    
     <div class="aq">
     <input type="submit" name="cadastrar" value="Cadastrar">
     
     </form>
     <button class="button"><a href="http://localhost/vitoria/cadastroluno/">Voltar</a></button>
     </div>
   
</body>
</html>

<style>
  

  body {
    height: auto;
    width: auto;
    
}


.d1{
  height: 80px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    
}

.kk{
  margin-left: 350px;
}
.e1{

    margin-right: 25px;
  
}
.e3{

margin-right: 25px;

}
.d3{
  margin-left: 20px;

}
.e5{
margin-right: 25px;

}

.pp{
  height: 10px;

  width: 100%;
}
.e6{
margin-right: 25px;

}

label{
  font-size: medium;
    display: flex;   
     align-items: flex-start;
}


.total{
  height: auto;
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
    width: 183vh;
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