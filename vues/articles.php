<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Accueil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{margin-bottom: 0; height: 150px;}
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
		    <a class="navbar-brand" href="">Accueil</a>
		    <a class="navbar-brand" href="categories">Catégories</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
		      <a href="auth"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button></a>
		  </div>
		</nav><br>
		  
		  	<?php 
				foreach($data as $n)
				{
					echo "<div class='card w-85'>";
					echo "<div class='card-body'>";
					echo "<h3>".$n['titre']."</h3>";
					echo "<p class='card-text'>".tronquer($n['contenu'],255).'</p>';
					echo "<p class='card-text'> Poster le : ".$n['dateCreation'].'</p>';
					echo "<a href='info/".$n['id']."' class='btn btn-primary'>lire la suite</a>";
					echo "</div>";
					echo "</div><br>";
				}

				// Pour la pagination
						$pagination='';
						if($last_page != 1)
						{
							if($page_num > 1)
							{
								$previous=$page_num -1;
								$pagination .='<a href="'.$previous.'"> Précédent</a> &nbsp; &nbsp;';

								for($i=$page_num - $nbre_fichier_max_avant_apres;$i<$page_num;$i++)
								{
									if($i>0)
									{
										$pagination.= '<a href="'.$i.'">'.$i.'</a> &nbsp;';
									}
								}
							}

							$pagination .='<span class="active">'.$page_num.'</span> &nbsp;';
							for($i=$page_num+1;$i<=$last_page;$i++)
							{
								$pagination.= '<a href="'.$i.'">'.$i.'</a> ';

								if($i >= $page_num + $nbre_fichier_max_avant_apres)
								{
									break;
								}
							}
							if($page_num != $last_page)
								{
									$next= $page_num +1;
									$pagination .= '<a href="'.$next.'"> Suivant</a>';
								}
						}
			?>
		    
		  <p><?php echo $pagination; ?></p>	
		
	</div>
</body>
</html>


