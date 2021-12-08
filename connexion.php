<!DOCTYPE html>




<head>
<?php

$pdo = new PDO ("mysql: host = localhost ; dbname = carte ; port =80  ; charset=utf8","root","", [
 PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION 
]

$stmt = $dbh ->prepare("SELECT * FROM personne ");
$stmt ->execute();



?>
<body>


<d1>
            <strong>nom</strong> : <?php echo$donnees['nom']; ?><br />
            <strong>prenom</strong> : <?php echo$donnees['prenom']; ?><br />
            <strong>age</strong> : <?php echo$donnees['age']; ?><br />
            <strong>poste</strong> : <?php echo$donnees['poste']; ?><br />
            <strong>num</strong> : <?php echo$donnees['num']; ?><br />
            <strong>zone </strong> : <?php echo$donnees['zone']; ?><br />
        </d1>



</body>


</head>



</html>