<!DOCTYPE html>
<html>
<body>

<?php
   $conn= new mysqli("localhost","root","","Un_jour_une_recette");
   
   if($conn->connect_error){
    die("Echec de Connection au server");
   }


   $sql = "SELECT * FROM jeux_video";
   $result = $conn->query($sql);

   if($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
        echo $row['ID'] ." ". $row['nom']." ".$row['prix']." euro <br>" ;
      }
    } else {
      echo "0 results";
    }
   

   //CRUD 
   // Create ==> inserer dans la bdd
   // Read ==> selectionner de la bdd (afficher)
   // Update ==> modifier nos champs
   // Delete ==> supprimer de la bdd
?>

</body>
</html>