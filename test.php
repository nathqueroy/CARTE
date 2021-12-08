<!DOCTYPE html>
<html>
      
<head>
    <title>
       Portique 
    </title>
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:black;">
   Portique de securite
    </h1>
      
    <h4>
      Appuyer sur rechercher puis scannez votre article   
    </h4>
      

    
    <?php
        

        if(array_key_exists('rechercher', $_POST)) {
            rechercher();
            
        }
     function verify($i){
            if ( $i == 1)
            {
                echo "article scanne ";
                
            }
            else 
            {
                echo "Cet article n'a pas ete encaisse";
            }
           
        }
        
        

        
        function rechercher(){
            try {

                $num_rfid=null;
                $retval=null;   
                exec('C:\wamp\www\codes\rfid-velleman', $num_rfid, $retval);
               

                $dbh = new PDO('mysql:host=172.20.15.34;dbname=runtouzv2', "Appli", "runtouz");
                $stmt = $dbh->prepare("SELECT * FROM article, info_article  WHERE `num_rfid` LIKE '$num_rfid[0]'");
                $stmt->bindParam(1, $num_rfid[0]);
                $stmt->execute();
                foreach($stmt as $row) {
                }
                if ($row[1]==$num_rfid[0]){
                   
                    $bdd = new PDO('mysql:host=172.20.15.34;dbname=runtouzv2;charset=utf8', "Appli", "runtouz");
                    $reponse = $bdd->query("SELECT*  FROM article,info_article WHERE num_rfid LIKE '$num_rfid[0]'");
                    $reponse->bindParam(1, $num_rfid[0]);
                    $reponse->execute();
                    
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    
                        <p>
                    <tr>    
                        
                        <strong>Etat article</strong> : <?php  echo Verify($donnees['vendu']); ?><br />
                        
                        

                    <tr>
                    </p>

                    <?php

                    $reponse->closeCursor();
                    }
                    echo "test";
                    ?>
                    
                        <p>
                    <tr>    
                        
                         <strong>nom_article</strong> : <?php echo$donnees['nom_article']; ?><br />
                        <strong>id_info_article</strong> : <?php echo$donnees['id_info_article']; ?><br />
                        <strong>prix_art</strong> : <?php echo$donnees['prix_art']; ?><br />
                        <strong>nom_marque</strong> : <?php echo$donnees['nom_marque']; ?><br />
                        <strong>quantite</strong> : <?php echo$donnees['quantite']; ?><br />
                        <strong>description</strong> : <?php echo$donnees['description_art']; ?><br />
                        

                    <tr>
                    </p>

                    <?php
                    
                    
        
                  
                }else{
                    
                    header('Location:error404.php');
                    
                    
                   
                }
                $dbh = null;
                
                
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }


            
        }
       
    ?>
  
    <form method="post">
        <input type="submit" name="rechercher"
                class="button" value="rechercher" />
    <form method="post">
        <input type="submit" name="afficher les informations de l'article "
                class="button" value="afficher_info" />
        
    </form>
    
     
</head>
  <script>
        
        




</script>
</html>