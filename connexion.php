<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCIPN|LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body-ins">
    <?php
        include("includes/header.php");
    ?>
    <section class="banner">
           <div class="container">
                 <div class="ombre">
                     
                 </div>
           </div>
    </section>
    <section class="sections">
            <div class="row ">

                <div class="col-md-8">
                      <form action="includes/traitement.php" method="GET" class="form-group la_form">
                           <div class="container">
                           <div class="container">
                                  <h2 class="text-center lab_login">Login</h2>
                            </div>
                            
                            <div>
                                <input type="email" class="form-control gwo" name="email" placeholder="Email">
                            </div>
                            <div>
                                <input type="password" class="form-control gwo" name="pass" placeholder="Password">
                            </div>
                            <div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                          <input type="checkbox" class="le_check" id='check' value="enregistrer">
                                          <label for="check">Enregistrer</label>
                                    </div>
                                    <div class="col-md-6">
                                          <span><a href="#">Mot de passe oublier?</a></span>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class='text-center'>
                                <input type="submit" class="form-control min-button" value="LOGIN">
                            </div>
                            <div class="link-reseaux-sociaux text-center">
                                <p>Connecter avec</p>
                                <a href="http://www.facebook.com"><i class="fa fa-facebook fa-2x face"></i></a>
                                <a href="http://www.twitter.com"><i class="fa fa-twitter fa-2x face"></i></a>
                                <a href="http://www.google.com"><i class="fa fa-google fa-2x face"></i></a>
                            </div>
                           </div>
                    </form>
                </div>
            </div>
    </section>
    
    <?php include("includes/footer.php");?>
     <script src="main.js"></script>
</body>
</html>