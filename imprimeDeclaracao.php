<?php
date_default_timezone_get('America/Sao_Paulo');
require "fpdf/fpdf.php";
require_once "classes/Estagio.php";


class Imprimir extends FPDF {
	function Header() {
		//$this->Rect(10, 10, 190, 266);
		
		$this->SetXY(10, 10);
		//$agora = date("G:i:s");
		//$hoje = date("d/m/Y");
		
		//$this->Image('logo.png', 101, 11, -300);
		$this->Image('logo.png', 15, 15, -160);

		$this->ln(50);
		$this->SetFont('Arial', 'B', 16);
		$texto = "DECLARACAO DE FINALIZACAO DE ESTAGIO";
		//$this->Cell(180,5,$texto,0,1,'C');
	}

	function Footer() {
		$texto = "Rua Jose Santiago, qd. 15, S/N, Jardim Ferraz, Jardim Ferraz, Bauru, SP, (14) 2109-6200";
		$this->SetTextColor(0, 0, 0);
		$this->SetXY(11, 272);
		$this->Rect(10, 285, 190, 0);
		$this->SetFont('Arial', '', 10);
		$this->ln();
		$this->Cell(180, 20, $texto, 0, 0, 'C');

	}
}

if(isset($_GET['alu_id'])){
	$id = $_GET['alu_id'];
	$estagio = new Estagio();
	$dados = $estagio->find($id);
	$doc = $dados->alu_ra;
	$pdf = new Imprimir('P', 'mm', 'A4');
	$pdf->AddPage();
	$pdf->AliasNbPages();
	$pdf->SetFont('Arial', 'B', 10);

	//Comandos para imprimir no arquivo PDF
	$contaLinha = 1;
	$y = 30;
	$x = 5;
	
	

	
	

	
	$pdf->SetFillColor(0, 0, 0);
	$pdf->SetTextColor(255, 255, 255);
	$pdf->Rect(15,120,180,16);
	$pdf->SetXY(15,120);
	$pdf->Cell(180,8,'ALUNO',0,0,'B',1);

	$pdf->SetFillColor(255, 255, 255);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetXY(15,128);
	$pdf->Cell(180,8,$dados->alu_nome,0,0,'B',1);
	$pdf->Image('logo2.png', 65, 250, -160);

	$pdf->SetXY(30,150);
	$hoje = date("d/m/Y");
	$datas = explode("/", $hoje);
	switch ($datas[1]) {
		case '01':
			$mes = 'janeiro';
			break;
		case '02':
			$mes = 'fevereiro';
			break;
		case '03':
			$mes = 'marco';
			break;
		case '04':
			$mes = 'abril';
			break;
		case '05':
			$mes = 'maio';
			break;
		case '06':
			$mes = 'junho';
			break;
		case '07':
			$mes = 'julho';
			break;
		case '08':
			$mes = 'agosto';
			break;
		case '09':
			$mes = 'setembro';
			break;
		case '10':
			$mes = 'outubro';
			break;
		case '11':
			$mes = 'novembro';
			break;
		case '12':
			$mes = 'dezembro';
			break;
		default:
			$mes = 'mes';# code...
			break;
	}
	$pdf->Cell(150, 8, 'Bauru, '.$datas[0].' de '.$mes.' de '.$datas[2], 0, 0, 'C');




	

	// Then put a blue underlined link

	//Imprime o PDF na tela
	$pdf->OutPut("I",$doc);
}

//Cria um novo arquivo PDF no tamanho A4


?>