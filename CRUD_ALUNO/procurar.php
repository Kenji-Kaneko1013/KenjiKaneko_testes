<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../estrutura/css.php'); ?>
    <title>Procurar Aluno</title>
</head>
<body style="font-family: helvetica;">
    <form>
        <!-- Navbar -->
        <?php include('../estrutura/navbar.php'); ?>
        </p>
    </form>
    <h4>
        <font color="red">
            <center>Formulário de Procura de aluno</center>
        </font>   
    </h4>
    <hr width="100%" align="center" size="3" color="blue">

    
<div class="container text-center">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
        <h1 align="center">Procurar Aluno</h1>
        <form method="POST" action="consulta.php" align="center">
            Nome do Aluno(a):
            <input type="text"  size="30" name="Nome"><br><br>
            <input type="submit" class="btn btn-info btn-sm" value="Procurar">
            <input type="reset" class="btn btn-danger btn-sm" value="Limpar Dados">
        </form>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>
    <hr>
    <p align="center">Prof. Sergio Luiz da Silveira</p> 

<!-- JS -->
<?php include('../estrutura/js.php'); ?>
<!-- Fim JS -->
</body>
</html>