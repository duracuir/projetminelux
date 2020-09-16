<?php
    require('connexionBD.php');
session_start();
if(!isset($_SESSION['username'])){
    header('Location: connexion.php');
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
        <link rel="stylesheet" href="css/panel.css">
        <script src="js/script.js"></script>
</head>
    <body id="admin">
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

                        
                            </div>
                        <a class="btn btn-tertiary" href="signup.html">Private area</a>
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
                    <li class="nav-item active"><a class="nav-link" href="index.html">Accueil</a></li>
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
                <a href="index.php" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">espace privé</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
            <main class="container boxes">

    <script type="text/javascript">
    $('body').on( "click", 'a.disable', function(e) {
        var btn = $(this);
        if(btn.hasClass('btn-secondary')){
            var conftext = 'Êtes-vous sûr de vouloir désactiver votre compte escorte?';
        }else{
            var conftext = 'Are you sure you want to enable your account ?';
        }
        if(confirm(conftext)){
            $.ajax({
                type: "POST",
                url: "/panel/disable/",
                data: { escort_id: "9024"},
                async: false
            }).done(function(e) {
                if(typeof e=='object'){
                    if(e.ok){
                        if(btn.hasClass('btn-primary')){
                            btn.text('Désactiver mon profil').removeClass('btn-primary').addClass('btn-secondary');
                            $('.warning_disabled').hide();
                        }else{
                            btn.text('Activer mon profil').removeClass('btn-secondary').addClass('btn-primary');
                            $('.warning_disabled').show();
                        }
                    }else if(e.err){
                        alert(e.err);
                    }
                }
            });
        }
    });
</script>
<div class="row">
        <div class="col-xs-12">
        <div class="info-box">
            <div class="alert alert-warning warning_disabled" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Warning!</strong> Escort profile is now disabled.            </div>
                            <a href="javascript:void(0);" class="btn disable btn-secondary">Désactiver mon profil</a>
                        <p>Le package actif actuel est <b>NONE</b>. Expiration: jamais</p>
        </div>
    </div>
                        <div class="col-xs-12 refact">
                <div class="alert alert-danger nobottom">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                         Vous n'avez pas suffisamment de photos pour activer votre profil. 
                         <a href="gallery.php">Cliquez ici pour ajouter vos photos.</a>                               
                 </div>
            </div>
            
            <div class="col-xs-3">
            <div class="box">
                <a href="biographie.php">
                <img src="fond/profile.png" style="margin-bottom:15px;">
                <h5>Mon profil</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="gallery.php">
                <img src="fond/Photo.png" style="margin-bottom:15px;">
                <h5>Organiser les photos</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/photos/video/9024">
                <img src="fond/video.png" style="margin-bottom:15px;">
                <h5>Video</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/tours/">
                <img src="fond/calenda.png" style="margin-bottom:15px;">
                <h5>Tourné de ville</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/comments/">
                <img src="fond/msg.png" style="margin-bottom:15px;">
                <h5>Mes commentaires</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/settings/">
                <img src="fond/reglages.png" style="margin-bottom:15px;">
                <h5>Paramètres</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/support/">
                <img src="fond/support.png" style="margin-bottom:15px;">
                <h5>Support</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/statistics/">
                <img src="fond/stats.png" style="margin-bottom:15px;">
                <h5>Vue d'ensemble</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/pm/">
                <img src="fond/msgpv.png" style="margin-bottom:15px;">
                <h5>Private Messages</h5></a>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/auth/logout/">
                <img src="fond/exit.png" style="margin-bottom:15px;">
                <h5>Déconnexion</h5></a>
            </div>
        </div>
    </div>
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