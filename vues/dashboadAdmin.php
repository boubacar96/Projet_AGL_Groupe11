<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page de l'administrateur du site</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Administration du Site Web</h2>
		<p>Bienvenu <?php echo $_SESSION['login']; ?> | <a href="logoutAdmin">se deconnecter</a></p>
		<a href='ajoutuser' class='btn btn-info'>Ajouter utilisateur</a><br><br>
		<h4>Liste des utilisateurs</h4>
		<table class="table table-bordered">
			<thead class="thead-light">
				<tr>
					<th>Login</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
					<?php 
						foreach ($parcourir as $pac) {
							echo '<tr>';
								
								echo '<td>'.$pac['identifiant'].'</td>';
								echo '<td>'.$pac['password'].'</td>';
								echo "<td>";
		                          echo "<a href='deluser/".$pac['id']."'><button class='btn btn-danger'>";
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