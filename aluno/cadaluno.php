<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
  
   <div class="princ">
    <h1>Cadastro de Aluno</h1><br>
   <form method="GET" action="crudaluno.php">
    <label for="">Nome:</label><br>
     <input type="text" name="nomealuno" required maxlength="100"><br>
     <label for="">Idade:</label><br>
     <input type="number" name="idade" required min="18" max="150"><br>
     <label for="">Matricula:</label><br>
     <input type="text" name="matricula" required><br>
     <label for="">CPF:</label><br>
     <input type="text" name="cpf" required><br>
     <label for="">Data de Nascimento:</label><br>
     <input type="date" name="dtnasc" required><br>
     <label for="">Endereço:</label><br>
     <input type="text" name="endereco" required maxlength="150"><br>

     <label for=""> Qual seu estatus?</label><br>
     <input type="radio" class="estatus" name="estatus" id="radiov" value="Ap" required><br>
     <label for="">Aprovado</label><br>
     <input type="radio" class="estatus" name="estatus" id="radiof" value="Rp" required><br>
     <label for="" >Desaprovado</label><br>
     

     <input type="submit" name="cadastrar" value="Cadastrar">
     </form>
     <button class="button"><a href="http://localhost/pswaulas/siscadastro/">Voltar</a></button>
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
input[type=radio] {
    margin-top: 7px;
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
label{
    font-size: 1.5ch;
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
