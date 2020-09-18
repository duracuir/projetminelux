 <?php
    require("connexionBD.php");
initMigration($pdo);
if (isset($_GET["username"])) {
  $username = $_GET["username"];
  try {
    $statement = $pdo->prepare( 
     "SELECT username, photos, (YEAR(CURDATE())-date_format(datenaiss, '%Y')) as datenaiss, ville FROM membres WHERE username = :username ORDER BY orderGallery DESC"
      );
    $statement->execute(["username" => $username]);
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
  } catch (PDOException $e) {
      echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }
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
        <link rel="stylesheet" href="css/profilesminette.css">
        <script src="js/script.js"></script>
</head>
    <body id="profile">
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
                        <a class="btn btn-primary" href="login.html">S'identifier</a>
                        <a class="btn btn-tertiary" href="signup.html">S'inscrire</a>
                        <a class="btn btn-secondary" href="contact.html">Nous Contater</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Minettees"></a>
                    </div>
                    <div id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="/index.html/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/minettes/new/">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="/minettes/girls/">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="/minettes/homme/">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/minettes/vip/">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="/minettes/tours/">Tournées de Ville</a></li>
                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="/" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">Nom de la minette</h1>
                </div>
                    <div class="col-xs-4">
                    <p class="views">Derniere modification: jj/mm/aa: Nbr de vues:??</p>
                </div>
            </div>
            </div>
            </div>
		</header>
           <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a> </li>
                <li class="breadcrumb-item"><a href="/minettes/girls/paris/">ville de la minette </a> </li>
                <li class="breadcrumb-item active">nom de la minette</li>
            </ol>
        </div>
        <main class="container">
            <div class="row">
            <div class="content full">
                <div class="row">
                    <!-- Left side -->
                    <div class="col-xs-4">
                        <p class="slogan"><strong>Ville de la minette</strong></p> 
                         <div class="pictures">
                            <div class="row lightgallery row-sm">
                                <div class="col-xs-12 profile-picture">                        
                                    <div class="img">
                                     <a class="pitem" data-exthumbimage="chemin d la photo.jpeg" href=".jpeg">
                                            <img class="img-full" src="fond/corps-dame.png" alt="gaby - girls escort paris">
                                            <div class="badges">
                                            <div class="top-left">
                                                <svg class="ribbon" viewBox="0 0 132 132">
                                                        <use xlink:href="#ribbon-diamond"></use>
                                                    </svg>
                                                </div>
                                                <div class="top-right">
                                                <div class="badge-md">
                                                    <svg viewBox="0 0 64 64">
                                                        <use xlink:href="#badge-vip"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="bottom-left">
                                                <div class="badge-md">
                                                    <svg viewBox="0 0 64 64">
                                                        <use xlink:href="#badge-diamond"></use>
                                                    </svg>
                                                </div>
                                                    </div>
                                                        </div>
                                                             <div class="top-right">
                                                                <div class="badge-md">
                                                                 <svg viewBox="0 0 64 64">
                                                                <use xlink:href="#badge-vip"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                <div class="bottom-left">
                                                    
                                                </div>
                                            </div>
                                         </a>
                                    </div>
                                 
                        <!-- Photos -->
                        <div class="col-xs-4">
                            <a class="pitem" data-exthumbimage="//pic1.minettee.com/images/thumb_profile/63/0/arg_0x0/55c4c2d1feef57004df6dd189eabc191.jpeg" href="//pic1.minettee.com/images/orig/63/0/arg_0x0/55c4c2d1feef57004df6dd189eabc191.jpeg">
                        <img class="img-full" src="//pic1.minettee.com/images/thumb_profile/63/0/arg_0x0/55c4c2d1feef57004df6dd189eabc191.jpeg" alt="Angelina - Girl minette Paris">
                        </a>
                         

                    </div>  
								</div>
                            </div>
                                <!-- Boutton pour signaler une annonce -->

						
                <div class="buttons">
                    <div class="row row-sm">
                        <div class="col-xs-12"><a href="javascript:void(0);" data-action="problem" class="btn btn-black btn-block add_report"><styles> background: red;</styles>Signaler l'annonce</a>
                        </div>
                    </div>
                </div>
                
<!-- INFORMATION DETAILLES SUR LA MINETTE-->
</div>    
<form class="updating" action="profilesminette.php?username=<?php echo $results->username;?>" method="POST">                 
            <div class="col-xs-8">
                <div class="box info">
                    <div class="row">
                        <div class="col-xs-8">
                            <h2 class="person">
                                <span class="name"><?php echo
            $results->username;?></span>
                                <span class="city">(<?php echo
            $results->ville;?>)</span><br> 
</form>

                                <span class="age">ville</span>
                            </h2>
                        </div>
                        <div class="col-xs-4 clearfix gotm_div">
                                <a href="javascript:void(0);" class="btn btn-primary cta">Votez pour moi !</a>
                            </div>
                        <div class="col-xs-12">
                            <h3 class="box-title">Biographie</h3>
                        </div>
                        <div class="col-xs-6">
                            <div class="list">
                                <div class="row row-sm">
                                    <div class="col-xs-6 label-ct">Sexe</div>
                                    <div class="col-xs-6">:</div>                            
                                    <div class="col-xs-6 label-ct">Âge</div>
                                    <div class="col-xs-6">:</div>
                                    <div class="col-xs-6 label-ct">Orientation sexuelles</div>
                                    <div class="col-xs-6">:</div>
                                    <div class="col-xs-6 label-ct">Services offerts pour</div><div class="col-xs-6"><span>:</span><br><span></span></div>                               
								</div>
                            </div>
                        </div>

                     <div class="col-xs-6">
                         <div class="list">
                            <div class="col-xs-6 label-ct">Epilation du maillot</div>
							<div class="col-xs-6">:</div>
                            <div class="col-xs-6 label-ct">Tattoo</div>
                            <div class="col-xs-6">:</div> 
                            <div class="col-xs-6 label-ct">Piercings</div>
                            <div class="col-xs-6">:</div>
                            <div class="col-xs-6 label-ct">Langues</div>
                            <div class="col-xs-6">:</div>
                            
                            <div class="col-xs-6 label-ct">Disponible pour</div>
                            <div class="col-xs-6">
                                <span class="label-ct">Reçoit :</span>..............<br>
                                <span class="label-ct">Déplace :</span>...........<br>
                            </div>
                        </div>
                        </div>
                     </div>
                    </div>
               
                <div class="box about">
                    <h3 class="box-title half">A propos de moi</h3>
                    <p></p>
                    <p><br></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p><br></p>
                    <p></p>                
                </div>

                <div class="col-xs-6">
                            <div class="box prices">
                                <h3 class="box-title">Mon Cadeau</h3>
                                <div class="row row-sm">
                                <div class="col-xs-5 label-ct">Reçoit:</div>
                                        <div class="col-xs-7">
                                         heures /  Roses <br>  
                                         heures /  Roses</div>
                                     <div class="col-xs-5 label-ct">Déplace:</div>
                                        <div class="col-xs-7">
                                         heures /  Roses</div>
                                </div>
                            </div>
                        </div>

                    <div class="col-xs-6">
                        <div class="box contact-info">
                            <h3 class="box-title">Coordonnées</h3>
                            <div class="row row-sm">
                                <div class="col-xs-6 label-ct">Ville de base:</div>
                                <div class="col-xs-6">
                                    <a href="/" class="bold" title="">:</a>
                                </div>
                                <div class="col-xs-6 label-ct">Téléphone:</div>
                                <div class="col-xs-6 label-ct">
                                    

                                    <div class="phone">691811804<div class="phone_btn phone_btn_small">
                                    <a href="javascript:void(0);" onclick="showNumber(7810);">Voir le numéro</a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xs-6 label-ct">Consignes pour le téléphone:</div>
                                 <div class="col-xs-6">:</div>
                                 <div class="col-xs-6 label-ct">Apps Available:</div>
                                 <div class="col-xs-6"></div>
                            </div>
                        </div>
                    </div>

                <div class="box service-offered">
                        <h3 class="box-title half">Services</h3>
                        <div class="row">
                            <ul class="col-xs-4">                                
                                <li>Jeux avec gode/sextoys</li>
                                <li>Massage sensuel intégral</li>
                                <li>Massage de la prostate</li>
                                <li>Tantrique</li>
                                <li>BDSM</li>
                                <li>Bondage</li>
                            </ul>                                                            
                            <ul class="col-xs-4">                   
                                <li>Fétischisme</li>
                                <li>Fétischisme des pieds</li>
                                <li>Douche dorée (donneur)</li>
                                <li>Cuir / latex / PVC</li>
                                <li>Maîtresse (hard)</li>
                                <li>Maîtresse (soft)</li>
                            </ul>                           
                            <ul class="col-xs-4">                               
                                <li>Jeux de rôles et fantaisies</li>
                                <li>Fessée (donneur)</li>
                                <li>Gode-ceinture</li>
                                <li>Massage érotique</li>
                            </ul>
                        </div>
                    </div>
                           
                    <div class="box comments">
                        <div class="clearfix">
                            <h3 class="comments-title pull-left">Commentaires <span class="comm-num">0</span></h3>
                        </div>
                             <p>Pas de commentaires jusqu'a présent</p>
                        </div>

                        <div class="fixed-ph-no">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="phone">
                    691811804<div class="phone_btn">
                        <a href="javascript:void(0);" onclick="showNumber(8787);">Voir le numéro</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 right">
                                    <a href="javascript:void(0);" class="favorite">
                        <span>Ajouter au favoris</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path d="M4,23c0-9.132,7.183-17,16-17c4.641,0,8.985,1.945,12,5.5C35.016,7.941,39.359,6,44,6c8.815,0,16,7.868,16,17 c0,11.949-28,35-28,35S4,34.697,4,23z"></path>
                        </svg>
                    </a>
                            </div>
        </div>
    </div>
</div>
                                                  <script type="text/javascript">
                                                        var minette_id = '';
                                                        var add_fav = '/minette/ajax_add_fav/';
                                                        var del_fav = '/minette/ajax_del_fav/';
                                                        var translate = { 'add_fav': 'Ajouter au favoris', 'del_fav': 'Effacer de votre liste de Favoris' , 'comment_added': 'Votre commentaire a été ajouté avec succès. Vous le verrez après que nos modérateurs le confirment.' };
                                                        var contact_me = '/minette/ajax_pm/';
                                                        var gotm_link = '/minette/gotm_vote/';
                                                        var get_phone = '/minette/get_phone/';
                                                        var add_report = '/minette/add_report/';
                                                        var add_comment = '/minette/add_comment/';
                                                    </script>
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