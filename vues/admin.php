<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page D'administration</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<style type="text/css">
		form{border: 1px solid #ccc;padding: 50px;width: 600px;margin:auto;}
		h3{width: 600px;margin: auto;margin-bottom: 30px;}
		.art{width: 600px;margin: auto;margin-top: 15px;}
	</style>
</head>
<body>
	<div class="container">
		<br>
		<h3>Authentification Admin</h3>
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
		      <button type="submit" class="btn btn-primary" name="submit">Valider</button>
		    </div>
		  </div>
		  <p style="color: red" class="art"><?php echo $err; ?></p>
		</form>
		
		<p class="art"><a href="/agl/">Allez à la page d'accueil</a></p>
	</div>

</body>
</html>