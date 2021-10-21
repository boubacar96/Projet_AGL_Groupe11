<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier un article</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-6"><br>
		<p><a href="../dashboad">Retour à la liste</a></p>
		<h2>Modifier l'article</h2>
		<p style="color: green"><?php echo $succes; ?></p>
		<p style="color: red"><?php echo $message; ?></p>
		<form method="POST" action="">
			<p>Titre Article</p>
			<input type="text" name="titre" class='form-control' value="<?php echo $parc['titre']; ?>"><br>
			<p>Contenu</p>
			<textarea rows="10" cols="25" class='form-control' name="contenu"><?php echo $parc['contenu']; ?></textarea><br>
			<p>Categorie</p>
			<select name="categorie" class='form-control'>
				
					<?php 
						foreach($categorie as $ca)
						{
							?>
								<option value="<?php echo $ca['id']; ?>"><?php echo $ca['libelle']; ?></option>
							<?php
						}
					?>
				
			</select>
			<br>
			<input type="submit" name="modifier" value="Modifier" class="btn btn-primary">
		</form>
		
		</div>
	</div>

</body>
</html>