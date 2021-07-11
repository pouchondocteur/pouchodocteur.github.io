<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire d'adhesion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <?php
        include("includes/header.php");

        ?>
       <section class="banner">
           <div class="container">
                 <div class="ombre">

                 </div>
           </div>
       </section>
       <section class="fo">
           <div class="container">
               <h2 class="text-center"> Formulaire d’adhesion</h2>
               <div class="Formulaire">
                   <div class="">
                       <form action="inscription.php" method="GET" class="well">
                          <div class="row">
                              <div class="col-md-3 col-xs-12">
                                  <fieldset>
                                       <legend>Identification de l'entreprise</legend>
                                       <input type="text" name="nom" class="form-control" placeholder="Nom de l'entreprise" >
                                       <input type="text" name="password" class="form-control" placeholder="Password" >
                                       <label for="statut">Statut</label>
                                       <select name="statut" id="statut" class="form-control">
                                           <option value="Individuel">Individuel</option>
                                           <option value="societe en nom collectif">Societe en nom collectif</option>
                                           <option value="societe anonyme">Societe anonyme</option>
                                           <option value="Individuel">Individuel</option>
                                        </select>
                                        <label for="secteur">Secteur d'activite</label>
                                        <select class="form-control" name="secteur" id="secteur">
                                             <option value="commerce">Commerce</option>
                                             <option value="agriculture">Agriculture</option>
                                             <option value="industrie">Industrie</option>
                                             <option value="service">Service</option>
                                             <option value="artisanat">Artisanat</option>
                                             <option value="autre">Autre</option>
                                        </select>
                                        <label for="taille">Taille</label>
                                        <select name="taille" id="taille" class="form-control">
                                            <option value="petite_enreprise">Petite Entreprise (1 à 10 Employé(s)</option>
                                            <option value="moyenne_entreprise"> Moyenne Entreprise (11 à 25Employés)</option>
                                            <option value="grande_entreprise">Grande Entreprise (26 et plus)</option>
                                        </select>
                                   </fieldset>
                              </div>
                              <div class="col-md-3 col-xs-12">
                                  <fieldset>
                                      <legend>Information sur l'entreprise</legend>
                                      <label for="date_de">Date de fondation</label>
                                      <input type="date" id="date_de" name="date_de_fondation" placeholder="Date de fondation" class="form-control">
                                      <input type="text" placeholder="Numero de patente" name="numero_de_patente" class="form-control">
                                      <input type="text" placeholder="Adresse de l'entreprise" name="adresse_de_l_entreprise" class="form-control">
                                      <input type="tel" placeholder="Telephone" name="telephone_entreprise" class="form-control">
                                      <input type="email" placeholder="Email" name="email_entreprise" class="form-control">
                                      <input type="text" placeholder="Numero d'immatriculation fiscal" name="numero_fiscal" class="form-control">
                                    </fieldset>
                              </div>
                              <div class="col-md-3 col-xs-12">
                                    <fieldset>
                                        <legend>Personne a contacter</legend>
                                        <input type="text" name="nom_personne_a_contacter" placeholder="Nom de la personne a contacter" class="form-control">
                                        <input type="text" name="prenom_a_contacter" placeholder="Prenom" class="form-control">
                                        <input type="text" name="nationalite" placeholder="Nationalite" class="form-control">
                                        <input type="tel" name="telephone_a_contacter" placeholder="Telephone" class="form-control">
                                        <input type="email" name="email_a_contacter" placeholder="Email" class="form-control">
                                        <input type="text" name="nif" placeholder="nif" class="form-control">
                                    </fieldset>
                              </div>
                              <div class="col-md-3 col-xs-12">
                                  <fieldset>
                                      <legend>Services attendus</legend>
                                      <select name="services" class="form-control">
                                          <option value="Mediation & Arbitrage" >Mediation & Arbitrage</option>
                                          <option value="seminaire formation" >Seminaire formation</option>
                                          <option value="organisation de conference" >Organisation de conference</option>
                                          <option value="coaching">Coaching</option>
                                      </select>
                                  </fieldset>

                                  <fieldset>
                                      <legend>Modalite de paiement</legend>
                                      <select class="form-control" name="paiement" id="">
                                          <option value="Petite">Petite Entreprise: 24,000.00 HTG/AN</option>
                                          <option value="moyenne">Moyenne Entreprise: 46,000.00 HTG/AN</option>
                                          <option value="grande">Grand Entreprise: 100,000.00 HTG/AN.</option>
                                      </select>
                                  </fieldset>
                              </div>
                              <div class="row">
                                   <div class="col-md-6 col-xs-12 ">
                                        <div class="">
                                             <input type="submit" class="button-inscrire" value="Inscrire">
                                        </div>
                                   </div>
                                   <div class="col-md-6">

                                   </div>
                              </div>
                          </div>
                          
                       </form>
                   </div>
               </div>
           </div>
       </section>
    
    <?php
       include("includes/footer.php");
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>