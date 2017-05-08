<?php

require_once 'Crud.php';

class Estagio extends Crud {

	protected $table = 'estagio';

	private $alu_id;
	private $alu_nome;
	private $alu_ra;
	private $alu_celular;
	private $alu_email;
	private $alu_anoturma;
	private $alu_trabalha;
	private $alu_empresa;
	private $alu_dt_trabalha;
	private $alu_carteira;
	private $alu_dt_carteira;
	private $alu_declaracao_empresa;
	private $alu_dt_declaracao_empresa;
	private $alu_convenio;
	private $alu_dt_convenio;
	private $alu_compromisso;
	private $alu_dt_compromisso;
	private $alu_relatorio;
	private $alu_dt_relatorio;
	private $alu_declaracao_fib_impressa;
	private $alu_declaracao_fib_data;
	private $alu_pendencia;

	

	public function setAlu_Nome($alu_nome) {
		$this->alu_nome = $alu_nome;

	}

	public function setAlu_Ra($alu_ra) {
		$this->alu_ra = $alu_ra;
	}

	public function setAlu_Celular($alu_celular) {
		$this->alu_celular = $alu_celular;
	}

	public function setAlu_Email($alu_email) {
		$this->alu_email = $alu_email;
	}

	public function setAlu_AnoTurma($alu_anoturma) {
		$this->alu_anoturma = $alu_anoturma;
	}

	public function setAlu_Trabalha($alu_trabalha) {
		$this->alu_trabalha = $alu_trabalha;
	}

	//novos campos
	public function setAlu_Empresa($alu_empresa) {
		$this->alu_empresa = $alu_empresa;
	}

	public function setAlu_Dt_Trabalha($alu_dt_trabalha) {
		$this->alu_dt_trabalha = $alu_dt_trabalha;
	}

	public function setAlu_Carteira($alu_carteira) {
		$this->alu_carteira = $alu_carteira;
	}

	public function setAlu_Dt_Carteira($alu_dt_carteira) {
		$this->alu_dt_carteira = $alu_dt_carteira;
	}

	public function setAlu_Declaracao_Empresa($alu_declaracao_empresa) {
		$this->alu_declaracao_empresa = $alu_declaracao_empresa;
	}

	public function setAlu_Dt_Declaracao_Empresa($alu_dt_declaracao_empresa) {
		$this->alu_dt_declaracao_empresa = $alu_dt_declaracao_empresa;
	}

	public function setAlu_Convenio($alu_convenio) {
		$this->alu_convenio = $alu_convenio;
	}

	public function setAlu_Dt_Convenio($alu_dt_convenio) {
		$this->alu_dt_convenio = $alu_dt_convenio;
	}

	public function setAlu_Compromisso($alu_compromisso) {
		$this->alu_compromisso = $alu_compromisso;
	}

	public function setAlu_Dt_Compromisso($alu_dt_compromisso) {
		$this->alu_dt_compromisso = $alu_dt_compromisso;
	}

	public function setAlu_Relatorio($alu_relatorio) {
		$this->alu_relatorio = $alu_relatorio;
	}

	public function setAlu_Dt_relatorio($alu_dt_relatorio) {
		$this->alu_dt_relatorio = $alu_dt_relatorio;
	}

	public function setAlu_Declaracao_Fib_Impressa($alu_declaracao_fib_impressa) {
		$this->alu_declaracao_fib_impressa = $alu_declaracao_fib_impressa;
	}

	public function setAlu_Declaracao_Fib_Data($alu_declaracao_fib_data) {
		$this->alu_declaracao_fib_data = $alu_declaracao_fib_data;
	}

	public function setAlu_Pendencia($alu_pendencia) {
		$this->alu_pendencia = $alu_pendencia;
	}

