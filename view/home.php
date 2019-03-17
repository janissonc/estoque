<?php 
include_once'../model/Conexao.class.php';
include_once'../model/Manager.class.php';
$manager = new Manager();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once 'dependences.php'; ?>
	<link rel="icon" href="img/h.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/h.ico" type="image/x-icon" />
</head>
<body>

<div class="container">
	
	<h2 class="text-center"> Lista de Equipamentos <i class="fas fa-list"></i></h2>

	<h5 class="text-right">
		<a href="router/pageRegisterRouter.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
				<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
					  <i class="fas fa-qrcode"></i>
					</button>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID <i class="fas fa-qrcode"></i></th>
					<th>Modelo <i class="fas fa-microchip"></i></th>
					<th>Descrição <i class="fas fa-clipboard-list"></i></th>
					<th>Status <i class="fas fa-map-pin"></i></th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listData("router","modelo") as $cliente): ?>
				<tr>
					<td><?php echo $cliente['id']; ?></td>
					<td><?php echo $cliente['modelo']; ?></td>
					<td><?php echo $cliente['descricao']; ?></td>
					<td><?php echo $cliente['status']; ?></td>
					<td>
						<form method="POST" action="router/pageUpdateRouter.php">
							<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="../controller/router/deleteRouter.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
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
					

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        
					      </div>
					      <div class="modal-body">
					        <?php include_once '../controller/QRCode/qrcode.php'; ?>
					      </div>
					      <div class="modal-footer">
					      </div>
					    </div>
					  </div>
					</div>
		

	</div>

	<!-- Fim da Tabela -->

</div>
<script type="text/javascript">
	$('#myModal').modal('show');
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>