<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}
$lista = new Estagio();
if(isset($_POST['excluir'])){
  $id = $_POST['excluir'];

  $lista->delete($id);
}


$lista->findAll();
?>
<div id="listar" class="col-md-5 col-md-offset-3">
	<table class="table table-striped table-responsive table-condensed">
		<thead>
			<th>Id</th>
			<th>Nome</th>
			<th>Ra</th>
			<th>Email</th>
			<th colspan="2">Acoes</th>
		</thead>
		<tbody>
			<?php foreach ( $lista->findAll() as $key => $value) { ?>
			<tr>
				<td><?php echo $value->alu_id; ?></td>
				<td><?php echo $value->alu_nome; ?></td>
				<td><?php echo $value->alu_ra; ?></td>
				<td><?php echo $value->alu_email; ?></td>
				<td>
					<a type="button" class="btn btn-warning btn-xs" >
					    <span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td>
				<td>
					<button type="submit" class="btn btn-danger btn-xs" data-target="#listar" data-whatever="<?php echo $value->alu_id; ?>">
					    <span class="glyphicon glyphicon-trash"></span>
					</button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
