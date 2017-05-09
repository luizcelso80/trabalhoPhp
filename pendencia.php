<?php
function __autoload($classe) {
    require_once 'classes/'.$classe.'.php';
}

$lista = new Estagio();

if(isset($_GET['excluir'])){
    $id = $_GET['excluir'];
    $lista->delete($id);
}


if(isset($_GET['alu_pendencia'])){
    $listagem = $lista->pendencia($_GET['alu_pendencia']);
}else{
    $listagem = $lista->pendencia('h');
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
                //alert("deletou");
            });
        });

    </script>
</head>

<body>
    <?php require_once('menu.php') ?>
    <!--Fim da navbar-->
    <div class="container-fluid" id="content">
        <?php require_once('formPesquisa.php') ?>
        <?php require_once('listar.php'); ?>
        
            <a type="button" href="imprimir.php?alu_pendencia=<?php echo isset($_GET['alu_pendencia'])? $_GET['alu_pendencia']:NULL ; ?>" target="_blank" class="fa fa-file-pdf-o btn btn-danger" aria-hidden="true"></a>
            <a type="button" href="excel.php?alu_pendencia=<?php echo isset($_GET['alu_pendencia'])? $_GET['alu_pendencia']:NULL ; ?>" class="fa fa-file-excel-o btn btn-success" aria-hidden="true"></a>
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>
