 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Ajouter catégorie</title>
 	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-7">
 				<p><a href="gesca">Retour</a></p>
 				<h3>Ajouter catégorie</h3>
 				<form method="POST" action="">
 					<p>Nom Catégorie</p>
 					<input type="text" name="nomcategorie">
 					<input type="submit" name="submit" value="Creer" class="btn btn-primary">
 				</form>
 				<p style="color: red"><?php echo $erreur; ?></p>
 				<p style="color: green"><?php echo $msg; ?></p>
 			</div>
 		</div>
 	</div>
 
 </body>
 </html>