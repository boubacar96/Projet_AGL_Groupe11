<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier categorie</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-6"><br>
		<p><a href="../gesca">Retour à la liste</a></p>
		<h2>Modifier l'article</h2>
		<p style="color: green"><?php echo $succes; ?></p>
		<p style="color: red"><?php echo $message; ?></p>
		<form method="POST" action="">
			<p>Categorie</p>
			<input type="text" name="libelle" class='form-control' value="<?php echo $parc['libelle']; ?>"><br>
			
			<input type="submit" name="modifier" value="Modifier" class="btn btn-primary">
		</form>
		
		</div>
	</div>

</body>
</html>