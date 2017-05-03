<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$alu_nome                    = isset($REQUEST['alu_nome']) ? $REQUEST['alu_nome']: NULL;
$alu_ra                      = isset($REQUEST['alu_ra']) ? $REQUEST['alu_ra']: NULL;
$alu_celular                 = isset($REQUEST['alu_celular']) ? $REQUEST['alu_celular']: NULL;
$alu_email                   = isset($REQUEST['alu_email']) ? $REQUEST['alu_email']: NULL;
$alu_anoturma                = isset($REQUEST['alu_anoturma']) ? $REQUEST['alu_anoturma']: NULL;
$alu_trabalha                = isset($REQUEST['alu_trabalha']) ? $REQUEST['alu_trabalha']: NULL;
$alu_empresa                 = isset($REQUEST['alu_empresa']) ? $REQUEST['alu_empresa']: NULL;
$alu_dt_trabalha             = isset($REQUEST['alu_dt_trabalha']) ? $REQUEST['alu_dt_trabalha']: NULL;
$alu_carteira                = isset($REQUEST['alu_carteira']) ? $REQUEST['alu_carteira']: NULL;
$alu_dt_carteira             = isset($REQUEST['alu_dt_carteira']) ? $REQUEST['alu_dt_carteira']: NULL;
$alu_declaracao_empresa      = isset($REQUEST['alu_declaracao']) ? $REQUEST['alu_declaracao']: NULL;
$alu_dt_declaracao_empresa   = isset($REQUEST['alu_declaracao_empresa']) ? $REQUEST['alu_declaracao_empresa']: NULL;
$alu_convenio                = isset($REQUEST['alu_convenio']) ? $REQUEST['alu_convenio']: NULL;
$alu_dt_convenio             = isset($REQUEST['alu_dt_convenio']) ? $REQUEST['alu_dt_convenio']: NULL;
$alu_compromisso             = isset($REQUEST['alu_compromisso']) ? $REQUEST['alu_compromisso']: NULL;
$alu_dt_compromisso          = isset($REQUEST['alu_dt_compromisso']) ? $REQUEST['alu_dt_compromisso']: NULL;
$alu_relatorio               = isset($REQUEST['alu_relatorio']) ? $REQUEST['alu_relatorio']: NULL;
$alu_dt_relatorio            = isset($REQUEST['alu_dt_relatorio']) ? $REQUEST['alu_dt_relatorio']: NULL;
$alu_declaracao_fib_impressa = isset($REQUEST['alu_declaracao_fib_impressa']) ? $REQUEST['alu_declaracao_fib_impressa']: NULL;
$alu_declaracao_fib_data     = isset($REQUEST['alu_declaracao_fib_data']) ? $REQUEST['alu_declaracao_fib_data']: NULL;
$alu_pendencia               = isset($REQUEST['alu_pendencia']) ? $REQUEST['alu_pendencia']: NULL;

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
$novoAluno->insert();
?>