	public function insert() {
		$sql  = "INSERT INTO $this->table (
											alu_nome,
											alu_ra,
											alu_celular,
											alu_email,
											alu_anoturma,
											alu_trabalha,
											alu_empresa,
											alu_dt_trabalha,
											alu_carteira,
											alu_dt_carteira,
											alu_declaracao_empresa,
											alu_dt_declaracao_empresa,
											alu_convenio,
											alu_dt_convenio,
											alu_compromisso,
											alu_dt_compromisso,
											alu_relatorio,
											alu_dt_relatorio,
											alu_declaracao_fib_impressa,
											alu_declaracao_fib_data,
											alu_pendencia) VALUES (
																	:alu_nome,
																	:alu_ra,
																	:alu_celular,
																	:alu_email,
																	:alu_anoturma,
																	:alu_trabalha,
																	:alu_empresa,
																	:alu_dt_trabalha,
																	:alu_carteira,
																	:alu_dt_carteira,
																	:alu_declaracao_empresa,
																	:alu_dt_declaracao_empresa,
																	:alu_convenio,
																	:alu_dt_convenio,
																	:alu_compromisso,
																	:alu_dt_compromisso,
																	:alu_relatorio,
																	:alu_dt_relatorio,
																	:alu_declaracao_fib_impressa,
																	:alu_declaracao_fib_data,
																	:alu_pendencia)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':alu_nome', $this->alu_nome);
		$stmt->bindParam(':alu_ra', $this->alu_ra);
		$stmt->bindParam(':alu_celular', $this->alu_celular);
		$stmt->bindParam(':alu_email', $this->alu_email);
		$stmt->bindParam(':alu_anoturma', $this->alu_anoturma);
		$stmt->bindParam(':alu_trabalha', $this->alu_trabalha);
		$stmt->bindParam(':alu_empresa', $this->alu_empresa);
		$stmt->bindParam(':alu_dt_trabalha', $this->alu_dt_trabalha);
		$stmt->bindParam(':alu_carteira', $this->alu_carteira);
		$stmt->bindParam(':alu_dt_carteira', $this->alu_dt_carteira);
		$stmt->bindParam(':alu_declaracao_empresa', $this->alu_declaracao_empresa);
		$stmt->bindParam(':alu_dt_declaracao_empresa', $this->alu_dt_declaracao_empresa);
		$stmt->bindParam(':alu_convenio', $this->alu_convenio);
		$stmt->bindParam(':alu_dt_convenio', $this->alu_dt_convenio);
		$stmt->bindParam(':alu_compromisso', $this->alu_compromisso);
		$stmt->bindParam(':alu_dt_compromisso', $this->alu_dt_compromisso);
		$stmt->bindParam(':alu_relatorio', $this->alu_relatorio);
		$stmt->bindParam(':alu_dt_relatorio', $this->alu_dt_relatorio);
		$stmt->bindParam(':alu_declaracao_fib_impressa', $this->alu_declaracao_fib_impressa);
		$stmt->bindParam(':alu_declaracao_fib_data', $this->alu_declaracao_fib_data);
		$stmt->bindParam(':alu_pendencia', $this->alu_pendencia);

		return $stmt->execute();
	}

	public function update($alu_id) {
		$sql  = "UPDATE $this->table SET	alu_nome = :alu_nome,
											alu_ra = :alu_ra, 
											alu_celular = :alu_celular, 
											alu_email = :alu_email, 
											alu_anoturma = :alu_anoturma, 
											alu_trabalha = :alu_trabalha,
											alu_empresa = :alu_empresa,
											alu_dt_trabalha = :alu_dt_trabalha,
											alu_carteira = :alu_carteira,
											alu_dt_carteira = :alu_dt_carteira,
											alu_declaracao_empresa = :alu_declaracao_empresa,
											alu_dt_declaracao_empresa = :alu_dt_declaracao_empresa,
											alu_convenio = :alu_convenio,
											alu_dt_convenio = :alu_dt_convenio,
											alu_compromisso = :alu_compromisso,
											alu_dt_compromisso = :alu_dt_compromisso,
											alu_relatorio = :alu_relatorio,
											alu_dt_relatorio = :alu_dt_relatorio,
											alu_declaracao_fib_impressa = :alu_declaracao_fib_impressa,
											alu_declaracao_fib_data = :alu_declaracao_fib_data,
											alu_pendencia = :alu_pendencia WHERE alu_id = :alu_id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':alu_nome', $this->alu_nome);
		$stmt->bindParam(':alu_ra', $this->alu_ra);
		$stmt->bindParam(':alu_celular', $this->alu_celular);
		$stmt->bindParam(':alu_email', $this->alu_email);
		$stmt->bindParam(':alu_anoturma', $this->alu_anoturma);
		$stmt->bindParam(':alu_trabalha', $this->alu_trabalha);
		$stmt->bindParam(':alu_empresa', $this->alu_empresa);
		$stmt->bindParam(':alu_dt_trabalha', $this->alu_dt_trabalha);
		$stmt->bindParam(':alu_carteira', $this->alu_carteira);
		$stmt->bindParam(':alu_dt_carteira', $this->alu_dt_carteira);
		$stmt->bindParam(':alu_declaracao_empresa', $this->alu_declaracao_empresa);
		$stmt->bindParam(':alu_dt_declaracao_empresa', $this->alu_dt_declaracao_empresa);
		$stmt->bindParam(':alu_convenio', $this->alu_convenio);
		$stmt->bindParam(':alu_dt_convenio', $this->alu_dt_convenio);
		$stmt->bindParam(':alu_compromisso', $this->alu_compromisso);
		$stmt->bindParam(':alu_dt_compromisso', $this->alu_dt_compromisso);
		$stmt->bindParam(':alu_relatorio', $this->alu_relatorio);
		$stmt->bindParam(':alu_dt_relatorio', $this->alu_dt_relatorio);
		$stmt->bindParam(':alu_declaracao_fib_impressa', $this->alu_declaracao_fib_impressa);
		$stmt->bindParam(':alu_declaracao_fib_data', $this->alu_declaracao_fib_data);
		$stmt->bindParam(':alu_pendencia', $this->alu_pendencia);
		$stmt->bindParam(':alu_id', $alu_id);
		return $stmt->execute();
	}

	public function declaraFib($alu_declaracao_fib_impressa) {

		$sql  = "SELECT * FROM $this->table WHERE alu_declaracao_fib_impressa LIKE ? ORDER BY alu_nome";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(1, "%$alu_declaracao_fib_impressa%");
		$stmt->execute();
		return $stmt->fetchAll();

	}

	public function pendencia($alu_pendencia) {

		$sql  = "SELECT * FROM $this->table WHERE alu_pendencia LIKE ? ORDER BY alu_nome";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(1, "%$alu_pendencia%");
		$stmt->execute();
		return $stmt->fetchAll();

	}

}

?>