<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
<div class="princ">
        <h2>Lista de Professores</h2>
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>IDADE</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>ENDEREÇO</th>
                    <th>ESTATUS</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td>  
                            <td> <?php echo $value['cpf']?> </td> 
                            <td> <?php echo $value['idade']?> </td>
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['estatus']?> </td> 

                            <td>
                               <form method="POST" action="altprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudprofessor.php">
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
   echo "<button class='button button3'><a href='http://localhost/pswaulas/siscadastro/'>Voltar</a></button>";
?>
</div>
</body>
<style>
    body {
    height: auto;
    width: auto;
}

.princ {
    background-color: rgb(224, 223, 223);
    width: 195vh;
    min-height: 97vh;
    height: auto;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Bradley Hand, cursive;
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
    background-color: limegreen;
    height: 4vh;
    width: 15vh;
    border-radius: 50px;
    border: 0;
    margin: 1vh;
    cursor: pointer;
    font-family: Bradley Hand, cursive;
}

button:hover {
    background-color: rgb(46, 236, 46);
}

a:link {
    text-decoration: none;
}

a {
    color: black;
}
</style>
</html>


