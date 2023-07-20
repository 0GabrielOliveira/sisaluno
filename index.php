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
            <h1> Sistema de Cadastro</h1>
        </div>
        <div class="menu">
            <div class="cadaluno">
                <h3>Alunos</h3>
                <h4>Clique aqui para cadastrar novos alunos</h4>
                <button class="button"><a href="aluno\cadaluno.php">Cadastrar aluno</a></button> <br>
                <h4>Clique aqui para visualizar a lista de alunos cadastrados</h4>
                <button class="button"><a href="aluno\listaalunos.php">Exibir lista de alunos</a></button>
            </div>
            <div class="cadprof">
                <h3>Professores</h3>
                <h4>Clique aqui para cadastrar novos professores</h4>
                <button class="button"><a href="professores\cadprofessor.php">Cadastrar professor</a></button> <br>
                <h4>Clique aqui para visualizar a lista de professores cadastrados</h4>
                <button class="button"><a href="professores\listaprofessores.php">Exibir lista de professores</a></button>
            </div>
            <div class="caddisciplinas">
                <h3>Disciplinas</h3>
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
    background-color: rgb(175, 169, 169);
    width: 195vh;
    height: 97vh;
    margin: 3px;
    box-shadow: 0px 0px 15px 5px rgb(56, 56, 56);
    text-align: center;
    
}
.header{
    background-color: rgb(148, 148, 178);
    width: 195vh;
    height: 20vh;
    display: table-cell;
    vertical-align: middle;
    font-family: Bradley Hand, cursive;
    font-size: 4ch;
    color: rgb(11, 2, 40);
}
h1{
    margin: 0;
}
h3{
    margin: 0;
}
.menu{
    background-color: rgb(229, 229, 241);
    width: 195vh;
    height: 77vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.cadaluno{
    width: 33.3%;
    height: 100%;
    cursor: pointer;
    font-family: Bradley Hand, cursive;
}
.cadprof{
    width: 33.3%;
    height: 100%;
    cursor: pointer;
    border-left: 2px black solid;
    font-family: Bradley Hand, cursive;
}
.caddisciplinas{
    width: 33.3%;
    height: 100%;
    cursor: pointer;
    border-left: 2px black solid;
    font-family: Bradley Hand, cursive;
}

.button{
    background-color: limegreen;
    border-radius: 30px;
    width: 20vh;
    height: 7vh;
    cursor: pointer;
    
}
button:hover{
     background-color: rgb(68, 244, 9);
     
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