<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:connexion.php');
    exit;
}
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'myminette');
if (isset($_POST['Save'])) {
    // $username = $_GET['username'];
 
 $query = "UPDATE `membres` SET apropos = '$_POST[about_fr]', aboutme = '$_POST[about_en]', fumeur = '$_POST[is_smoking]', caractx = '$_POST[characteristics]', alcool = '$_POST[is_drinking]' WHERE username = '$_SESSION[username]' ";
  $query_run = mysqli_query($connection, $query);
  if($query_run) {
    echo '<script type="text/javascript"> alert("Vos données ont été enregistrées avec succès") </script>';
  } else {
    echo '<script type="text/javascript"> alert("Echecs enregistrement de vos donnees") </script>';
  }
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
        <link rel="stylesheet" href="css/aproposdemoi.css">
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
                <a href="index.html" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">éditer profil de minette</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
           <main class="container">
        <form action="aproposdemoi.php" id="bio_submit" class="submit_profile" method="post">
            <ul class="steps">
                            <li class="active"><a href="biographie.php">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposdemoi.php">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="langue.php">Step 3:<br>Langues</a></li>
                            <li class=""><a href="ville-de-travail.php">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="services.php">Step 5:<br>Service</a></li>
                            <li class=""><a href="mon-cadeau.php">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
            </ul>
            <!-- <input type="text" id="nom" name="username" value="<?php echo $_SESSION['username'] ?>" placeholder="Nom"> -->
            <div class="row row-17 flex-row">
                <div class="col-xs-6">
                    <div class="box">
                        <h3 class="heading heading2"><img width="18" src="logo/fr32.png"> A propos de moi <span class="pull-right">Ici que de texte en Francais</span></h3>
                        <div class="mceu">
                       <textarea id="about_fr" name="about_fr" class="tinymce" rows="5" cols="1000" placeholder="Remplissez uniquement les informations nécessaires grâce au formulaire pratique étape par étape. Toutes les informations peuvent être modifiées à tout moment."></textarea>
                   </div>
                    </div>
                </div>
                <div class="col-xs-6">
                   <div class="box">
                      <h3 class="heading heading2"><img width="18" src="logo/en32.png"> About me <span class="pull-right">Here only English text</span></h3>
                      <div class="mceu">
                      <textarea id="about_en" name="about_en" class="tinymce" rows="5" cols="1000" placeholder="Fill in only the information you need using the practical step-by-step form. All information can be changed at any time."></textarea>
                      </div>
                  </div>
                   </div>
                <div class="col-xs-6">
                    <div class="box">
                        <h3 class="heading">Informations supplémentaires</h3>
                        <div class="row">
                            <div class="col-xs-3 grp">
                            <label for="smoking">Fumeur:</label>
                        </div>
                        <div class="col-xs-9 grp">
                            <div class="radio">
                            <label><input type="radio" id="is_smoking" name="is_smoking" value="Oui"> Oui</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" id="is_smoking" name="is_smoking" value="Non" checked="checked">Non</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" id="is_smoking" name="is_smoking" value="Occasionnel">Occasionnel</label>
                            </div>
                        </div>
                            <div class="col-xs-3 grp">
                    <label for="drinking">Boit de l'alcool:</label>
                </div>
                     <div class="col-xs-9 grp"><div class="radio">
                            <label><input type="radio" id="is_drinking" name="is_drinking" value="Oui">Oui</label>
                        </div>
                        <div class="radio"><label>
                        <input type="radio" id="is_drinking" name="is_drinking" value="Non">Non</label></div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="is_drinking" name="is_drinking" value="Occasionnel" checked="checked">Occasionnel</label>
                        </div>
                        </div>   
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box">
                     <h3 class="heading">Caractéristiques spéciales</h3>
                        <label for="specialcharacteristics">Caractéristiques spéciales</label>
                        <textarea id="characteristics" name="characteristics" placeholder="Caractéristiques spéciales" rows="2" maxlength="250"></textarea>        
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