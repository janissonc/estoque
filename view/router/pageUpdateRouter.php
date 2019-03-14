<?php

include_once'../../model/Conexao.class.php';
include_once'../../model/Manager.class.php';
include_once'../dependences.php';
$manager = new Manager();
$id = $_POST['id'];
?>

<h2 class="text-center">
	Page of Update <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../../controller/router/updateRouter.php">

	<div class="container">
		<div class="form-row">

			<?php foreach ($manager->getInfo("router",$id) as $cliente): ?>
			
			<div class="col-md-6">
				Código: <i class="fa fa-user"></i>
				<input class="form-control" type="password" name="id" required autofocus value="<?php echo $cliente['id']?>" /><br/>
			</div>
			
			<div class="col-md-6">
				Modelo: <i class="fa fa-envelope"></i>
				<input class="form-control" type="text" name="modelo" required value="<?php echo $cliente['modelo']?>"/><br/>
			</div>
			
			<div class="col-md-4">
			Descrição: <i class="fa fa-address-card"></i>
				<input class="form-control" type="text" name="descricao" required id="descricao" value="<?php echo $cliente['descricao']?>"/><br/>
			</div>

			<div class="col-md-4">
				Status: <i class="fa fa-calendar"></i>
				<input class="form-control" type="text" name="status" required value="<?php echo $cliente['status']?>"/><br/>
			</div>

			<input type="hidden" name="id" value="<?php echo $id;?>">

			<div class="col-md-4">
				<?php endforeach;?>

				<button class="btn btn-warning btn-lg">
					Update Cliente <i class="fa fa-user-edit"></i>
				</button><br><br>
				
				<a href="../../index.php"> 
					Voltar
				</a>

			</div>

		</div>
	</div>
	
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
		$("#phone").mask("(00) 0000-0000");
	});
</script>