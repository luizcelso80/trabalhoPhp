<?php 

require_once 'Crud.php';

class Pedido extends Crud{

	protected $table = 'pedidopastel';
	private $codigo;
	private $nome;
	private $endereco;
	private $bairro;
	private $total;
	private $pagamento;
	private $troco;

	public function setNome($nome){
		$this->nome = $nome;
		
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function setTotal($total){
		$this->total = $total;
	}

	public function setPagamento($pagamento){
		$this->pagamento = $pagamento;
	}

	public function setTroco($troco){
		$this->troco = $troco;
	}

	public function insert(){
		$sql = "INSERT INTO $this->table (nome, endereco, bairro, total, pagamento, troco) VALUES (:nome, :endereco, :bairro, :total, :pagamento, :troco)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome );
		$stmt->bindParam(':endereco', $this->endereco );
		$stmt->bindParam(':bairro', $this->bairro );
		$stmt->bindParam(':total', $this->total );
		$stmt->bindParam(':pagamento', $this->pagamento );
		$stmt->bindParam(':troco', $this->troco );
		return $stmt->execute();
	}

	public function update($codigo){
		$sql = "UPDATE $this->table SET nome = :nome, endereco = :endereco, bairro = :bairro, total = :total, pagamento = :pagamento, troco = :troco WHERE codigo = :codigo";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':endereco', $this->endereco );
		$stmt->bindParam(':bairro', $this->bairro );
		$stmt->bindParam(':total', $this->total );
		$stmt->bindParam(':pagamento', $this->pagamento );
		$stmt->bindParam(':troco', $this->troco );
		$stmt->bindParam(':codigo', $codigo);
		return $stmt->execute();
	}

}

?>