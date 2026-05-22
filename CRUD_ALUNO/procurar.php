<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Procurar Aluno</title>
</head>
<body style="font-family: helvetica;">
    <form>
        <p align="center">
            <font size="7" face="Arial">U.C Testes de Sistemas - SENAI SC</font>
        </p>
    </form>
    <h4>
        <font color="red">
            <center>Formulário de Procura de aluno</center>
        </font>   
    </h4>

    <hr width="100%" align="center" size="3" color="blue">
<h1 align="center">Procurar Aluno</h1>

<form method="POST" action="consulta.php" align="center">
    Nome do Aluno(a):
    <input type="text" size="30" name="Nome"><br><br>
    <input type="submit" class="btn btn-info btn-sm" value="Procurar">
    <input type="reset" class="btn btn-danger btn-sm" value="Limpar Dados">
</form>

<hr width="100%" align="center" size="3" color="blue">
        <table width="400" border="0" cellspacing="0" cellspading="0" align="center">
            <tr>
                <td>
                    <form method="POST" action="formAluno.php">
                        <center><input type="submit" class="btn btn-success btn-sm" value="Registrar Novo Aluno"></center>
                    </form>
                </td>
                <td>
                    <form method="POST" action="listar.php">
                        <center><input type="submit" class="btn btn-primary btn-sm" value="Listar Alunos"></center>
                    </form>
                <td>
                    <form method="POST" action="atualizar.php">
                        <center><input type="submit" class="btn btn-warning btn-sm" value="Atualizar Dados do  Aluno"></center>
                    </form>
                </td>
                <td>
                    <form method="POST" action="apagar.php">
                        <center><input type="submit" class="btn btn-danger btn-sm" value="Excluir Dados do  Aluno"></center>
                    </form>
                </td>
            </tr>
        </table><br>
        <nav align="center">
            <a href="index.php">| Home |</a>
            <a href="../CRUD_MATRICULA/formMatricula.php"> Matricula |</a>
        </nav>

    <hr>
    <p align="center">Prof. Sergio Luiz da Silveira</p> 
</body>
</html>