<?php

error_reporting(E_ALL);
define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '</br>');
require_once 'phpexcel/Classes/PHPExcel.php';
require_once 'phpexcel/Classes/PHPExcel/IOFactory.php';
require_once 'classes/Estagio.php';

$relatorio = new Estagio();
$alu_pendencia = $_GET['alu_pendencia'];
if($alu_pendencia == 's' || $alu_pendencia == 'n'){
	$res = $relatorio->declaraFib($alu_pendencia);
	if($alu_pendencia == 's'){
		$doc = "Alunos-Regularizados";
	}else{
		$doc = "Alunos-Pendentes";
	}
}else{
	$res = $relatorio->findAll();
	$doc = "Lista-Geral";
}

/*error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli') {
die('This example should only be run from a Web Browser');
}

/** Include PHPExcel */
//require_once dirname(__FILE__) . '/phpexcel/Classes/PHPExcel.php';


$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Luizao Zika")
	->setLastModifiedBy("Luizao Zika")
	->setTitle("Office 2007 XLSX Test Document")
	->setSubject("Office 2007 XLSX Test Document")
	->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
	->setKeywords("office 2007 openxml php")
	->setCategory("Test result file");

$objPHPExcel->setActiveSheetIndex(0)
	->mergeCells('A1:B1')
	->setCellValue('A1',$doc)
	->setCellValue('A2', 'RA')
	->setCellValue('B2', 'NOME');

$objPHPExcel->getActiveSheet()->getColumnDimension('A')
	->setAutoSize(true);

$objPHPExcel->getActiveSheet()->getColumnDimension('B')
	->setAutoSize(true);

$objPHPExcel->getActiveSheet()->getStyle('A2:B2')
	->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('A2:B2')
	->applyFromArray(
		array(
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('argb' => 'FFCCFFCC'),
			),
			'borders' => array(
				'bottom' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN,
				),
				'left' => array(
					'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
				),
				'right' => array(
					'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
				),
			),
		)
	);



foreach ( $res as $key => $value) {
	$i = $key + 3;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $i, $value->alu_ra)
		->setCellValue('B' . $i, $value->alu_nome);

	
}

$objPHPExcel->getActiveSheet()->setTitle($doc);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="01simple.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>