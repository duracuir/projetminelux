<?php
session_start();
  // require('connexionBD.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'myminette');
if(isset($_POST['Save'])) {
    // $name = $_GET["username"];
 
 $query = "UPDATE `membres` SET datenaiss = '$_POST[datenaiss]', slogan = '$_POST[slogan]', region = '$_POST[region]', nationality = $_POST[nationality], epilation = '$_POST[epilation]', piercing = '$_POST[piercing]', tattoo = '$_POST[tattoo]', ville = '$_POST[ville]'  WHERE username = '$_SESSION[username]' ";
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/Biographie.css">
        <script src="js/script.js"></script>
</head>
    <body id="edit-profile">
        <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter id="filter-shadow" x="0" y="0" width="100%" height="100%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
            <feOffset dx="1" dy="1"></feOffset>
            <feComponentTransfer>
                <feFuncA type="linear" slope="0.3"></feFuncA>
            </feComponentTransfer>
            <feMerge>
                <feMergeNode></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
        </filter>
    </defs>
    
    <g id="icon-real-photos">
        <polygon points="16.67,4 13.85,20 16.89,20 19.1,7.48 56.52,14.07 52.18,38.69 48,37.96 48,50.14 53.05,51.03 60,11.64"></polygon>
        <path d="M4,20v40h44V20H4z M45,48H7V23h38V48z M41,45H11l5-7l5,4l5-7l5,5l5-8L41,45z M15,28c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3 c1.66,0,3-1.34,3-3C18,29.34,16.66,28,15,28z"></path>
    </g>
    <g id="icon-discretion-guaranteed">
        <path d="M50,28v-6c0-9.93-8.08-18-18-18c-9.93,0-18,8.07-18,18v6H8v32h48V28H50z M34,42.45V51c0,1.1-0.9,2-2,2s-2-0.9-2-2v-8.55 c-1.19-0.69-2-1.97-2-3.45c0-2.21,1.79-4,4-4s4,1.79,4,4C36,40.48,35.19,41.75,34,42.45z M18,28v-6c0-7.72,6.28-14,14-14 s14,6.28,14,14v6H18z"></path>
    </g>
    <g id="icon-trusted-website">
        <path d="M49.97,19.19L49.32,14l-4.17-3.15L42,6.68l-5.19-0.65L32,4l-4.81,2.03L22,6.68l-3.15,4.17L14.68,14l-0.65,5.19L12,24 l2.03,4.81L14.68,34l4.17,3.16L22,41.32l5.19,0.65L32,44l4.81-2.03L42,41.32l3.15-4.17L49.32,34l0.65-5.19L52,24L49.97,19.19z M34.5,32.54h-4v-11.5l-3,1.5v-4l4-2h3V32.54z"></path>
        <path d="M56,54l-7.7-1.33L45.61,60l-8.58-14.86l0.57-0.24l4.77-0.6l1.25-0.16l0.76-1.01l2.9-3.83l0.15-0.11L56,54z M26.4,44.89 l-4.77-0.6l-1.26-0.16l-0.76-1.01l-2.9-3.83l-0.15-0.11L8,54l7.7-1.33l2.7,7.33l8.58-14.86L26.4,44.89z"></path>
    </g>
    
</svg>
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
                        <span class="usermessage">
                         Bienvenue:
                        <a class="username" href="login.html">
                             <?php 
                       
                                if(!isset($_SESSION['username'])){
                                   echo "Vous n'êtes pas connecté!";
                                }else{
                                    echo $_SESSION['username'];
                                
                                }
                     ?>
                     
                        </a>
                        </span>   
                        <a class="btn btn-secondary" href="contact.html">Nous Contacter</a>
                        <a class="btn btn-secondary" href="deconnexion.php">Deconnexion</a>
                    </div>
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
                    <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="nouvelles.html">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="filles.html">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="garcon.html">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="vip.html">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="toursdeville.html">Tournées de Ville</a></li>
                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="index.html" class="btn btn-black">Retour</a>
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
                            <li class="active"><a href="#">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposdemoi.php">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="langue.php">Step 3:<br>Langues</a></li>
                            <li class=""><a href="ville-de-travail.php">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="services.php">Step 5:<br>Service</a></li>
                            <li class=""><a href="mon-cadeau.php">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
            </ul>
        
        <div class="row row-17">
            <div class="col-xs-6">
               <div class="row row-17">
                   <div class="col-xs-12">
                   <div class="box">
                       <h3 class="heading"> presentation </h3>
                       <div class="row">
                               <div class="col-xs-3 grp">
                                    <label for="nom">Nom*:</label>
                                </div>
                            <div class="col-xs-5 grp">
                            <input type="text" id="nom" name="nom" value="" placeholder="Nom">
                            </div>
                            <div class="col-xs-1 grp">
                                <label for="ville">Ville*</label>
                                <select id="birth_date" name="ville" class="selectpicker" placeholder="Âge" tabindex="-98">
                                    <option value="0">Ville</option>
                                            <option selected="selected" value="18">Yaoundé</option>
                                            <option value="Yaoundé">Yaoundé</option>
                                            <option value="Douala">Douala</option>
                                            <option value="Bamenda">Bamenda</option>
                                            <option value="Nkongsamba">Nkongsamba</option>
                                            <option value="Bafoussam">Bafoussam</option>
                                            <option value="Buea">buea</option>
                                            <option value="limbe">Limbé</option>
                                            <option value="Kribi">kribi</option>
                                            <option value="Edea">Edea</option>
                                            <option value="Dschang">Dschang</option>
                                            <option value="Ebolowa">Ebolowa</option>
                                            <option value="Ngaoundéré">Ngaoundéré</option>
                                            <option value="Bertoua">Bertoua</option>
                                            <option value="Loum">Loum</option>
                                            <option value="Kumba">Kumba</option>
                                            <option value="Foumban">Foumban</option>
                                            <option value="Tiko">Tiko</option>
                                            <option value="Bafang">Bafang</option>
                                            <option value="Sangmélima">Sangmélima</option>
                                            <option value="Mbanga">Mbanga</option>
                                            <option value="Mélong">Mélong</option>
                                </select>
                            </div>                          
                               </div>                       
                             </div>
                            <div class="col-xs-5 grp">
                            <label for="start">Né(e) le:</label>
                        </div>
                            <div class="col-xs-5 grp">
                            <input class="zone" id="date" id="start" name="trip-start" type="date" value="" min="1999-01-01" max="2080-01-01" placeholder="date de naissance"> 
                            </div>
                            <div class="col-xs-3 grp">
                            <label for="slogan">Slogan:</label>
                        </div>
                        <div class="col-xs-9 grp">
                            <input type="text" id="slogan" name="slogan" value="" placeholder="Slogan. Exp: la Tigresse">                            <small><b>ATTENTION:</b> Veuillez ne pas écrire les services, les tarifs ou les textes sexuellement explicites. Être discrète et transcrire vos offres.</small>
                        </div>
                        
                        <div class="col-xs-3 grp">
                            <label for="ethnicity">Origin:*</label>
                        </div>
                        <div class="col-xs-5 grp">
                            <div class="bloc">
                                  <div class="select" name="region">
                                    <select>
                                      <option> Région </option>
                                      <option value="0">l’Extrême-Nord</option>
                                      <option value="1">Nord</option>
                                      <option value="2">l’Adamaoua</option>
                                      <option value="3">l’Est</option>
                                      <option value="4">Centre</option>
                                      <option value="5">Sud</option>
                                      <option value="6">Littoral</option>
                                      <option value="7">l'Ouest</option>
                                      <option value="8">Nord-Ouest</option>
                                      <option value="9">Sud-Ouest</option>
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
                                      <option value="active">Camerounais(e)</option>
                                      <option value="0">Gabonais(e)</option>
                                      <option value="1">Tchadien(ne)</option>
                                      <option value="2">Nigerien(ne)</option>
                                      <option value="3">Congolais(e)</option>
                                      <option value="4">guinéen(ne)</option>
                                      <option value="5">Autre</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                         </div>
                       </div>
                        <div class="col-xs-12">
                 <div class="box">
                     <h3 class="heading heading3 photo profile">Télécharger Photos</h3>
                     <small>Postez une photo sensuelle et discrete qui transcrit vos atouts sexsulles et plus ...
                      pas de photo pronographique. si non votre compte sérait <b>Bloqué<b>. </small>
                        <div class="row">
                            <div class="col-xs-4 grp">
                               
                            </div>
                            <div class="col-xs-6 grp">
                                <div class="col-md-12 col-sm-12">
                <div class="gallery-upload">
                   
                    <a href="images.php">Charger photo profil</a>    
                    </form> 
                </div>
        
            </div>
                            </div>
                        </div>
                 </div>
             </div>
                    </div>
                  </div>
            <div class="col-xs-6">
                   <div class="box">
                       <h3 class="heading"> option </h3>
                       <div class="row">
                        <div class="col-xs-3 grp">
                        <label for="ethnicity">Epilation*</label>
                        </div>
                        <div class="col-xs-5 grp">
                            <div class="bloc">
                                  <div class="select">
                                    <select name="epilation">
                                      <option value="Entierement Naturel">Entierement Naturel</option>
                                      <option value="Entierement rasés">Entierement rasés</option>
                                      <option value="Partiellement rasés">Partiellement rasés</option>
                                      <option value="Entretenu">Entretenu</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                         </div>
                     <div class="box">
                         <div class="col-xs-12"></div>
                 <div class="col-xs-3 grp">
                    <label for="tattoo">Tattoo:</label>
                </div>
                <div class="col-xs-9 grp"><div class="radio">
                        <label>
                        <input type="radio" id="tatoo" name="tattoo" value="Oui">Oui</label>
               </div>
                <div class="radio"><label>
                        <input type="radio" id="tatoo" name="tattoo" value="Non" checked="checked">Non</label>
                </div>
            </div>  
                    <div class="col-xs-3 grp">
                        <label for="piercing">Piercings:</label>
                </div>
                    <div class="col-xs-9 grp">
                        <div class="radio">
                        <label>
                        <input type="radio" id="piercing" name="piercing" value="Oui">Oui</label>
                    </div>
                        <div class="radio"><label>
                        <input type="radio" id="piercing" name="piercing" value="Oui" checked="checked">Non</label>
                    </div>
                    </div> 
                    </div>
                    </div>
              </div>
            
        <div class="col-xs-12">
                     <div class="nextandbackBtns">
                      <a href="javascript:void(0);" onclick="doSave();" class="btn btn-primary save" name="Save">Enregistrer</a>
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
        <div class="copy"><small>© MINELUX 2020 Copyrigth All rigths reserved. V1.0 </small></div>
    </footer>
</body>
</html>