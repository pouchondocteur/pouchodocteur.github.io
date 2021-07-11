<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <header>
        <?php
            include("traitement/dbconnect.php");
            $req_admin="select * from admin";
            $req_entreprise="select * from contact";
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
                      <h3 class="logo"><a class="blanc" href="admin.php">ADMIN</a></h3>
                 </div>

                 <div class="col-md-8 col-xs-12 tet">
                     <ul class="nav-list list-unstyled">
                         <li class="list"><a href="../supprimer.php">Supprimer</a></li>
                         <li class="list"><a href="../modifier.php">Modifier</a></li>
                         <li class="list"><a href="../">Deconnecte</a></li>
                     </ul>
                     
                 </div>

                 <div class="col-md-1 col-xs-12">
                      
                 </div>

                 
            </div>
            <div class="row ">
                <div class="col-md-3 line-bar">
                       <form action="../search.php" method="GET" >
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
    <section class="sections container" id="HTMLtoPDF">
        <h3 class="text-center">la liste des messages</h3>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
               <tr>
                     <td>id</td>
                     <td>Nom de l’institution</td>
                     <td>Telephone</td>
                     <td>Message</td>
               </tr>
            </thead>
            <tbody>
                <?php
                    
                    $rep=$pdo->query($req_entreprise);
                    $data=$rep->fetchall();
                    foreach($data as $element){
                        echo("<tr><td>".$element['id']."</td><td>".$element['nom_institution']."</td><td>".$element['telephone']."</td><td>".$element['message']."</td></tr>");
                    }

                ?>
            </tbody>
            
        </table>
    </section>
    
    <?php
      ?>
    
    <script src="../js/jspdf.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/pdfFromHTML.js"></script>
</body>
</html>