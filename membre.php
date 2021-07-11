<?php session_start();
include("includes/dbconnect.php");
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membres</title>
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
        <section class="mitan container">
            <?php 
                $id=$_GET['id'];
                $req="select nom_entreprise from entreprise where id=?";
                $rep=$pdo->prepare($req);
                $rep->execute(array($id));
                $data=$rep->fetchall();
                foreach($data as $dat){
                            echo("<h5> bonjour ".$dat['nom_entreprise']."</h5>");
                }
            ?>
            <p class="text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident blanditiis molestias corrupti, minima temporibus modi sint repudiandae cum aperiam voluptas recusandae cumque rerum veniam ex facere eligendi dicta omnis. Exercitationem.
            </p>
            <div class="row services ">
                <div class="col-md-4 col-xs-12 ">
                   <div class="text-center">
                          <i class="ico fa fa-laptop fa-2x"></i>
                   </div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas consequuntur reprehenderit, possimus ad quaerat repellat, numquam iure accusantium culpa nam similique dicta magni pariatur temporibus quam vel commodi suscipit placeat.
                </div>
                <div class="col-md-4 col-xs-12">
                   <div class="text-center">
                          <i class="ico fa fa-laptop fa-2x"></i>
                   </div>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio magni quasi nesciunt quod repellat optio expedita odit eaque mollitia rerum. Eveniet sint quisquam quae saepe consectetur, necessitatibus ipsam impedit possimus.
                </div>
                <div class="col-md-4 col-xs-12">
                   <div class="text-center">
                          <i class="ico fa fa-laptop fa-2x"></i>
                   </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloremque eaque odio excepturi dolorum natus laboriosam illo, autem et maiores at laudantium vel, sed sit cupiditate ab nobis sapiente alias?
                </div>
            </div>
        </section>
       <?php include("includes/footer.php"); ?>
       <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/main.js"></script>

</body>
</html>