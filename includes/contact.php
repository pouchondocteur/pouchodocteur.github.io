<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
            
             <div class="bwat-contact">
                 <h2 class="text-center">contacter nous</h2>
                 <form class="form-group form-contact" action="message.php" method="GET">
                       <div class="row">
                            <div class="col-md-6 col-xs-12">
                                 <input type="text" name="nom_institution" placeholder="Nom de l'institution" class="form-control">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                 <input type="tel" name="telephone_contact" placeholder="Telephone" class="form-control">
                            </div>
                            <div class="col-md-12 col-xs-12">
                                 <textarea name="message" id="" class="form-control" placeholder="message" cols="5" rows="10"></textarea>
                            </div>
                            <div class="col-md-2">
                                 <input type="submit" value="Envoyer" class="form-control le-button">
                            </div>
                       </div>
                 </form> 
             </div>
    </div>
</body>
</html>