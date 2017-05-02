<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$alu_nome                    = if(isset($REQUEST['alu_nome'])) ? $REQUEST['alu_nome']: 'jhgvjyhvjh';
$alu_ra                      = if(isset($REQUEST['alu_ra'])) ? $REQUEST['alu_ra']: '';
$alu_celular                 = if(isset($REQUEST['alu_celular'])) ? $REQUEST['alu_celular']: '';
$alu_email                   = if(isset($REQUEST['alu_email'])) ? $REQUEST['alu_email']: '';
$alu_anoturma                = if(isset($REQUEST['alu_anoturma'])) ? $REQUEST['alu_anoturma']: '';
$alu_trabalha                = if(isset($REQUEST['alu_trabalha'])) ? $REQUEST['alu_trabalha']: '';
$alu_empresa                 = if(isset($REQUEST['alu_empresa'])) ? $REQUEST['alu_empresa']: '';
$alu_dt_trabalha             = if(isset($REQUEST['alu_dt_trabalha'])) ? $REQUEST['alu_dt_trabalha']: '';
$alu_carteira                = if(isset($REQUEST['alu_carteira'])) ? $REQUEST['alu_carteira']: '';
$alu_dt_carteira             = if(isset($REQUEST['alu_dt_carteira'])) ? $REQUEST['alu_dt_carteira']: '';
$alu_declaracao_empresa      = if(isset($REQUEST['alu_declaracao'])) ? $REQUEST['alu_declaracao']: '';
$alu_dt_declaracao_empresa   = if(isset($REQUEST['alu_declaracao_empresa'])) ? $REQUEST['alu_declaracao_empresa']: '';
$alu_convenio                = if(isset($REQUEST['alu_convenio'])) ? $REQUEST['alu_convenio']: '';
$alu_dt_convenio             = if(isset($REQUEST['alu_dt_convenio'])) ? $REQUEST['alu_dt_convenio']: '';
$alu_compromisso             = if(isset($REQUEST['alu_compromisso'])) ? $REQUEST['alu_compromisso']: '';
$alu_dt_compromisso          = if(isset($REQUEST['alu_dt_compromisso'])) ? $REQUEST['alu_dt_compromisso']: '';
$alu_relatorio               = if(isset($REQUEST['alu_relatorio'])) ? $REQUEST['alu_relatorio']: '';
$alu_dt_relatorio            = if(isset($REQUEST['alu_dt_relatorio'])) ? $REQUEST['alu_dt_relatorio']: '';
$alu_declaracao_fib_impressa = if(isset($REQUEST['alu_declaracao_fib_impressa'])) ? $REQUEST['alu_declaracao_fib_impressa']: '';
$alu_declaracao_fib_data     = if(isset($REQUEST['alu_declaracao_fib_data'])) ? $REQUEST['alu_declaracao_fib_data']: '';
$alu_pendencia               = if(isset($REQUEST['alu_pendencia'])) ? $REQUEST['alu_pendencia']: '';

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