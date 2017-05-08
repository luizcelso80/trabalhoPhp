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
        <form action="dbIncluir.php" method="post" name="form1" onChange="pendencia()">
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
                <input type="text" nome="alu_ra" class="form-control" id="alu_ra" placeholder="Registro do Aluno">
            </div>
            <div class="form-group">
                <label for="alu_celular">Celular</label>
                <input type="text" nome="alu_celular" class="form-control" id="alu_celular" placeholder="014 9 9999 9999">
            </div>
            <div class="form-group">
                <label for="alu_email">E-mail</label>
                <input type="text" nome="alu_email" class="form-control" id="alu_email" placeholder="aluno@email.com">
            </div>
            <div class="form-group">
                <label for="alu_anoturma">Ano de início da turma</label>
                <input type="date" nome="alu_anoturma" class="form-control" id="alu_anoturma">
            </div>
            <div class="form-group">
                <label for="alu_trabalha">Trabalha?</label><br/>
                <label class="radio-inline">
            <input name="alu_trabalha" id="alu_trabalha_s" value="s" type="radio" onclick="trabalha(this.value, 'id_trabalha')">
            Sim
        </label>
                <label class="radio-inline">
            <input name="alu_trabalha" id="alu_trabalha_n" value="n" type="radio" onclick="trabalha(this.value, 'id_trabalha')">
            Não
        </label>
                <script type="text/javascript">
                    window.onload = function() {
                        //alert("Entrou");
                        document.getElementById("alu_trabalha_n").checked = true;
                        document.getElementById("alu_carteira_n").checked = true;
                        document.getElementById("alu_declaracao_empresa_n").checked = true;
                        document.getElementById("alu_convenio_n").checked = true;
                        document.getElementById("alu_compromisso_n").checked = true;
                        document.getElementById("alu_relatorio_n").checked = true;
                        document.getElementById("alu_declaracao_fib_impressa_n").checked = true;
                        document.getElementById("alu_pendencia_n").checked = true;

                        document.getElementById("id_trabalha").style.display = 'none';
                        document.getElementById("id_convenio").style.display = 'none';
                        document.getElementById("id_compromisso").style.display = 'none';
                        document.getElementById("id_relatorio").style.display = 'none';
                        document.getElementById("id_declaracaoFib").style.display = 'none';
                    }

                    function pendencia() {                        
                        var trabalha = form1.alu_trabalha.value; //radio
                        var carteira = form1.alu_carteira.value; //radio
                        var declaracao = form1.alu_declaracao_empresa.value; //radio
                        var convenio = form1.alu_convenio.value; //radio
                        var compromisso = form1.alu_compromisso.value; //radio
                        var relatorio = form1.alu_relatorio.value; //radio                       
                        
                       
                        if (trabalha == "s" && carteira == "n" && declaracao == "n" && relatorio == "n") {
                            //Pendencia: SIM 
                            document.getElementById("alu_pendencia_s").checked = true;
                            document.getElementById("alu_pendencia_n").checked = false;
                        } else if (trabalha == "n" && convenio == "s" && compromisso == "s" && relatorio == "s") {
                            //Pendencia: SIM 
                            document.getElementById("alu_pendencia_s").checked = true;
                            document.getElementById("alu_pendencia_n").checked = false;
                        } else {
                            //Pendencia: NÃO 
                            document.getElementById("alu_pendencia_s").checked = false;
                            document.getElementById("alu_pendencia_n").checked = true;
                        }
                        
                    }

                    function trabalha(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                        } else {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                    function convenio(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                        } else {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                    function compromisso(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                        } else {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                    function relatorio(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                        } else {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                    function declaracaoFib(val, id) {
                        if (val == "s") {
                            document.getElementById(id).style.display = 'block';
                        } else {
                            document.getElementById(id).style.display = 'none';
                        }
                    }

                </script>
            </div>
            <div id="id_trabalha">
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
                    <label class="radio-inline">
                        <input name="alu_carteira" id="alu_carteira_s" value="s" type="radio">
                        Entregue
                    </label>
                    <label class="radio-inline">
                        <input name="alu_carteira" id="alu_carteira_n" value="n" type="radio">
                        Não entregue
                    </label>
                </div>
                <div class="form-group">
                    <label for="alu_declaracao_empresa">Declaração da empresa</label><br/>
                    <label class="radio-inline">
                        <input name="alu_declaracao_empresa" id="alu_declaracao_empresa_s" value="s" type="radio">
                        Entregue
                    </label>
                    <label class="radio-inline">
                        <input name="alu_declaracao_empresa" id="alu_declaracao_empresa_n" value="n" type="radio">
                        Não entregue
                    </label>
                </div>
                <div class="form-group">
                    <label for="alu_dt_declaracao_empresa">Data da declaração da empresa</label>
                    <input type="date" name="alu_dt_declaracao_empresa" class="form-control" id="alu_dt_declaracao_empresa">
                </div>
            </div>
            <div class="form-group">
                <label for="alu_convenio">Possui convênio</label><br/>
                <label class="radio-inline">
                    <input name="alu_convenio" id="alu_convenio_s" value="s" type="radio" onclick="convenio(this.value, 'id_convenio')">
                    Sim
                </label>
                <label class="radio-inline">
                    <input name="alu_convenio" id="alu_convenio_n" value="n" type="radio" onclick="convenio(this.value, 'id_convenio')">
                    Não
                </label>
            </div>
            <div class="form-group" id="id_convenio">
                <label for="alu_dt_convenio">Data do convenio</label>
                <input type="date" name="alu_dt_convenio" class="form-control" id="alu_dt_convenio">
            </div>
            <div class="form-group">
                <label for="alu_compromisso">Compromisso</label><br/>
                <label class="radio-inline">
                    <input name="alu_compromisso" id="alu_compromisso_s" value="s" type="radio" onclick="compromisso(this.value, 'id_compromisso')">
                    Sim
                </label>
                <label class="radio-inline">
                    <input name="alu_compromisso" id="alu_compromisso_n" value="n" type="radio" onclick="compromisso(this.value, 'id_compromisso')">
                    Não
                </label>
            </div>
            <div class="form-group" id="id_compromisso">
                <label for="alu_dt_compromisso">Data do compromisso</label>
                <input type="date" name="alu_dt_compromisso" class="form-control" id="alu_dt_compromisso">
            </div>
            <div class="form-group">
                <label for="alu_relatorio">Relatório</label><br/>
                <label class="radio-inline">
                    <input name="alu_relatorio" id="alu_relatorio_s" value="s" type="radio" onclick="relatorio(this.value, 'id_relatorio')">
                    Entregue
                </label>
                <label class="radio-inline">
                    <input name="alu_relatorio" id="alu_relatorio_n" value="n" type="radio" onclick="relatorio(this.value, 'id_relatorio')">
                    Não entregue
                </label>
            </div>
            <div class="form-group" id="id_relatorio">
                <label for="alu_dt_relatorio">Data do relatório</label>
                <input type="date" name="alu_dt_relatorio" class="form-control" id="alu_dt_relatorio">
            </div>
            <div class="form-group">
                <label for="alu_declaracao_fib_impressa">Declaração FIB impressa</label><br/>
                <label class="radio-inline">
                    <input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa_s" value="s" type="radio" onclick="declaracaoFib(this.value, 'id_declaracaoFib')">
                    Entregue
                </label>
                <label class="radio-inline">
                    <input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa_n" value="n" type="radio" onclick="declaracaoFib(this.value, 'id_declaracaoFib')">
                    Não entregue
                </label>
            </div>
            <div class="form-group" id="id_declaracaoFib">
                <label for="alu_declaracao_fib_data">Data do declaração FIB</label>
                <input type="date" name="alu_declaracao_fib_data" class="form-control" id="alu_declaracao_fib_data">
            </div>
            <div class="form-group">
                <label for="alu_pendencia">Pendência</label><br/>
                <label class="radio-inline">
                    <input name="alu_pendencia" id="alu_pendencia_s" value="s" type="radio">
                    Sim
                </label>
                <label class="radio-inline">
                    <input name="alu_pendencia" id="alu_pendencia_n" value="n" type="radio">
                    Não
                </label>
            </div>

            <input type="submit" class="btn btn-default" value="Cadastrar">

        </form>
    </div>

</body>

</html>
