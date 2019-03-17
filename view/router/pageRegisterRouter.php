
<!DOCTYPE html>
<html>
<head>
	<?php include_once'../dependences.php';?>
	
	<link rel="icon" href="../img/h.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="../img/h.ico" type="image/x-icon" />
</head>
<body>
	<h2 class="text-center">
		Page of Register <i class="fa fa-user-plus"></i>
	</h2><hr>

	<form method="POST" action="../../controller/router/insertRouter.php">

		<div class="container">
			<div class="form-row">
				
				<div class="col-md-6">
					Código: <i class="fa fa-user"></i>
					<input class="form-control" type="password" name="id" required autofocus/><br/>
					<input type="hidden" value="Estoque" name="status">
				</div>
				
				<div class="col-md-6">
					Modelo: <i class="fa fa-envelope"></i>
					<input class="form-control" type="text" name="modelo" required/><br/>
				</div>
				
				<div class="col-md-4">
					descrição: <i class="fa fa-address-card"></i>
					<input class="form-control" type="text" name="descricao" required id="descricao" /><br/>
				</div>
				<div class="col-md-4">
					
					<button class="btn btn-primary btn-lg">
						Insert Cliente <i class="fa fa-user-plus"></i>
					</button><br><br>
					
					<a href="../index.php"> 
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
</body>
</html>
