<?php
require_once 'classes/Estagio.php';

$estagio = new Estagio();
$estagio->setAlu_Nome("Luiz");
$estagio->setAlu_Ra("26789");
$estagio->insert();
?>