<?php
    session_start();
   if(htmlspecialchars(isset($_GET['id']))){
       $id=htmlspecialchars( $_GET['id']);
   }
   include("traitement/dbconnect.php");
   $sql_req="delete from entreprise where id=?";
   $rep=$pdo->prepare($sql_req);
   $rep->execute(array($id));
   header("location:supprimer.php");
?>