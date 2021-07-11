
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon.ico"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
   <?php
      include("includes/header.php");
   ?>
   <section class="container-fluid photos">
    
       <div class="carousel slide" id="carouselex" data-ride="carousel" data-interval="2000">
                   <ol class="carousel-indicators">
                       <li class="active" data-target="#carouselex" data-slide-to="0"></li>
                       <li data-target="#carouselex" data-slide-to="1"></li>
                       <li data-target="#carouselex" data-slide-to="2"></li>
                   </ol>
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img src="images/8.jpg" class="d-block w-100">
                         </div>

                         <div class="carousel-item">
                             <img src="images/1.jpg"  class="d-block w-100">
                         </div>

                         <div class="carousel-item">
                             <img src="images/16.jpg" class="d-block w-100">
                         </div>
                     </div>
                    <div class="ombre">
                        <div class="bb-centre">
                            <h3 class="home-title">Bienvenue a la Chambre de Commerce,d'Industrie et des Professions du Nord</h3>
                            <p class="text-image">
                            La Chambre de Commerce,d'Industrie et des Professions du Nord (ou CCIPN) est un établissement public destiné à représenter les intérêts des entreprises de types industriel, commercial ou de services. Elle exerce ses missions en s'appuyant sur un riche réseau de chambres régionales et locales.
                            </p>
                            <a href="galerie.php"><button class="le-button">Decouvre nous</button></a>
                        </div>
                    </div>
    
    
    <a href="#carouselex"  class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">previous</span>
    </a>


    <a href="#carouselex"  class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">next</span>
    </a>
    </div>
   </section>
   <!-- apropos-->
   <section class="about">
       <div class="container">
           <div class="section-header text-center">
                <h2 class="section-tittle">A propos de nous</h2>
                <div class="line"><span></span></div>
           </div>
          <div class="row">
                 <div class="col-md-6 col-xs-12">
                     <div class="about-info">
                         <h3>Bienvenue a la <span class="briant"> Chambre</span> de Commerce,d'Industrie et des Professions du nord</h3>
                         <p class="about-info-desc">
                         <h4>Les missions de la chambre de commerce,d'industrie et des professions du Nord</h4>
                        </p>
                        <p class="about-info-desc">
La CCIPN exerce une mission d'intérêt général. Elle représente les entreprises industrielles, commerciales et de services tant auprès des pouvoirs publics que des autorités étrangères afin de promouvoir le développement économique. Elle joue également un rôle de soutien auprès des entreprises notamment en accompagnant créateurs et repreneurs de sociétés ou encore en ouvrant pour la formation professionnelle. La CCN peut conseiller les entreprises dans leur développement territorial. 
                         </p>
                         <a href="apropos.php"><button class="le-button">Compredre plus</button></a>
                         
                     </div>
                  </div>

                   <div class="col-md-6 col-xs-12">
                          <div class="about-img">
                              <img src="images/9.jpg" alt="">
                          </div>
                   </div>
           </div>
       </div>
   </section>
   <!-- contact-->
   
<?php
include("includes/footer.php");
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


  
</body>
</html>
