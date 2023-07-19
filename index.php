<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Cadastro</title>
</head>

<body>

    <div class="princ">
        <div class="header">
            <h1> Sistema de Controle </h1>
        </div>
        <div class="menu">
            <div class="cadaluno">
                <h2>Alunos:</h2>
                <h4>Clique para cadastrar alunos.</h4>
                <button class="button"><a href="cadaluno.php">Cadastrar aluno</a></button> <br>
                <h4><br>Clique para visualizar lista de alunos cadastrados.</h4>
                <button class="button"><a href="listaalunos.php">Mostrar lista de alunos.</a></button>
            </div>
            <div class="cadprof">
                <h2>Professores:</h2>
                <h4>Clique para cadastrar novos professores.</h4>
                <button class="button"><a href="professores\cadprofessor.php">Cadastrar professor</a></button> <br>
                <h4><br>Clique para visualizar lista de professores cadastrados.</h4>
                <button class="button"><a href="professores\listaprofessores.php">Mostrar lista de professores</a></button>
            </div>
            <div class="caddisciplinas">
                <h2>Disciplinas:</h2>
                <h4>Clique para cadastrar disciplinas.</h4>
                <button class="button"><a href="professores\cadprofessor.php">Cadastrar disciplina</a></button> <br>
                <h4><br>Clique para visualizar lista de disciplinas cadastrados.</h4>
                <button class="button"><a href="professores\listaprofessores.php">Mostrar lista de disciplina</a></button>
            </div>
        </div>
    </div>


</body>

<style>
    body{
    height: auto;
    width: auto;
}
.princ{
    background-color: rgb(51, 47, 83);
    width: 170vh;
    height: 97vh;
    border-radius: 6px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    margin-left: 19px;
    
}
.header{
    background-color: rgb(96, 80, 212);
    width: 170vh;
    height: 15vh;
    display: table-cell;
    vertical-align: middle;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 4ch;
    color: rgb(11, 2, 40);
    border-radius: 6px;
  
}
h1{
    margin: 0;
}
h3{
    margin: 0;
}
.menu{
    background-color: rgb(191, 186, 231);
    width: 162vh;
    height: 70vh; 
    display: flex;
    flex-direction: row;  
    justify-content: center; 
    margin-top: 24px;
    margin-left: 25px;
    border-radius: 6px;
}
.cadaluno{
    width: 33.3%;
    height: 100%;
    cursor: pointer;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: 40px;
}
.cadprof{
    width: 33.3%;
    height: 89%;
    cursor: pointer;
    border-left: 1px black solid;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: 40px;
}
.caddisciplinas{
    width: 33.3%;
    height: 89%;
    cursor: pointer;
    border-left: 1px black solid;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: 40px;
}

.button{
    background-color: rgb(78, 243, 128);
    border-radius: 12px;
    width: 20vh;
    height: 7vh;
    cursor: pointer;
    
}
button:hover{
    background-color: rgb(43, 158, 78);
     
}
a:link{
    text-decoration: none;
}
a{
    color: black;
    font-size: 2ch;
}

</style>
</html>