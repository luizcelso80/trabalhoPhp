<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}
$alu_id                      = isset($_REQUEST['alu_id']) ? $_REQUEST['alu_id'] : NULL;
$alu_nome                    = isset($_REQUEST['alu_nome']) ? $_REQUEST['alu_nome']: NULL;
$alu_ra                      = isset($_REQUEST['alu_ra']) ? $_REQUEST['alu_ra']: NULL;
$alu_celular                 = isset($_REQUEST['alu_celular']) ? $_REQUEST['alu_celular']: NULL;
$alu_email                   = isset($_REQUEST['alu_email']) ? $_REQUEST['alu_email']: NULL;
$alu_anoturma                = isset($_REQUEST['alu_anoturma']) ? $_REQUEST['alu_anoturma']: NULL;
$alu_trabalha                = isset($_REQUEST['alu_trabalha']) ? $_REQUEST['alu_trabalha']: NULL;
$alu_empresa                 = isset($_REQUEST['alu_empresa']) ? $_REQUEST['alu_empresa']: NULL;
$alu_dt_trabalha             = isset($_REQUEST['alu_dt_trabalha']) ? $_REQUEST['alu_dt_trabalha']: NULL;
$alu_carteira                = isset($_REQUEST['alu_carteira']) ? $_REQUEST['alu_carteira']: NULL;
$alu_dt_carteira             = isset($_REQUEST['alu_dt_carteira']) ? $_REQUEST['alu_dt_carteira']: NULL;
$alu_declaracao_empresa      = isset($_REQUEST['alu_declaracao']) ? $_REQUEST['alu_declaracao']: NULL;
$alu_dt_declaracao_empresa   = isset($_REQUEST['alu_declaracao_empresa']) ? $_REQUEST['alu_declaracao_empresa']: NULL;
$alu_convenio                = isset($_REQUEST['alu_convenio']) ? $_REQUEST['alu_convenio']: NULL;
$alu_dt_convenio             = isset($_REQUEST['alu_dt_convenio']) ? $_REQUEST['alu_dt_convenio']: NULL;
$alu_compromisso             = isset($_REQUEST['alu_compromisso']) ? $_REQUEST['alu_compromisso']: NULL;
$alu_dt_compromisso          = isset($_REQUEST['alu_dt_compromisso']) ? $_REQUEST['alu_dt_compromisso']: NULL;
$alu_relatorio               = isset($_REQUEST['alu_relatorio']) ? $_REQUEST['alu_relatorio']: NULL;
$alu_dt_relatorio            = isset($_REQUEST['alu_dt_relatorio']) ? $_REQUEST['alu_dt_relatorio']: NULL;
$alu_declaracao_fib_impressa = isset($_REQUEST['alu_declaracao_fib_impressa']) ? $_REQUEST['alu_declaracao_fib_impressa']: NULL;
$alu_declaracao_fib_data     = isset($_REQUEST['alu_declaracao_fib_data']) ? $_REQUEST['alu_declaracao_fib_data']: NULL;
$alu_pendencia               = isset($_REQUEST['alu_pendencia']) ? $_REQUEST['alu_pendencia']: NULL;


$novoAluno = new Estagio();

$novoAluno->setAlu_Nome($alu_nome);
$novoAluno->setAlu_Ra($alu_ra);
$novoAluno->setAlu_Celular($alu_celular);
$novoAluno->setAlu_Email($alu_email);
$novoAluno->setAlu_AnoTurma($alu_anoturma);
$novoAluno->setAlu_Trabalha($alu_trabalha);
$novoAluno->setAlu_Empresa($alu_empresa);
$novoAluno->setAlu_Dt_Trabalha($alu_dt_trabalha);
$novoAluno->setAlu_Carteira($alu_carteira);
$novoAluno->setAlu_Dt_Carteira($alu_dt_carteira);
$novoAluno->setAlu_Declaracao_Empresa($alu_declaracao_empresa);
$novoAluno->setAlu_Dt_Declaracao_Empresa($alu_dt_declaracao_empresa);
$novoAluno->setAlu_Convenio($alu_convenio);
$novoAluno->setAlu_Dt_Convenio($alu_dt_convenio);
$novoAluno->setAlu_Compromisso($alu_compromisso);
$novoAluno->setAlu_Dt_Compromisso($alu_dt_compromisso);
$novoAluno->setAlu_Relatorio($alu_relatorio);
$novoAluno->setAlu_Dt_relatorio($alu_dt_relatorio);
$novoAluno->setAlu_Declaracao_Fib_Impressa($alu_declaracao_fib_impressa);
$novoAluno->setAlu_Declaracao_Fib_Data($alu_declaracao_fib_data);
$novoAluno->setAlu_Pendencia($alu_pendencia);

if($alu_id){
    $novoAluno->update($alu_id);
}else{
    $novoAluno->insert();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Controle de Estagio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn").click(function(e) {
                alert("clicou");
            });
            $("#content>.btn-danger").click(function(e){
                //e.preventDefault();
                alert("deletou");
            });
        });

    </script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Menu para navegacao mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">Controle de Estágio</a>
            </div>
            <!-- Fim Menu para navegacao mobile -->

            <div class="collapse navbar-collapse" id="bs1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="incluir.php">Incluir</a></li>
                            <li><a href="consulta.php">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pendencia.php">Declaração Fib</a></li>
                            <li><a href="teste.php">Pendência</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!--Fim da <div class="container-fluid">-->
    </nav>
    <!--Fim da navbar-->
    <div class="container-fluid" id="content">
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>
