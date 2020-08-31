<?php
session_start();
  // require('connexionBD.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'myminette');
if(isset($_POST['Save'])) {
    $name = $_GET["username"];
 
 $query = "UPDATE `membres` SET datenaiss = '$_POST[datenais]', slogan = '$_POST[slogan]', region = '$_POST[region]', nationality = '$_POST[nationality]', epilation = '$_POST[epilation]', piercing = '$_POST[piercing]', tattoo = '$_POST[tattoo]' WHERE username = '$_GET[username]' ";
  $query_run = mysqli_query($connection, $query);
  if($query_run) {
    echo '<script type="text/javascript"> alert("Vos données ont été enregistrées avec succès") </script>';
  } else {
    echo '<script type="text/javascript"> alert("Echecs enregistrement de vos donnees") </script>';
  }
}

if(!isset($_SESSION['username'])) {
    header('location:connexion.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <tilte></tilte>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/Biographie.css">
        <script src="js/script.js"></script>
</head>
    <body id="edit-profile">
         <header>
            
                <div class="top-nav">
                <div class="container clearfix">
                    <ul class="nav navbar-nav">
                        <li><a href="#top recherche">Top Recherché</a></li>
                        <li><a href="#top favorites">Top Favorites</a></li>
                        <li><a href="#nouvelles">Nouvelles</a></li>
                    </ul>

                    <div class="pull-left"></div>
                    <div class="pull-right">
                         <div><p>Bienvenu:
                        <a class="btn btn-primary" href="login.html">
                             <?php 
                       
                                if(!isset($_SESSION['username'])){
                                   echo "Vous n'êtes pas connecté!";
                                }else{
                                    echo $_SESSION['username'];
                                
                                }
                     ?>
                        </a>

                                </p>
                            </div>
                        <a class="btn btn-secondary" href="contact.html">Nous Contacter</a>
                        <a class="btn btn-secondary" href="deconnexion.php">Deconnexion</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Escortes"></a>
                    </div>
                    <div id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="/index.html/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/new/">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/girls/">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/homme/">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/vip/">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/tours/">Tournées de Ville</a></li>
                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="/" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">éditer profil de minette</h1>
                </div>
            </div>
            </div>
            </div>
        </header>
           <main class="container">
        <form id="bio_submit" class="submit_profile" action="biographie.php?username=<?php echo $_GET['username'];?>" method="post">
            <ul class="steps">
                            <li class="active"><a href="/panel/profile/biography/9024/">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposdemoi.php">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="/panel/profile/languages/9024/">Step 3:<br>Langues</a></li>
                            <li class=""><a href="/panel/profile/working_cities/9024/">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="/panel/profile/services/9024/">Step 5:<br>Service</a></li>
                            <li class=""><a href="/panel/profile/rates/9024/">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="/panel/profile/contact/9024/">Step 7:<br>Coordonnées</a></li>
            </ul>
        
        <div class="row rows-17">
            <div class="col-xs-6">
               <div class="row rows-17">
                   <div class="col-xs-12">
                       <div class="box">
                           <h3 class="heading">Présentation</h3>
                           <div class="row">
                               <div class="col-xs-3 grp">
                            <label for="nom">Nom*:</label>
                        </div>
                            <div class="col-xs-5 grp">
                            <input type="text" id="nom" name="username" value="<?php echo $_SESSION['username'] ?>" placeholder="Nom">
                            </div>
                            <div class="col-xs-5 grp">
                            <label for="start">Né(e) le:</label>
                        </div>
                            <div class="col-xs-5 grp">
                            <input class="zone" id="date" name="datenais" type="date" value=""  placeholder="date de naissance"> 
                            </div>
                            <div class="col-xs-3 grp">
                            <label for="slogan">Slogan:</label>
                        </div>
                        <div class="col-xs-9 grp">
                            <input type="text" id="slogan" name="slogan" value="" placeholder="Slogan. Exp: la Tigresse">                            <small><b>ATTENTION:</b> Veuillez ne pas écrire les services, les tarifs ou les textes sexuellement explicites. Être discrète et transcrire vos offres.</small>
                        </div>
                        <div class="col-xs-3 grp">
                            <label for="ethnicity">Origine:*</label>
                        </div>
                        <div class="col-xs-5 grp">
                            <div class="bloc">
                                  <div class="select">
                                    <select name="region">
                                      <option>De quelle Region est vous? </option>
                                      <option value="Centre">Centre</option>
                                      <option value="Nord">Nord</option>
                                      <option value="Ouest">Ouest</option>
                                      <option value="Sud-Ouest">Sud-Ouest</option>
                                      <option value="4">Autre a préciser</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                         </div>

                         <div class="col-xs-3 grp">
                        <label for="nationality">Nationalité:*</label>
                        </div>
                        <div class="col-xs-5 grp">
                            <div class="bloc">
                                  <div class="select">
                                    <select name="nationality">
                                      <option value="Camerounais(e)">Camerounais(e)</option>
                                      <option value="Gabonais(e)">Gabonais(e)</option>
                                      <option value="Tchadien(ne)">Tchadien(ne)</option>
                                      <option value="Nigerien(ne)">Nigerien(ne)</option>
                                      <option value="Congolais(e)">Congolais(e)</option>
                                      <option value="4">Autre a préciser</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                         </div>
                       </div>
                   </div>
               </div>
               <div class="col-xs-6">
            <div class="box">
                <h3 class="heading">Option</h3>
                     <div class="rows">
                        <div class="col-xs-3 grp">
                        <label for="ethnicity">Epilation du Maillot:*</label>
                        </div>
                        <div class="col-xs-5 grp">
                            <div class="bloc">
                                  <div class="select">
                                    <select name="epilation">
                                      <option value="Entierement Naturel">Entierement Naturel</option>
                                      <option value="Entierement rasés">Entierement rasés</option>
                                      <option value="Partiellement rasée">Partiellement rasée</option>
                                      <option value="Entretenu">Entretenu</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-xs-12"></div>
                         <div class="col-xs-3 grp">
                    <label for="tattoo">Tattoo:</label>
                </div>
                        <div class="col-xs-9 grp"><div class="radio">
                        <label>
                        <input type="radio" id="tatoo" name="tattoo" value="Oui">Oui</label>
                    </div>
                    <div class="radio"><label><input type="radio" id="tatoo" name="tattoo" value="Non" checked="checked">Non</label>
                    </div>
                    </div><div class="col-xs-3 grp"><label for="piercing">Piercings:</label>
                </div><div class="col-xs-9 grp"><div class="radio">
                        <label>
                        <input type="radio" id="piercing" name="piercing" value="Oui">Oui</label>
                    </div><div class="radio"><label>
                    <input type="radio" id="piercing" name="piercing" value="Non" checked="checked">Non</label>
                    </div>
                    </div>

                    

                    
                    </div>
                </div>
                </div> 
            </div>
        </div>
        <div class="col-xs-12">
                     <div class="nextandbackBtns">
                     <!--  <a href="javascript:void(0);" onclick="doSave();" name="submit" class="btn btn-primary save">Enregistrer</a> -->
                     <button type="Submit" name="Save" class="btn btn-primary save">Enregistrer</button>
                     </div>
                    </div>
            </div>
        </form>
        </main>
        <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-real-photos"></use>
                        </svg>
                        <h4 class="line">Photo des Minettes réelles</h4>
                    </div>
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-discretion-guaranteed"></use>
                        </svg>
                        <h4 class="line">Discretion assurée</h4>
                    </div>
                    <div>
                        <div class="col-xs-4">
                            <svg viewBox="0 0 64 64">
                            <use xlink:href="#icon-trusted-website"></use>
                            </svg>
                            <h4 class="line">Minette girl Cameroun</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>