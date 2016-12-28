<div class="container">
	<h1><?php echo $titulo ?></h1>

	<table class="table">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>email</th>
			<th>CPF</th>
			<th></th>
		</tr>

		<?php foreach ($tabela as $t): ?>
			
		<tr>
			<td><?php echo $t['id'] ?></td>
			<td><?php echo $t['nome'] ?></td>
			<td><?php echo $t['email'] ?></td>
			<td><?php echo $t['cpf'] ?></td>
			<td>
				<a href="#">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
				<a href="#">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>

		<?php endforeach ?>

	</table>
	<?php echo $_SESSION['user'] ?>
</div>
