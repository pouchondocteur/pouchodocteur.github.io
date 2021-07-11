<?php
include("includes/dbconnect.php");

//------identite------------
$nom_identite=htmlspecialchars($_GET['nom']);
$pass_identite=htmlspecialchars(sha1($_GET['password']));
$Statut_identite=htmlspecialchars($_GET['statut']);
$secteur_identite=htmlspecialchars($_GET['secteur']);
$taille_identite=htmlspecialchars($_GET['taille']);
//------info sur l'entreprise------------
$date_de_fondation=htmlspecialchars($_GET['date_de_fondation']);
$numero_de_patente=htmlspecialchars($_GET['numero_de_patente']);
$adresse_de_l_entreprise=htmlspecialchars($_GET['adresse_de_l_entreprise']);
$telephone_entreprise=htmlspecialchars($_GET['telephone_entreprise']);
$email_entreprise=htmlspecialchars($_GET['email_entreprise']);
$numero_fiscal=htmlspecialchars($_GET['numero_fiscal']);
//--------personne a contacter----------
$nom_personne_a_contacter=htmlspecialchars($_GET['nom_personne_a_contacter']);
$prenom_a_contacter=htmlspecialchars($_GET['prenom_a_contacter']);
$nationalite=htmlspecialchars($_GET['nationalite']);
$telephone_a_contacter=htmlspecialchars($_GET['telephone_a_contacter']);
$email_a_contacter=htmlspecialchars($_GET['email_a_contacter']);
$nif=htmlspecialchars($_GET['nif']);
//--------service rendus---------
$services=$_GET['services'];
//---------modalite de paiement------------

//si io vid
if(empty($nom_identite) or empty($pass_identite) or empty($Statut_identite) or empty($taille_identite)
or empty($date_de_fondation) or empty($numero_de_patente) or empty($adresse_de_l_entreprise) or 
empty($telephone_entreprise) or empty($email_entreprise) or empty($numero_fiscal) or empty($nom_personne_a_contacter) or 
empty($prenom_a_contacter) or empty($nationalite) or empty($email_a_contacter) or empty($nif)){
      echo("<script>alert('ok')</script>");
      header("location:formulaire.php");
}







$annee=date("Y");
$month=date("m");
$day=date("d");
$la_date="$annee"."/"."$month"."/"."$day";



$paiement=$_GET['paiement'];
$req_insert="insert into entreprise(nom_entreprise,password,statut,secteur_d_activite,taille,date_de_fondation,numero_patente,adresse_de_l_entreprise,telephone,email,numero_fiscal,nom_a_contacter,prenom_a_contacter,nationalise,email_a_contacter,nif,services,paiement,date_inscription) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$rep=$pdo->prepare($req_insert);
$rep->execute(array($nom_identite,$pass_identite,$Statut_identite,$secteur_identite,$taille_identite,$date_de_fondation,$numero_de_patente,$adresse_de_l_entreprise,$telephone_entreprise,$email_entreprise,$numero_fiscal,$nom_personne_a_contacter,$prenom_a_contacter,$nationalite,$email_a_contacter,$nif,$services,$paiement,$la_date));

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>a propos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <?php include("includes/header.php"); ?>
        <section class="banner">
           <div class="container">
                 <div class="ombre">
                     
                 </div>
           </div>
        </section>
        <?php 
         
              echo("<h3 class='briant'>inscrire avec succes <i class='fa fa-check-circle'></i><h3>");
              
        ?>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>