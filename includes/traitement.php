<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>a propos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        include("header.php");
        include("dbconnect.php");
        if (htmlspecialchars(isset($_GET['email']))) {
            $email=htmlspecialchars($_GET['email']);
        }
        if (htmlspecialchars(isset($_GET['pass']))){
            $password=htmlspecialchars(sha1($_GET['pass']));
        }

        if (empty($email) or empty($password)){
            header("location:../connexion.php");
        }else{
            $req="select * from entreprise where email=? and password=?";
            $rep=$pdo->prepare($req);
            $rep->execute(array($email,$password));
            $data=$rep->fetchall();
            foreach($data as $el){
                $id=$el['id'];
            }
            $nb_row=$rep->rowcount();
            if($nb_row>0){
              header("location:../membre.php?id=".$id);
            }else{
                header("location:../connexion.php");
            }
            
        }
    ?>
     <script src="main.js"></script>
</body>
</html>