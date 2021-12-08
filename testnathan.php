<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=carte;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$stmt = $pdo->prepare("SELECT * FROM personne");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="testnathan.css">
        <meta charset="utf-8">
       
        <title>personnes</title>
    </head>
    <body>
        <h1>liste des personnes</h1>
<label>Nom: </label> <input type ="texte" name="nom">
        
<?php
$recupnom = $_POST['nom'];

echo $recupnom ; 
// insertion dans la database des valeurs saisis juste avant 

   
?>

        <table border=1>
            
            <tr>
                <th>nom</th>
                <th>Prénom</th>
                <th>age</th>
                <th>poste</th>
                <th>num</th>
                <th>zone </th>
            </tr>

            
            <?php foreach($resultats as $resultat): ?>
            <tr>
                <td><?= $resultat["nom"] ?></td>
                <td><?= $resultat["prenom"] ?></td>
                <td><?= $resultat["age"] ?></td>
                <td><?= $resultat["poste"] ?></td>
                <td><?= $resultat["num"] ?></td>
                <td><?= $resultat["zone"] ?></td>
            </tr>
            <?php endforeach; ?>
            </table>

            <p>Pour davantage d'information sur la météo, visitez notre <a href="http://localhost/codes/form.html">page météo</a>,
jetez un œil sur <a href="http://#">météo sur Wikipedia</a>, ou regardez la <a href="http://#">météo sur Science Extrême </a>.</p>
        <br><input type="button" name="lien1" value="retourner à l'accueil" onclick="self.location.href='//localhost/codes/cartes.html'" style="background-color:#blue" style="color:white; font-weight:bold"onclick>
    </body>

</html>