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
$alu_declaracao_empresa      = isset($_REQUEST['alu_declaracao_empresa']) ? $_REQUEST['alu_declaracao_empresa']: NULL;
$alu_dt_declaracao_empresa   = isset($_REQUEST['alu_dt_declaracao_empresa']) ? $_REQUEST['alu_dt_declaracao_empresa']: NULL;
$alu_convenio                = isset($_REQUEST['alu_convenio']) ? $_REQUEST['alu_convenio']: NULL;
$alu_dt_convenio             = isset($_REQUEST['alu_dt_convenio']) ? $_REQUEST['alu_dt_convenio']: NULL;
$alu_compromisso             = isset($_REQUEST['alu_compromisso']) ? $_REQUEST['alu_compromisso']: NULL;
$alu_dt_compromisso          = isset($_REQUEST['alu_dt_compromisso']) ? $_REQUEST['alu_dt_compromisso']: NULL;
$alu_relatorio               = isset($_REQUEST['alu_relatorio']) ? $_REQUEST['alu_relatorio']: NULL;
$alu_dt_relatorio            = isset($_REQUEST['alu_dt_relatorio']) ? $_REQUEST['alu_dt_relatorio']: NULL;
$alu_declaracao_fib_impressa = isset($_REQUEST['alu_declaracao_fib_impressa']) ? $_REQUEST['alu_declaracao_fib_impressa']: NULL;
$alu_declaracao_fib_data     = isset($_REQUEST['alu_declaracao_fib_data']) ? $_REQUEST['alu_declaracao_fib_data']: NULL;

if($alu_trabalha == 's'){
    echo "trabalha";
    if($alu_carteira == 's' && $alu_declaracao_empresa == 's' && $alu_relatorio == 's'){
        $alu_pendencia = 'n';
    }else{
        $alu_pendencia = 's';
    }
}else{
    echo "trabalha";
    echo $alu_trabalha;
    if($alu_convenio == 's' && $alu_compromisso == 's' && $alu_relatorio == 's'){
        $alu_pendencia = 'n';
    }else{
        $alu_pendencia = 's';
    }
}



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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
    <?php require_once('menu.php') ?>
    <!--Fim da navbar-->
    <div class="container-fluid" id="content">
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>
