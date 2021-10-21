<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Edition</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<body>
	<div class="container"><br>
	<p>Bienvenu <?php echo $_SESSION['identifiant']; ?> | <a href="auth">se deconnecter</a></p>
	<h2>Page des Editeurs</h2>
	<p>Cliquez ici pour <a href="ajout"><button type="button" class="btn btn-info">Ajouter un Article</button></a></p>
	<p>Gestion des catégories cliquez ici <a href="gesca"><button type="button" class="btn btn-info">Catégorie</button></a></p>
	<h4>Liste des Articles</h4>
	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titre Article</th>
      <th scope="col">Date Publication</th>
      <th scope="col">Date Modification</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
   <?php 
		foreach($sth as $n)
		{
			echo '<tr>';
			echo '<td>'.$n['titre'].'</td>';
			echo '<td>'.$n['dateCreation'].'</td>';
			echo '<td>'.$n['dateModification'].'</td>';
			echo "<td>";
              echo "<a href='modifier/".$n['id']."'><button type='button' class='btn btn-primary'>";
              echo 'Modifier';
              echo "</button></a>";
            echo "</td>";
			echo "<td>";
              echo "<a href='delarticle/".$n['id']."'><button type='button' class='btn btn-danger'>";
              echo 'Supprimer';
              echo "</button></a>";
            echo "</td>";
			echo '</tr>';
		}
	?>
  </tbody>
</table>
</div>
</body>
</html>