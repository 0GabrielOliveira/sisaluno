<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="princ">
    <?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');


##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nomealuno"];
        $idade = $_GET["idade"];
        $matricula = $_GET["matricula"];
        $cpf = $_GET["cpf"];
        $dtnasc = $_GET["dtnasc"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,matricula,cpf,dtnasc,endereco,estatus) 
                VALUES('$nome','$idade','$matricula','$cpf','$dtnasc','$endereco','$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> O aluno
                $nome foi incluido com sucesso!!!"; 
                echo " <button class='button'><a href='http://localhost/pswaulas/siscadastro/'>Voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $dtnasc = $_POST["dtnasc"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, matricula= :matricula, cpf= :cpf, dtnasc= :dtnasc, endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_STR);  
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':dtnasc',$dtnasc, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>Voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>Voltar</a></button>";
        }

}

        
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
    height: 97vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    font-family: Bradley Hand, cursive;
    font-size: 2.6ch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
button {
    background-color: limegreen;
    height: 4vh;
    width: 15vh;
    border-radius: 50px;
    border: 0;
    margin-top: 2vh;
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
