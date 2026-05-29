<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../estrutura/css.php'); ?>
    <title>Atualiza Dados</title>
</head>
<body style="font-family: helvetica;">
    <form>
        <!-- Navbar -->
        <?php include('../estrutura/navbar.php'); ?>
        </p>
    </form>
    <h4>
         <font color="red">
            <center>Alteração de Dados do Cadastro</center>
        </font>   
    </h4>

    <hr width="100%" align="center" size="3" color="blue">


<?php

if (isset($_POST["ID"]) && isset($_POST["Nome"]) && isset($_POST["DataNasc"]) && isset($_POST["NomePai"]) && isset($_POST["NomeMae"]) && isset($_POST["Telefone"]) && isset($_POST["Email"]) && isset($_POST["Sexo"]) && $_POST["Bairro"] != ''){
    
    $ID = $_POST["ID"];
    $nome = $_POST["Nome"];
    $datanasc = $_POST["DataNasc"];
    $nomepai = $_POST["NomePai"];
    $nomemae = $_POST["NomeMae"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $sexo = $_POST["Sexo"];
    $bairro = $_POST["Bairro"];

    if(strlen($datanasc) < 10){
        $erro = "Por Favor inserir uma data válida";
    } else {
        if(strlen($telefone)<13){
            $erro = "Por favor inserir um telefone válido";
        } else {
            $conexao = new mysqli("127.0.0.1","root","","sistemaescola");
            if($conexao->connect_errno){
                $erro = "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");

            $sql = "UPDATE `aluno` SET id = $ID, nome = '$nome', dataNascimento = '$datanasc', nomePai = '$nomepai', nomeMae = '$nomemae', telefone = '$telefone', email = '$email', sexo = '$sexo', bairro = '$bairro' WHERE id='$ID'; ";

            echo $sql."<br>";

            
            if($conexao->query($sql)=== TRUE){
                $sucesso = "Dados alterados com sucesso!";
            } else {
                $erro = "Erro :".$sql."<br>".$conexao->error;
            }
            $conexao->close();
        }
    }
} else {
    $erro = "Campo obrigatório não preenchido";
}


if(isset($erro)) echo '<div style="color:#F00" align="center">'.$erro.'</div><br><br>';

if(isset($sucesso)) echo '<div style="color:#00F" align="center">'.$sucesso.'</div><br><br>';


?>
        <hr>
        <p align="center">Prof. Sergio Luiz da Silveira</p> 
<!-- JS -->
<?php include('../estrutura/js.php'); ?>
<!-- Fim JS -->  
</body>
</html>