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
            <input name="alu_trabalha" id="alu_trabalha1" value="s" type="radio" onclick="ativa('s', 'informacoesTrabalho')">
            Sim
        </label>
                <label class="radio-inline">
            <input name="alu_trabalha" id="alu_trabalha2" value="n" checked="" type="radio" onclick="ativa('n', 'informacoesTrabalho')">
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
                    <label class="radio-inline"><input name="alu_carteira" id="alu_carteira1" value="s" type="radio">Entregue</label>
                    <label class="radio-inline"><input name="alu_carteira" id="alu_carteira2" value="n" checked="" type="radio">Não entregue</label>
                </div>
                <div class="form-group">
                    <label for="alu_declaracao_empresa">Declaração da empresa</label><br/>
                    <label class="radio-inline"><input name="alu_declaracao_empresa" id="alu_declaracao_empresa1" value="s" type="radio">Entregue</label>
                    <label class="radio-inline"><input name="alu_declaracao_empresa" id="alu_declaracao_empresa2" value="n" checked="" type="radio">Não entregue</label>
                </div>
                <div class="form-group">
                    <label for="alu_dt_declaracao_empresa">Data da declaração da empresa</label>
                    <input type="date" name="alu_dt_declaracao_empresa" class="form-control" id="alu_dt_declaracao_empresa">
                </div>
            </div>
            <div class="form-group">
                <label for="alu_convenio">Possui convênio</label><br/>
                <label class="radio-inline"><input name="alu_convenio" id="alu_convenio1" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_convenio" id="alu_convenio2" value="n" checked="" type="radio">Não</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_convenio">Data do convenio</label>
                <input type="date" name="alu_dt_convenio" class="form-control" id="alu_dt_convenio">
            </div>
            <div class="form-group">
                <label for="alu_compromisso">Compromisso</label><br/>
                <label class="radio-inline"><input name="alu_compromisso" id="alu_compromisso1" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_compromisso" id="alu_compromisso2" value="n" checked="" type="radio">Não</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_compromisso">Data do compromisso</label>
                <input type="date" name="alu_dt_compromisso" class="form-control" id="alu_dt_compromisso">
            </div>
            <div class="form-group">
                <label for="alu_relatorio">Relatório</label><br/>
                <label class="radio-inline"><input name="alu_relatorio" id="alu_relatorio1" value="s" type="radio">Entregue</label>
                <label class="radio-inline"><input name="alu_relatorio" id="alu_relatorio2" value="n" checked="" type="radio">Não entregue</label>
            </div>
            <div class="form-group">
                <label for="alu_dt_relatorio">Data do relatório</label>
                <input type="date" name="alu_dt_relatorio" class="form-control" id="alu_dt_relatorio">
            </div>
            <div class="form-group">
                <label for="alu_declaracao_fib_impressa">Declaração FIB impressa</label><br/>
                <label class="radio-inline"><input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa1" value="s" type="radio">Entregue</label>
                <label class="radio-inline"><input name="alu_declaracao_fib_impressa" id="alu_declaracao_fib_impressa2" value="n" checked="" type="radio">Não entregue</label>
            </div>
            <div class="form-group">
                <label for="alu_declaracao_fib_data">Data do declaração FIB</label>
                <input type="date" name="alu_declaracao_fib_data" class="form-control" id="alu_declaracao_fib_data">
            </div>
            <div class="form-group">
                <label for="alu_pendencia">Pendência</label><br/>
                <label class="radio-inline"><input name="alu_pendencia" id="alu_pendencias" value="s" type="radio">Sim</label>
                <label class="radio-inline"><input name="alu_pendencia" id="alu_pendencian" value="n" type="radio">Não</label>
            </div>
            <!--<div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>-->
            <input type="submit" class="btn btn-default" value="Cadastrar">

        </form>