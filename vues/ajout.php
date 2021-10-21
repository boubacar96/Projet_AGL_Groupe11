<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un Article</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="col-md-6"><br>
			<p><a href="dashboad">Retour</a></p>
			<h2>Editer un Article</h2>
			<form method="POST" action="">
				<p>Titre Article</p>
				<input type="text" name="titre" class="form-control">
				<p>Contenu</p>
				<textarea rows="10" cols="25" name="contenu" class="form-control"></textarea><br>
				<p>Categorie</p>
				<select name="categorie" class="form-control">
					
						<?php 
							foreach($categorie as $ca)
							{
								?>
									<option value="<?php echo $ca['id']; ?>"><?php echo $ca['libelle']; ?></option>
								<?php
							}
						?>
					
				</select>
				<br><br>
				<input type="submit" name="submit" value="Publier" class="btn btn-primary">
			</form>
			<p style="color: green"><?php echo $succes; ?></p>
			<p style="color: red"><?php echo $tlc; ?></p>
		</div>
	</div>

</body>
</html>