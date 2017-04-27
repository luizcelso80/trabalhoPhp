<?php
function __autoload($classe) {

	require_once 'classes/'.$classe.'.php';

}

$alu_nome                    = 'Joao';
$alu_ra                      = '9652';
$alu_celular                 = '';
$alu_email                   = '';
$alu_anoturma                = '';
$alu_trabalha                = '';
$alu_empresa                 = '';
$alu_dt_trabalha             = '';
$alu_carteira                = '';
$alu_dt_carteira             = '';
$alu_declaracao_empresa      = '';
$alu_dt_declaracao_empresa   = '';
$alu_convenio                = '';
$alu_dt_convenio             = '';
$alu_compromisso             = '';
$alu_dt_compromisso          = '';
$alu_relatorio               = '';
$alu_dt_relatorio            = '';
$alu_declaracao_fib_impressa = '';
$alu_declaracao_fib_data     = '';
$alu_pendencia               = '';
$estagio                     = new Estagio();
$estagio->setAlu_Nome($alu_nome);
$estagio->setAlu_Ra($alu_ra);
/*$estagio->setAlu_Celular($alu_celular);
$estagio->setAlu_Email($alu_email);
$estagio->setAlu_AnoTurma($alu_anoturma);
$estagio->setAlu_Trabalha($alu_trabalha);
$estagio->setAlu_Empresa($alu_empresa);
$estagio->setAlu_Dt_Trabalha($alu_dt_trabalha);
$estagio->setAlu_Carteira($alu_carteira);
$estagio->setAlu_Dt_Carteira($alu_dt_carteira);
$estagio->setAlu_Declaracao_Empresa($alu_declaracao_empresa);
$estagio->setAlu_Dt_Declaracao_Empresa($alu_dt_declaracao_empresa);
$estagio->setAlu_Convenio($alu_convenio);
$estagio->setAlu_Dt_Convenio($alu_dt_convenio);
$estagio->setAlu_Compromisso($alu_compromisso);
$estagio->setAlu_Dt_Compromisso($alu_dt_compromisso);
$estagio->setAlu_Relatorio($alu_relatorio);
$estagio->setAlu_Dt_relatorio($alu_dt_relatorio);
$estagio->setAlu_Declaracao_Fib_Impressa($alu_declaracao_fib_impressa);
$estagio->setAlu_Declaracao_Fib_Data($alu_declaracao_fib_data);
$estagio->setAlu_Pendencia($alu_pendencia);*/

$estagio->insert();
?>