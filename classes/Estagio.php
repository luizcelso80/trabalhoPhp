<?php

require_once 'Crud.php';

class Pedido extends Crud {

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

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function setTotal($total) {
		$this->total = $total;
	}

	public function setPagamento($pagamento) {
		$this->pagamento = $pagamento;
	}

	public function setTroco($troco) {
		$this->troco = $troco;
	}

	public function insert() {
		$sql  = "INSERT INTO $this->table (nome, endereco, bairro, total, pagamento, troco) VALUES (:nome, :endereco, :bairro, :total, :pagamento, :troco)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':total', $this->total);
		$stmt->bindParam(':pagamento', $this->pagamento);
		$stmt->bindParam(':troco', $this->troco);
		return $stmt->execute();
	}

	public function update($codigo) {
		$sql  = "UPDATE $this->table SET nome = :nome, endereco = :endereco, bairro = :bairro, total = :total, pagamento = :pagamento, troco = :troco WHERE codigo = :codigo";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':total', $this->total);
		$stmt->bindParam(':pagamento', $this->pagamento);
		$stmt->bindParam(':troco', $this->troco);
		$stmt->bindParam(':codigo', $codigo);
		return $stmt->execute();
	}

}

?>