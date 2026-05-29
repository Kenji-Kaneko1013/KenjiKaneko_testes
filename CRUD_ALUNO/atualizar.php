<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../estrutura/css.php'); ?>
    <title>Alterar Aluno</title>
</head>
<body style="font-family: helvetica;">
    <form>
        <!-- Navbar -->
        <?php include('../estrutura/navbar.php'); ?>
        </p>
    </form>
    <h4>
        <font color="red">
            <center>Alteração de Dados do Aluno</center>
        </font>   
    </h4>

    <hr width="100%" align="center" size="3" color="blue">
<h1 align="center">Procurar Aluno</h1>

<form method="POST" action="formAtualizar.php" align="center">
    ID do Aluno(a):
    <input type="text" size="30" name="ID"><br><br>
    <input type="submit" class="btn btn-info  btn-sm" value="Procurar">
    <input type="reset" class="btn btn-danger  btn-sm" value="Limpar Dados">
</form>

    <hr>
    <p align="center">Prof. Sergio Luiz da Silveira</p> 
<!-- JS -->
<?php include('../estrutura/js.php'); ?>
<!-- Fim JS -->    
</body>
</html>