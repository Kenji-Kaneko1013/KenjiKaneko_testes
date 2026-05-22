<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">	
    <title>Cadastro Aluno</title>
    <script>
        function fMasc(objeto,mascara){
            obj=objeto;
            masc=mascara;
            setTimeout("fMascEx()",1);
        }

        function fMascEx(){
            obj.value=masc(obj.value);
        }

        function mData(cpf){
            cpf=cpf.replace(/\D/g,"");
            cpf=cpf.replace(/(\d{6})(\d)/,"$1/$2");
            cpf=cpf.replace(/(\d{4})(\d)/,"$1/$2");
            return cpf;
        }


        function mTel(tel){
            tel=tel.replace(/\D/g,"");
            tel=tel.replace(/^(\d)/,"($1");
            tel=tel.replace(/(.{3})(\d)/,"$1)$2");
            if (tel.length == 9) {
                tel=tel.replace(/(.{1})$/,"-$1");
            }else if (tel.length == 10) {
                tel=tel.replace(/(.{2})$/,"-$1");
            }else if (tel.length == 11) {
                tel=tel.replace(/(.{3})$/,"-$1");
            }else if (tel.length >= 12) {
                tel=tel.replace(/(.{4})$/,"-$1");
            }
            return tel;
        }

    </script>
</head>
<body style="font-family: helvetica;">
    
        <form>
            <p align="center">
                <font size="7" face="Arial">U.C Testes de Sistemas - SENAI SC</font>
            </p>
        </form>
        <h4>
            <font color="green">
                <center>Formulário de Cadastro do Aluno</center></font>
        </h4>

        <hr width="100%" align="center" size="3" color="blue"> <br>

        <h1 align="center">Dados Pessoais</h1>

        <!-- COLOQUE COMENTARIO NA LINHA ABAIXO PARA REALIZAR OS TESTES-->
        
        <!-- <form method="POST" action="cadastro.php" align="center"> -->

        <!-- RETIRE O COMENTARIO DA LINHA ABAIXO PARA REALIZAR OS TESTES e DEPOIS COMENTE NOVAMENTE-->

        <!--<form method="POST" action="../tests/verifica_form.php" align="center"> -->

        <!-- RETIRE O COMENTARIO DA LINHA ABAIXO PARA REALIZAR OS TESTES e DEPOIS COMENTE NOVAMENTE-->
        <form method="POST" action="cadastro.php" align="items-center"> <!--Problema: o Action não tava com o diretorio cadastro.php (diretorio errado:../tests/valida_form_grava.php)-->
                
            <table width="500" border="0" cellspacing="0" cellspading="0" align="center">
                <tr>
                    <td align="left">Nome do Aluno(a):</td>
                    <td><input type="text" size="30" class="form-control" name="Nome"></td>
                </tr>
                <tr>
                    <td align="left">Data de Nascimento:</td>
                    <td><input type="text" size="30" class="form-control" name="DataNasc" placeholder="aaaa/mm/dd" maxlength="10" onkeydown="javascript:fMasc(this,mData)"></td>
                </tr>
                <tr>
                    <td align="left">Nome do Pai:</td>
                    <td><input type="text" size="30" class="form-control" name="NomePai"></td>
                </tr>
                <tr>
                    <td align="left">Nome da Mãe:</td>
                    <td><input type="text" size="30" class="form-control" name="NomeMae"></td>
                </tr>
                <tr>
                    <td align="left">Telefone:</td>
                    <td><input type="text" size="30" class="form-control" name="Telefone" maxlength="14" onkeydown="javascript:fMasc(this,mTel);"></td>
                </tr>
                <tr>
                    <td align="left">E-Mail</td>
                    <td><input type="text" size="30" class="form-control" name="Email"></td>
                </tr>
                <tr>
                    <td align="left">Sexo</td>
                    <td class="form-check form-check-inline"><input type="radio" class="form-check-input" name="Sexo" value="Masculino">Masculino</td>
                    <td class="form-check form-check-inline"><input type="radio" class="form-check-input" name="Sexo" value="Feminino">Feminino</td>
                </tr>
                <tr>
                    <td align="left">Bairro</td>
                    <td>
                        <select class="form-select form-select-sm" name="Bairro" size="1">
                            <option></option>
                            <option>Agua Verde</option>
                            <option>Alto da XV</option>
                            <option>Batel</option>
                            <option>Cajuru</option>
                            <option>Centro Civico</option>
                            <option>Ecoville</option>
                            <option>Hauer</option>
                            <option>Jardim Botanico</option>
                            <option>Jardim das Americas</option>
                            <option>Portão</option>
                            <option>Santa Candida</option>
                            <option>Sitio Cercado</option>
                            <option>Xaxim</option>
                            <option>Boqueirão</option>
                            <option>CIC</option>
                        </select>
                    </td>
                </tr>
            </table><br>
            <div class="col-auto">
                <center>  
                    <input type="reset" class="btn btn-danger  btn-sm" value="Limpar Dados" >
                    <input type="submit" class="btn btn-success  btn-sm" value="Cadastrar Aluno">
                </center>
            </div>
        </form>
        <hr width="100%" align="center" size="3" color="blue">
        <table width="400" border="0" cellspacing="0" cellspading="0" align="center">
            <tr>
                <td>
                    <form method="POST" action="listar.php">
                        <center><input type="submit" class="btn btn-primary btn-sm" value="Listar Alunos"></center>
                    </form>
                </td>
                <td>
                    <form method="POST" action="procurar.php">
                        <center><input type="submit" class="btn btn-info btn-sm" value="Consultar Aluno"></center>
                    </form>
                </td>
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
            <div class="btn-group">
                <a href="index.php">| Home |</a>
                <a href="../CRUD_MATRICULA/formMatricula.php"> Matricula |</a>
            </div>
        </nav>
        <hr>
        <p align="center">Prof. Sergio Luiz da Silveira</p> 
</body>
</html>