<?php
include_once 'co.db.php';
if(isset($_POST['submit']))
{    
     $nom = $_POST['nom'];
     $prenom= $_POST['prenom'];
     $age = $_POST['age'];
     $poste = $_POST['poste'];
     $num = $_POST['num'];
     $zone = $_POST['zone'];

     
     $sql = "INSERT INTO personne (nom,prenom,age,poste,num,zone)
     VALUES ('$nom','$prenom','$age','$poste','$num','$zone')";
     if (mysqli_query($conn, $sql)) {
        echo "Employé ajouté  !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>