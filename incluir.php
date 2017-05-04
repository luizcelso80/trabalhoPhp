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
            $("#content>.btn-danger").click(function(e) {
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
        <form action="dbIncluir.php" method="post" name="formIncluir">
            <div class="form-group">
                <!--<label for="alu_id">ID</label>-->

                <input type="hidden" class="form-control" id="alu_id" name="alu_id" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="alu_nome">Nome</label>
                <input type="text" class="form-control" id="alu_nome" name="alu_nome" placeholder="Nome do aluno">
            </div>
            <div class="form-group">
                <label for="alu_ra">RA</label>
                <input type="text" name="alu_ra" class="form-control" id="alu_ra" placeholder="Registro do Aluno">
            </div>
            <div class="form-group">
                <label for="alu_celular">Celular</label>
                <input type="text" name="alu_celular" class="form-control" id="alu_celular" placeholder="014 9 9999 9999">
            </div>
            <div class="form-group">
                <label for="alu_email">E-mail</label>
                <input type="text" name="alu_email" class="form-control" id="alu_email" placeholder="aluno@email.com">
            </div>
            <div class="form-group">
                <label for="alu_anoturma">Ano de início da turma</label>
                <input type="date" name="alu_anoturma" class="form-control" id="alu_anoturma">
            </div>
            <div class="form-group">
                <label for="alu_trabalha">Trabalha?</label><br/>
                <label class="radio-inline">
            <input name="alu_trabalha" id="alu_trabalha" value="s" type="radio" onclick="ativa('s', 'informacoesTrabalho')">
            Sim
        </label>
                <label class="radio-inline">
            <input name="alu_trabalha" id="alu_trabalha" value="n" checked="" type="radio" onclick="ativa('n', 'informacoesTrabalho')">
            Não
        </label>
                <script type="text/javascript">
                    function ativa(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                            document.formIncluir.alu_pendencia_sim.checked = true;
                            document.formIncluir.alu_pendencia_nao.checked = false;
                        } else {
                            document.getElementById(id).style.display = 'none';
                            document.formIncluir.alu_pendencia_nao.checked = true;
                            document.formIncluir.alu_pendencia_sim.checked = false;
                        }
                    }

                </script>
            </div>
            <div id="informacoesTrabalho" style="display: none;">
                <div class="form-group">
                    <label for="alu_empresa">Empresa</label>
                    <input type="text" name="alu_empresa" class="form-control" id="alu_empresa" placeholder="Nome da empresa">
                </div>
                <div class="form-group">
                    <label for="alu_dt_trabalha">Ano de início no trabalho atual</label>
                    <input type="date" name="alu_dt_trabalha" class="form-control" id="alu_dt_trabalha">
                </div>
                <div class="form-group">
                    <label for="alu_carteira">Copia carteira de trabalho</label><br/>
                    <label class="radio-inline"><input name="alu_carteira" id="alu_carteira" value="s" type="radio">Entregue</label>
                    <label class="radio-inline"><input name="alu_carteira" id="alu_carteira" value="n" checked="" type="radio">Não entregue</label>
                </div>
                <div class="form-group">
                    <label for="alu_declaracao_empresa">Declaração da empresa</label><br/>
                    <label class="radio-inline"><input name="alu_declaracao_empresa" id="alu_declaracao_empresa" value="s" type="radio">Entregue</label>
                    <label class="radio-inline"><input name="alu_declaracao_empresa" id="alu_declaracao_empresa" value="n" checked="" type="radio">Não entregue</label>
                </div>
                <div class="form-group">
                    <label for="alu_dt_declaracao_empresa">Data da declaração da empresa</label>
                    <input type="date" name="alu_dt_declaracao_empresa" class="form-control" id="alu_dt_declaracao_empresa">
                </div>
            </div>
            <div class="form-group">
                <label for="alu_convenio">Possui convênio</label><br/>
                <label class="radio-inline"><input name="alu_convenio" id="alu_convenio" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_convenio" id="alu_convenio" value="n" checked="" type="radio">Não</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_convenio">Data do convenio</label>
                <input type="date" name="alu_dt_convenio" class="form-control" id="alu_dt_convenio">
            </div>
            <div class="form-group">
                <label for="alu_compromisso">Compromisso</label><br/>
                <label class="radio-inline"><input name="alu_compromisso" id="alu_compromisso" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_compromisso" id="alu_compromisso" value="n" checked="" type="radio">Não</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_compromisso">Data do compromisso</label>
                <input type="date" name="alu_dt_compromisso" class="form-control" id="alu_dt_compromisso">
            </div>
            <div class="form-group">
                <label for="alu_relatorio">Relatório</label><br/>
                <label class="radio-inline"><input name="alu_relatorio" id="alu_relatorio" value="s" type="radio">Entregue</label>
                <label class="radio-inline"><input name="alu_relatorio" id="alu_relatorio" value="n" checked="" type="radio">Não entregue</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_relatorio">Data do relatório</label>
                <input type="date" name="alu_dt_relatorio" class="form-control" id="alu_dt_relatorio">
            </div>
            <div class="form-group">
                <label for="alu_declaracao_fib_impressa">Declaração FIB impressa</label><br/>
                <label class="radio-inline"><input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa" value="s" type="radio">Entregue</label>
                <label class="radio-inline"><input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa" value="n" checked="" type="radio">Não entregue</label>
            </div>
            <div class="form-group">
                <label for="alu_declaracao_fib_data">Data do declaração FIB</label>
                <input type="date" name="alu_declaracao_fib_data" class="form-control" id="alu_declaracao_fib_data">
            </div>
            <div class="form-group">
                <label for="alu_pendencia">Pendência</label><br/>
                <label class="radio-inline"><input name="alu_pendencia_sim" id="alu_pendencia" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_pendencia_nao" id="alu_pendencia" value="n" type="radio">Não</label>
            </div>
            <!--<div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>-->
            <input type="submit" class="btn btn-default" value="Cadastrar">

        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>
