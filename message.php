<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message</title>
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
        <section class="ti_bwat">
              <div class="container">
                  <div class="row">
                       <div class="col-xs-12 col-md-12 text-center santre">
                            <?php 
           include("includes/dbconnect.php");
           $nom=htmlspecialchars($_GET['nom_institution']);
           $telephone=htmlspecialchars($_GET['telephone_contact']);
           $message=htmlspecialchars($_GET['message']);



           if(empty($nom) or empty($telephone) or empty($message)){
              echo("<h3>l'un des champs sont vide<h3>");
           }else{
              $sql_test="select * from entreprise where nom_entreprise=?";
              $rep1=$pdo->prepare($sql_test);
              $rep1->execute(array($nom));
              $nb_ligne=$rep1->rowcount();
              if ($nb_ligne > 0){
                  $sql="insert into contact(nom_institution,telephone,message) values(?,?,?)";
                  $rep=$pdo->prepare($sql);
                  $rep->execute(array($nom,$telephone,$message));
                  echo("<h3 class='briant'>Message envoyer avec succes <i class='fa fa-check-circle'></i><h3>");
              }else{
                   echo("<h3 class='briant'>Cette entreprise n'est pas dans la base de donnee <i class='fa fa-check-circle'></i><h3>");
              }
              
           }
        ?>
                       </div>
                  </div>
              </div>
        </section>

        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>