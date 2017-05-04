<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$lista = new Estagio();





$lista->findAll();
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
            $(".btn-danger").click(function(e){
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
    	<div id="listar" class="col-md-5 col-md-offset-3">
    		<table class="table table-striped table-responsive table-condensed">
    			<thead>
    				<th>Id</th>
    				<th>Nome</th>
    				<th>Ra</th>
    				<th>Email</th>
    				<th colspan="2">Acoes</th>
    			</thead>
    			<tbody>
    				<?php foreach ( $lista->findAll() as $key => $value) { ?>
    				<tr>
    					<td><?php echo $value->alu_id; ?></td>
    					<td><?php echo $value->alu_nome; ?></td>
    					<td><?php echo $value->alu_ra; ?></td>
    					<td><?php echo $value->alu_email; ?></td>
    					<td>
    						<a type="button" class="btn btn-warning btn-xs" >
    						    <span class="glyphicon glyphicon-pencil"></span>
    						</a>
    					</td>
    					<td>
    						<button type="submit" class="btn btn-danger btn-xs">
    						    <span class="glyphicon glyphicon-trash"></span>
    						</button>
    					</td>
    				</tr>
    				<?php } ?>
    			</tbody>
    		</table>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>


