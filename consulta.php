<?php
function __autoload($classe) {
	require_once 'classes/'.$classe.'.php';
}

$lista = new Estagio();
$lista->findAll();
?>
<table class="table table-striped">
	<thead>
		<th>Nome</th>
		<th>Ra</th>
		<th>Email</th>
		<th colspan="2">Acoes</th>
	</thead>
	<tbody>
		<?php foreach ( $lista->findAll() as $key => $value) { ?>
		<tr>
			<td><?php echo $value->alu_nome; ?></td>
			<td><?php echo $value->alu_ra; ?></td>
			<td><?php echo $value->alu_email; ?></td>
			<td>
				<button type="button" class="btn btn-warning">
				    <span class="glyphicon glyphicon-pencil"></span>
				</button>
			</td>
			<td>
				<button type="button" class="btn btn-danger">
				    <span class="glyphicon glyphicon-trash"></span>
				</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>