<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../estrutura/css.php'); ?>
    <title>Listar</title>
</head>
<body style="font-family: helvetica;">
    <form>
        <!-- Navbar -->
        <?php include('../estrutura/navbar.php'); ?>
        </p>
    </form>
    <h4>
        <font color="green">
            <center>Listagem de Alunos</center>
        </font>   
    </h4>

    <hr width="100%" align="center" size="3" color="blue">
    
<?php
    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");
    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "SELECT * FROM `aluno`;";
    echo $sql."<hr>";
    $result = $conexao->query($sql);

    if($result->num_rows > 0){
        while($linha = $result->fetch_assoc()){
        echo "Id: ".$linha["id"]."<br>";
        echo "Nome: ".$linha["nome"]."<br>";
        echo "Data de Nascimento: ".$linha["dataNascimento"]."<br>";
        echo "Nome do Pai: ".$linha["nomePai"]."<br>";
        echo "Nome da Mãe: ".$linha["nomeMae"]."<br>";
        echo "Telefone: ".$linha["telefone"]."<br>";
        echo "Email: ".$linha["email"]."<br>";
        echo "Sexo: ".$linha["sexo"]."<br>";
        echo "Bairro: ".$linha["bairro"]."<br><hr>";
        }
    } else {
        echo "Sem resultado <br>";
    }

    $conexao->close();
?>
    <hr>
    <p align="center">Prof. Sergio Luiz da Silveira</p> 
<!-- JS -->
<?php include('../estrutura/js.php'); ?>
<!-- Fim JS -->
</body>
</html>