<?php
session_start();
  // require('connexionBD.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'myminette');
if(isset($_POST['Save'])) {
    // $name = $_GET["username"];
 
 $query = "UPDATE `membres` SET langue = '$_POST[langues]', niveaulangue = '$_POST[languages2]' WHERE username = '$_SESSION[username]' ";
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
        <link rel="stylesheet" href="css/langue.css">
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
            <form action id="bio_submit" class="submit_profile" method="post">
                 <ul class="steps">
                            <li class="active"><a href="biographie.php">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposedemoi.php/">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="#">Step 3:<br>Langues</a></li>
                            <li class=""><a href="ville-de-travail.php">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="services.php">Step 5:<br>Service</a></li>
                            <li class=""><a href="mon-cadeau.php">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
            </ul>
                <div class="row row-17 flex-row">
                    <div class="col-xs-12">
                        <div class="box">
                            <h3 class="heading">Langues</h3>
                            <div class="row language" id="language_1">
                                <div class="btn-group bootstrap-select langselect">
                            <div class="btn dropdown-toggle btn-default">
                                  <div class="select">
                                    <select name="langues">
                                      <option value="Francais">Francais </option>
                                      <option value="Anglais">Anglais  </option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="col-xs-5 addon grp"><div class="radio">
                                    <label>
                                <input type="radio" name="languages2" value="Basique">Basique</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="languages2" value="Moyenne">Moyenne</label>
                                </div>
                                <div class="radio"><label>
                                        <input type="radio" name="languages2" value="Bonne" checked="checked">Bonne</label>
                                </div>
                                <div class="radio">
                                    <label>
                                <input type="radio" name="languages2" value="4">Excellent / Native</label>
                                </div>
                            </div>
                         </div>
                         <div class="col-xs-4 grp">
                            <a href="#" class="remove-language"><span>×</span>Supprimer</a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                     <div class="nextandbackBtns">
                      <!-- <a href="javascript:void(0);" onclick="doSave();" class="btn btn-primary save">Enregistrer</a> -->
                      <button type="submit" name="Save" class="btn btn-primary save">Enregistrer</button>
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