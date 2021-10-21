<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Authentification Editeurs</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<style type="text/css">
		form{border: 1px solid #ccc;padding: 50px;}
		.centrer{width: 600px;margin: auto;}
	</style>
</head>
<body>
	<div class="container">
		<div class="centrer">
			<br>
		<h3>Authentification Users</h3>
		<form method="POST" action="">
		  <div class="form-group row">
		    <label for="identifiant" class="col-sm-2 col-form-label">Identifiant</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="ide" placeholder="Identifiant">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="password" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="mdp" placeholder="Password">
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary" name="submit">Valider</button>
		    </div>
		  </div>
		  <p style="color: red"><?php echo $err; ?></p>
		</form><br>
		<p><a href="/agl/">Allez à la page d'accueil</a></p>
		</div>
	</div>

</body>
</html>