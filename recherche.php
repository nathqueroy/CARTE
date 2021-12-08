<?php
$bdd= new PDO ('mysql:host=localhost;dbname=carte;','root','');
$allusers = $bdd-> query('SELECT * FROM personne ORDER BY id DESC');
if(isset($_GET['search']) AND !empty($_GET['search'])){
	$recherche = htmlspecialchars($_GET['search']);
	$allusers = $bdd->query('SELECT prenom FROM personne WHERE prenom LIKE"%'.$recherche.'%" ORDER BY id DESC');

}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="">
<title>Example</title>
</head>
<body>

	<form method="GET">

<input class="search_data" name="saisie" type="search" placeholder="search..." autocomplete="off" />
<input  type ="submit" name="envoyer">
</form>

<section class="afficher_user">

<?php
	if($allusers->rowcount()>0 ){
		if($user = $allusers->fetch()){
			?>
			<p><?= $user['prenom']; ?><p>
			<?php
		}
	}else{
		?>
		<p> aucun utilisateur trouvé</p><
		<?php
	}
?>
</section>
		</body>
	
		
</form>
</body>
</html>