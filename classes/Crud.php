<?php

require_once 'DB.php';

abstract class Crud extends DB {

	protected $table;

	abstract public function insert();
	abstract public function update($codigo);

	public function find($codigo) {
		$sql  = "SELECT * FROM $this->table WHERE alu_id = :codigo";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function encontrarNome($nome) {

		$sql  = "SELECT * FROM $this->table WHERE nome LIKE ?";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(1, "%$nome%");
		$stmt->execute();
		return $stmt->fetch();

	}

	public function findAll() {
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($codigo) {
		$sql  = "DELETE FROM $this->table WHERE codigo = :codigo";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
		return $stmt->execute();
	}

}

?>