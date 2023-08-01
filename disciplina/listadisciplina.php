<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>       
<div class="princ">
        <h2>Lista de Disciplinas</h2>
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>IDPROFESSOR</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?> </td> 
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor']?> </td>

                            <td>
                               <form method="POST" action="altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
<?php         
   echo "<button class='button button3'><a href='http://localhost/vitoria/cadastroluno/'>Voltar</a></button>";
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
    min-height: 97vh;
    height: auto;
    margin-left: 23px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 2ch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

h2{
    margin: 0;
    margin-bottom: 7vh
}

table {
    height: 60%;
    width: 80%;
    border-collapse: collapse;
}

tr{
    text-align: center;
}
th, td{
    border: 3px solid black;
}

button {
    background-color: rgb(78, 243, 128);;
    height: 4vh;
    width: 15vh;
    border-radius: 10px;
    border: 1px black solid;
   
    margin: 1vh;
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