<!DOCTYPE html>
<html>
  
<head>
    <title>Formulaire</title>
</head>
  
<body>
    <center>
    <?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=carte;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$stmt = $pdo->prepare("SELECT * FROM personne");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
   <p>

   <h1>formulaire d'ajout de personnes</h1>
   <?php
   // On saisit les valeurs
   ?>
   <form action="formulaire2.php" method="post"> 
    <p>

       Nom :  <input type ="text" name = "nom"/><br><br>
       Prenom :  <input type ="text" name = "prenom"/><br><br>
       Age :  <input type ="text" name = "age"/><br><br>
       poste :   <input type ="text" name = "poste"/><br><br>
       numero : <input type ="text" name = "num"/><br><br>
       zone :  <input type ="text" name = "zone"/><br><br>
       
        <input type ="submit" name ="valider"  value="inserer()"/>
    
    
     <p>


    </form> 
<?php

?>


   
   <?php
   
   
   // insertion dans la database des valeurs saisis juste avant 

   
  ?>
    </center>
</body>
<d1> 

            <strong>nom</strong> : <?php echo $_POST['nom']; ?><br />
            <strong>prenom</strong> : <?php echo $_POST['prenom']; ?><br />
            <strong>age</strong> : <?php echo $_POST['age']; ?><br />
            <strong>poste</strong> : <?php echo $_POST['poste']; ?><br />
            <strong>num</strong> : <?php echo $_POST['num']; ?><br />
            <strong>zone</strong> : <?php echo $_POST['zone']; ?><br />
        </d1>
        
<br><br><br><br>
        <input type="button" name="lien1" value="retourner à l'accueil" onclick="self.location.href='//localhost/codes/cartes.php'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick
  >
</html>






<?php
function insérer() {
    $nom=$_POST['nom']
    $prenom=$_POST['prenom']
    $age=$_POST['age']
    $poste=$_POST['poste']
    $num=$_POST['num']
    $zone=$_POST['zone']


$resultats = 'INSERT INTO persone(nom,prenom,age,poste,num,zone)
values('$_POST['nom']','$_POST['prenom']','$_POST['age']','$_POST['poste']','$_POST['num']';'$_POST['zone']'';

}

