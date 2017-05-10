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
        <input type="text" name="alu_anoturma" class="form-control" id="alu_anoturma" placeholder="AAAA">
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
                
                /*
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
                */

            }

            function pendencia() {
                var trabalha = form1.alu_trabalha.value; //radio
                var carteira = form1.alu_carteira.value; //radio
                var declaracao = form1.alu_declaracao_empresa.value; //radio
                var convenio = form1.alu_convenio.value; //radio
                var compromisso = form1.alu_compromisso.value; //radio
                var relatorio = form1.alu_relatorio.value; //radio                       


                if (trabalha == "s" && carteira == "s" && declaracao == "s" && relatorio == "s") {
                    //Pendencia: nao 
                    document.getElementById("alu_pendencia_s").checked = false;
                    document.getElementById("alu_pendencia_n").checked = true;
                } else if (trabalha == "n" && convenio == "s" && compromisso == "s" && relatorio == "s") {
                    //Pendencia: nao 
                    document.getElementById("alu_pendencia_s").checked = false;
                    document.getElementById("alu_pendencia_n").checked = true;
                } else {
                    //Pendencia: NENHUM 
                    document.getElementById("alu_pendencia_s").checked = false;
                    document.getElementById("alu_pendencia_n").checked = false;
                }

            }

            function trabalha(val, id) {
                if (val == "s") {
                    document.getElementById(id).style.display = 'block';
                } else if (val == "n") {
                    document.getElementById(id).style.display = 'none';
                } else {
                    document.getElementById(id).style.display = 'block';
                }
            }

            function convenio(val, id) {
                if (val == "s") {
                    document.getElementById(id).style.display = 'block';
                } else if (val == "n") {
                    document.getElementById(id).style.display = 'none';
                } else {
                    document.getElementById(id).style.display = 'block';
                }
            }

            function compromisso(val, id) {
                if (val == "s") {
                    document.getElementById(id).style.display = 'block';
                } else if (val == "n") {
                    document.getElementById(id).style.display = 'none';
                } else {
                    document.getElementById(id).style.display = 'block';
                }
            }

            function relatorio(val, id) {
                if (val == "s") {
                    document.getElementById(id).style.display = 'block';
                } else if (val == "n") {
                    document.getElementById(id).style.display = 'none';
                } else {
                    document.getElementById(id).style.display = 'block';
                }
            }

            function declaracaoFib(val, id) {
                if (val == "s") {
                    document.getElementById(id).style.display = 'block';
                } else if (val == "n") {
                    document.getElementById(id).style.display = 'none';
                } else {
                    document.getElementById(id).style.display = 'block';
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
            <label for="alu_dt_trabalha">Data de início no trabalho atual</label>
            <input type="text" name="alu_dt_trabalha" class="form-control" id="alu_dt_trabalha" placeholder="AAAA-MM-DD">
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
            <input type="text" name="alu_dt_declaracao_empresa" class="form-control" id="alu_dt_declaracao_empresa" placeholder="AAAA-MM-DD">
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
        <input type="text" name="alu_dt_convenio" class="form-control" id="alu_dt_convenio" placeholder="AAAA-MM-DD">
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
        <input type="text" name="alu_dt_compromisso" class="form-control" id="alu_dt_compromisso" placeholder="AAAA-MM-DD">
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
        <input type="text" name="alu_dt_relatorio" class="form-control" id="alu_dt_relatorio" placeholder="AAAA-MM-DD">
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
        <input type="text" name="alu_declaracao_fib_data" class="form-control" id="alu_declaracao_fib_data" placeholder="AAAA-MM-DD">
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
