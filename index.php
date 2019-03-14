
<!doctype html>
<html lang="en">
  <head>
    <?php include_once"view/dependences.php";?>
	<style>
		body{
			bacground: url("view/img/fundo.jpg");
		} 
	</style>
  </head>
  <body style=" bacground: url('view/img/fundo.jpg');">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Relatório. Faça login para iniciar sua sessão</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
	</nav>
    <div class="container mt-3 bg-light " style=" width: 500px; height: 500px; padding: 10px;box-shadow: 5px 5px 5px rgba(0,0,0,0.3);">
    	<div class="container" style="margin-top: 80px;" >
			<form action="controller/validarconta.php" method="post">
				<div class="row">
				  <div class="form-group col-sm-12">
				    <label for="exampleFormControlInput1">Login</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" name="login">
			      </div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
					    <label for="exampleFormControlInput1">Senha  </label>
					    <input type="password" class="form-control" id="exampleFormControlInput1" name="senha">
				    </div>
			    </div>
				<div class="row">
				  <div class="form-group col-sm-2">
				    <input class="btn btn-primary" type="submit" value="Logar">
				  </div>
				  <div class="form-group col-sm-2">
				    <input class="btn btn-secondary" type="reset" value="Reset">
				  </div>
				</div>
			</form>
		</div>	 

	
		
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

