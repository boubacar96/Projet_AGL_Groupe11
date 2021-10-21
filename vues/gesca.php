<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestion des catégories</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<a href="dashboad">Retour</a>
				<p>Cliquez ici pour <a href="ajoutcateg"><button type="button" class="btn btn-info">Ajouter catégorie</button></a></p>
				<h4>Liste des catégories</h4>
	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom catégorie</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
   <?php 
		foreach($donnee as $n)
		{
			echo '<tr>';
			echo '<td>'.$n['libelle'].'</td>';
			echo "<td>";
              echo "<a href='updatecateg/".$n['id']."'><button type='button' class='btn btn-primary'>";
              echo 'Modifier';
              echo "</button></a>";
            echo "</td>";
			echo "<td>";
              echo "<a href='delcateg/".$n['id']."'><button type='button' class='btn btn-danger'>";
              echo 'Supprimer';
              echo "</button></a>";
            echo "</td>";
			echo '</tr>';
		}
	?>
  </tbody>
</table>
			</div>
		</div>
	</div>

</body>
</html>