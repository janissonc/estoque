
<!doctype html>
<html lang="en">
  <head>
    <?php include_once"view/dependences.php";?>
    <link rel="stylesheet" type="text/css" href="view/css/styleLogin.css">
  </head>
  <body>
    
    <div class="container-fluid" >
    	
    	<div class="login">
    		<span class="title">
				<h1><i class="fa fa-users"></i></h1>
			</span>
			<form action="../../controller/validarconta.php" method="post">
				<div class="row">
				  <div class="form-group col-sm-12">
				    <label for="login">Login:</label>
				    <input type="text" class="form-control" id="login" name="login">
			      </div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
					    <label for="senha">Senha:</label>
					    <input type="password" class="form-control" id="senha" name="senha"> 
				    </div>
			    </div>
				<div class="row justify-content-md-center">
				  <div class="form-group col-md-4 col-lg-2">
				    <input class="btn btn-primary" type="submit" value="Logar"> 
				  </div>
				  <div class="form-group col-md-4 col-lg-2">
				    <input class="btn btn-secondary" type="reset" value="Reset">
				  </div>
				</div>
			</form>
		</div>		
    </div>
  </body>
</html>

