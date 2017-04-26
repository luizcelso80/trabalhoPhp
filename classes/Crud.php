<?php

require_once 'DB.php';

abstract class Crud extends DB {

	protected $table;

	abstract public function insert();
	abstract public function update($alu_id);

	public function find($alu_id) {
		$sql  = "SELECT * FROM $this->table WHERE alu_id = :alu_id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':alu_id', $alu_id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function encontrarAlu_nome($alu_nome) {

		$sql  = "SELECT * FROM $this->table WHERE alu_nome LIKE ?";
		$stmt = DB::prepare($sql);
		$stmt->bindValue(1, "%$alu_nome%");
		$stmt->execute();
		return $stmt->fetch();

	}

	public function findAll() {
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($alu_id) {
		$sql  = "DELETE FROM $this->table WHERE alu_id = :alu_id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':alu_id', $alu_id, PDO::PARAM_INT);
		return $stmt->execute();
	}

}

?>