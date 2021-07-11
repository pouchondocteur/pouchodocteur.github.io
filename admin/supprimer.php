<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <header>
    <?php session_start();?>
        <?php
            include("traitement/dbconnect.php");
            $req_admin="select * from admin";
            $req_entreprise="select * from entreprise";
            $rep=$pdo->query($req_admin);
            $dato=$rep->fetchall();
            
            foreach($dato as $el){
                $nom=$el['nom'];
            }
        ?>
        <div class="container">
            <div class="row">
                 <i class="les-bars fa fa-bars fa-2x"></i>
                 <span class="partie-user">
                       <?php echo($nom); ?>
                       <i class="user fa fa-user fa-5x"></i>
                 </span>
                 
                 <div class="col-md-3 col-xs-12">
                     <h3 class="logo"><a href="traitement/admin.php">ADMIN</a></h3>
                 </div>

                 <div class="col-md-8 col-xs-12 tet">
                     <ul class="nav-list list-unstyled">
                         <li class="list"><a href="supprimer.php">Supprimer</a></li>
                         <li class="list"><a href="modifier.php">Modifier</a></li>
                         <li class="list"><a href="messages.php">Message</a></li>
                         <li class="list"><a href="index.php">Deconnecter</a></li>
                     </ul>
                     
                 </div>

                 <div class="col-md-1 col-xs-12">
                      
                 </div>
            </div>
            <div class="row ">
                <div class="col-md-3 line-bar">
                       <form action="search.php" method="GET" >
                          <div>
                                 <input class="form-control" name="date" type="date">
                          </div>

                          <div>
                                 <input type="submit" value="rechercher" class="form-control le-bu"></input>
                           </div>
                          
                          
                       </form>
                </div>
            </div>
            
        </div>
    </header>
    
</head>
<body>
    <section class="sections container">
        <h3 class="text-center">la liste des entreprise</h3>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
               <tr>
                     <td>id</td>
                     <td>Nom de l’entreprise</td>
                     <td>Statut</td>
                     <td>Secteur d’activité</td>
                     <td>Taille</td>
                     <td>Date de foundation</td>
                     <td>Numéro de patente</td>
                     <td> adresse de l’entreprise</td>
                     <td>telephone</td>
                     <td> email</td>
                     <td>Numero immatriculation fiscal</td>
                     <td>Nom a contacter</td>
                     <td>Prénom</td>
                     <td>Nationalité</td>
                     <td>Téléphone</td>
                     <td>Emai</td>
                     <td>Nif</td>
                     <td>Services attendus</td>
                     <td>Modalité de paiement</td>
                     <td>Date d'inscription</td>
                     <td>Suppretion</td>
               </tr>
            </thead>
            <tbody>
                <?php
                    $rep=$pdo->query($req_entreprise);
                    $data=$rep->fetchall();
                    foreach($data as $element){
                        //var_dump($element);
                        echo("<tr><td>".$element['id']."</td><td>".$element['nom_entreprise']."</td><td>".$element['statut']."</td><td>".$element['secteur_d_activite']."</td><td>".$element['taille']."</td><td>".$element['date_de_fondation']."</td><td>".$element['numero_patente']."</td><td>".$element['adresse_de_l_entreprise']."</td><td>".$element['telephone']."</td><td>".$element['email']."</td><td>".$element['numero_fiscal']."</td><td>".$element['nom_a_contacter']."</td><td>".$element['prenom_a_contacter']."</td><td>".$element['nationalise']."</td><td>".$element['telephone_a_contacter']."</td><td>".$element['email_a_contacter']."</td><td>".$element['nif']."</td><td>".$element['services']."</td><td>".$element['paiement']."</td><td>".$element['date_inscription']."</td><td><a href='sup.php?id=".$element['id']."'>Supprimer</a></tr>");
                    }

                ?>
            </tbody>
            
        </table>
    </section>
    
    
    <script src="../js/jspdf.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/pdfFromHTML.js"></script>
</body>
</html>