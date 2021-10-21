<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Article Numero <?php echo $id; ?></title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{margin-bottom: 0;height: 150px;}
	</style>
</head>
<body>
	<div class="container">
<div class="jumbotron">
		    <h1>Site d'information en ligne</h1>      
		    <p>Vivez l'information du jour au jour !!</p>
	  	</div>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="../">Accueil</a>
		    <a class="navbar-brand" href="../categories">Catégories</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
		      <a href="../auth"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button></a>
		  </div>
		</nav><br>
		<?php 
			foreach($tt as $val){
				echo "<h1>".$val['titre']."</h1>";
				echo "<p>".$val['contenu']."</p>";
				echo "<p>Date : ".$val['dateCreation']."</p>";
			}

		 ?>
	</div>

</body>
</html>