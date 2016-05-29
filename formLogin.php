<?php
    session_start();
        $status = $_SESSION["status"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>

    <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

    <title>Login</title>
</head>
<body>
	
	<div class="jumbotron">
    	<div class="container">
    	  <?php echo '<h3 class="alert alert-danger">'.$status.'</h3>';?> 
          <form class="form-signin" role="form" action="login.php" id="login" method="POST">
            <h2 class="form-signin-heading">Ingrese sus datos</h2>
            <div class="form-group">
            	<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
            	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
          </form>

        </div>
	</div>
	
</body>
</html>