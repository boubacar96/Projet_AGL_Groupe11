<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter utilisateur</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-6">
		<h2>Ajouter Editeur du site</h2>
		<p>Bienvenu <?php echo $_SESSION['login']; ?> | <a href="logoutAdmin">se deconnecter</a></p>
		<p><a href="../agl/dashboadAdmin">Retour</a></p>
		
		<form method="POST" action="">
		  <div class="form-group row">
		    <label for="login" class="col-sm-2 col-form-label">Login</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="login" placeholder="Login">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="password" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="password" placeholder="Password">
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
		    </div>
		  </div>
		</form>
		<p style="color: red"><?php echo $tlc; ?></p>
		<p style="color: green"><?php echo $succes; ?></p>
		</div>
	</div>

</body>
</html>