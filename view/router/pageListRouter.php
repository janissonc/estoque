<?php 
include_once'../../model/Conexao.class.php';
include_once'../../model/Manager.class.php';
$manager = new Manager();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once '../dependences.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center"> List of routers <i class="fa fa-users"></i></h2>

	<h5 class="text-right">
		<a href="pageRegisterRouter.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>Modelo</th>
					<th>Descrição</th>
					<th>Status</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listData("router") as $cliente): ?>
				<tr>
					<td><?php echo $cliente['id']; ?></td>
					<td><?php echo $cliente['modelo']; ?></td>
					<td><?php echo $cliente['descricao']; ?></td>
					<td><?php echo $cliente['status']; ?></td>
					<td>
						<form method="POST" action="../router/pageUpdateRouter.php">
							<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="../../controller/router/deleteRouter.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
							<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

	</div>

	<!-- Fim da Tabela -->

</div>

</body>
</html>