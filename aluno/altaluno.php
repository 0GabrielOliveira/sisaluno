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

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];


?>
<div class="princ">
  <h1>Alterar Aluno</h1>
<form method="POST" action="crudaluno.php">
    <label for="">Nome:</label><br>
        <input type="text" name="nome" id="" value=<?php echo $nome?> ><br>
        <label for="">Idade:</label><br>                                 
        <input type="number" name="idade" id="" value=<?php echo $idade ?> ><br>
        <label for="">Data de Nascimento:</label><br>
        <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?> ><br>
        <label for="">Endereço:</label><br>
        <input type="text" name="endereco" id="" value=<?php echo $endereco ?> ><br>
        <label for="">Estatus:</label><br>
        <input type="text" name="estatus" id="" value=<?php echo $estatus ?> ><br>
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >

        <label for=""> Qual seu estatus?</label><br>
     <input type="radio" class="estatus" name="estatus" id="radiov" value="Ap" required><br>
     <label for="">Aprovado</label><br>
     <input type="radio" class="estatus" name="estatus" id="radiof" value="Rp" required><br>
     <label for="" >Desaprovado</label><br>
        
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
    background-color: rgb(224, 223, 223);
    width: 195vh;
    height: 97vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Bradley Hand, cursive;
    font-size: 2.6ch;
}

h1 {
    margin: 0;
    margin-bottom: 5vh;
}

input {
    width: 35vh;
    height: 20px;
    border-radius: 5px;
    border: 0;
}

input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

input[type=submit] {
    background-color: limegreen;
    height: 4vh;
    width: 15vh;
    border-radius: 50px;
    margin-top: 4vh;
    cursor: pointer;
    font-family: Bradley Hand, cursive;
}
input[type=submit]:hover{
    background-color: rgb(46, 236, 46);
} 
button{
    background-color: limegreen;
    height: 4vh;
    width: 15vh;
    border-radius: 50px;
    border: 0;
    margin-top: 2vh;
    cursor: pointer;
    font-family: Bradley Hand, cursive;
}
button:hover{
    background-color: rgb(46, 236, 46);
}
a:link{
    text-decoration: none;
}
a{
    color: black;
}
</style>
</html>
