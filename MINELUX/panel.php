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
	<tilte>panel</tilte>
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
                                            Vous n'avez pas suffisamment de photos pour activer votre profil. <a href="/panel/photos/index/9024">Cliquez ici</a> to add photos.                                    </div>
            </div>
            
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/profile/biography/9024/"></a>
                <img src="fond/profile.png" style="margin-bottom:15px;">
                <h5>Mon profil</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/photos/index/9024"></a>
                <img src="fond/Photo.png" style="margin-bottom:15px;">
                <h5>Organiser les photos</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/photos/video/9024"></a>
                <img src="fond/video.png" style="margin-bottom:15px;">
                <h5>Video</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/tours/"></a>
                <img src="fond/calenda.png" style="margin-bottom:15px;">
                <h5>Tourné de ville</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/comments/"></a>
                <img src="fond/msg.png" style="margin-bottom:15px;">
                <h5>Mes commentaires</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/settings/"></a>
                <img src="fond/reglages.png" style="margin-bottom:15px;">
                <h5>Paramètres</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/support/"></a>
                <img src="fond/support.png" style="margin-bottom:15px;">
                <h5>Support</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/statistics/"></a>
                <img src="fond/stats.png" style="margin-bottom:15px;">
                <h5>Vue d'ensemble</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/panel/pm/"></a>
                <img src="fond/msgpv.png" style="margin-bottom:15px;">
                <h5>Private Messages</h5>
            </div>
        </div>
            <div class="col-xs-3">
            <div class="box">
                <a href="/auth/logout/"></a>
                <img src="fond/exit.png" style="margin-bottom:15px;">
                <h5>Déconnexion</h5>
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
    </footer>
</body>
</html>