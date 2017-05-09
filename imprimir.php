<?php
date_default_timezone_get('America/Sao_Paulo');
require "fpdf/fpdf.php";
require_once "classes/Estagio.php";
$alu_pendencia = $_GET['alu_pendencia'];
class Imprimir extends FPDF {
	function Header() {
		$this->Rect(10, 10, 190, 265);
		$this->SetFont('Arial', 'B', 8);
		$this->SetXY(10, 10);
		$agora = date("G:i:s");
		$hoje = date("d/m/Y");
		$linha = 15;
		$this->Cell(20, $linha, $agora, 1, 0, 'C');
		$this->Cell(150, $linha, 'FIB', 1, 0, 'C');
		$this->Cell(20, $linha, $hoje, 1, 0, 'C');

		//$this->Image('logo.png', 101, 11, -300);

		$this->ln();
		$this->SetFillColor(36, 109, 0);
		$this->SetTextColor(255, 255, 255);
		$this->SetFont('Arial', 'B', 8);
		$this->Cell(20, 5, 'ID', 'LTR', 0, 'C', 1);
		$this->Cell(170, 5, 'Nome do Grupo', 'LTR', 0, 'C', 1);

	}

	function Footer() {

		$this->SetTextColor(0, 0, 0);
		$this->SetXY(11, 272);
		$this->Rect(10, 276, 190, 10);
		$this->SetFont('Arial', '', 10);
		$this->ln();
		$this->Cell(190, 7, 'Pagina ' . $this->PageNo() . ' de {nb}', 0, 0, 'C');

	}
}

//Cria um novo arquivo PDF no tamanho A4
$pdf = new Imprimir('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial', '', 8);

//Comandos para imprimir no arquivo PDF
$contaLinha = 1;
$y = 30;
$x = 5;
$relatorio = new Estagio();
if($alu_pendencia == 's' || $alu_pendencia == 'n'){
	$res = $relatorio->pendencia($alu_pendencia);
}else{
	$res = $relatorio->findAll();
}

foreach ( $res as $key => $value) {
	$id = $value->alu_id;
	$nome = $value->alu_nome;
	if ($contaLinha >= 50) {
		$pdf->AddPage();
		$contaLinha = 1;
		$y = 30;
	}
	$pdf->SetFillColor(154, 109, 0);
	$pdf->SetFont('Arial', '', 8);
	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Rect(10, $y, 20, $x);
	$pdf->Cell(20, 5, $id, 0, 0, 'C', 1);

	$pdf->SetY($y);
	$pdf->SetX(30);
	$pdf->Rect(30, $y, 170, $x);
	$pdf->Cell(170, 5, $nome, 0, 0, 'L', 1);

	$pdf->ln();
	$y += $x;
	$contaLinha++;

}

// Then put a blue underlined link

//Imprime o PDF na tela
$pdf->OutPut();

?>