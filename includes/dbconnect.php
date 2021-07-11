<?php


   try {
        $pdo=new PDO('mysql:host=localhost;dbname=ccn','root','');
   } catch (\Throwable $th) {
         echo("erreur lors de la connextion a la base de donnee");

   }
?>