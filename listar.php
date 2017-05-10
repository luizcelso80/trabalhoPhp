	<div id="listar" class="col-md-8 col-md-offset-2">
		<table class="table table-striped table-responsive table-condensed">
			<thead>
				<th>Id</th>
				<th>Nome</th>
				<th>Ra</th>
				<th>Email</th>
				<th align="left" colspan="2">Acoes</th>
				<th align="right">Imprimir Declaracao</th>
			</thead>
			<tbody>
				<?php foreach ( $listagem as $key => $value) { ?>
				<tr>
					<td><?php echo $value->alu_id; ?></td>
					<td><?php echo $value->alu_nome; ?></td>
					<td><?php echo $value->alu_ra; ?></td>
					<td><?php echo $value->alu_email; ?></td>
					<td align="left">
						<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalAlterar" data-alu_id="<?php echo $value->alu_id; ?>"
                        data-alu_nome="<?php echo $value->alu_nome; ?>"
                        data-alu_ra="<?php echo $value->alu_ra; ?>"
                        data-alu_celular="<?php echo $value->alu_celular; ?>"
                        data-alu_email="<?php echo $value->alu_email; ?>"
                        data-alu_anoturma="<?php echo $value->alu_anoturma; ?>"
                        data-alu_trabalha="<?php echo $value->alu_trabalha; ?>"
                        data-alu_empresa="<?php echo $value->alu_empresa; ?>"
                        data-alu_dt_trabalha="<?php echo $value->alu_dt_trabalha; ?>"
                        data-alu_carteira="<?php echo $value->alu_carteira; ?>"
                        data-alu_dt_carteira="<?php echo $value->alu_dt_carteira; ?>"
                        data-alu_declaracao_empresa="<?php echo $value->alu_declaracao_empresa; ?>"
                        data-alu_dt_declaracao_empresa="<?php echo $value->alu_dt_declaracao_empresa; ?>"
                        data-alu_convenio="<?php echo $value->alu_convenio; ?>"
                        data-alu_dt_convenio="<?php echo $value->alu_dt_convenio; ?>"
                        data-alu_compromisso="<?php echo $value->alu_compromisso; ?>"
                        data-alu_dt_compromisso="<?php echo $value->alu_dt_compromisso; ?>"
                        data-alu_relatorio="<?php echo $value->alu_relatorio; ?>"
                        data-alu_dt_relatorio="<?php echo $value->alu_dt_relatorio; ?>"
                        data-alu_declaracao_fib_impressa="<?php echo $value->alu_declaracao_fib_impressa; ?>"
                        data-alu_declaracao_fib_data="<?php echo $value->alu_declaracao_fib_data; ?>"
                        data-alu_pendencia="<?php echo $value->alu_pendencia; ?>"
                        >
						    <span class="glyphicon glyphicon-pencil"></span>
						</button>
					</td>
					<td align="left">
						<a href="?excluir=<?php echo $value->alu_id; ?>" type="button" class="btn btn-danger btn-xs">
						    <span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
					<td align="right">
						<a target="_blank" href="imprimeDeclaracao.php?alu_id=<?php echo $value->alu_id; ?>" type="button" class="fa fa-file-pdf-o btn btn-danger btn-xs">
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		
	</div>