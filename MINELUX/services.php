
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
        <link rel="stylesheet" href="css/services.css">
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
            <div class="alert alert-success">

                <!-- Theo mets une cmd php ici pour afficher ce msg seulement que le profile est enregistre ou enregistre apres modification-->

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                Votre profil a été enregistré avec succès!            
            </div>
            <form action id="bio_submit" class="submit_profile" method="post">
             <ul class="steps">
                                <li class="active"><a href="biographie.php">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposedemoi.php/">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="services.php">Step 3:<br>Langues</a></li>
                            <li class=""><a href="ville-de-travail.php">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="#">Step 5:<br>Service</a></li>
                            <li class=""><a href="mon-cadeau.php">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
                    </ul>
                        <div class="row row-17 flex-row">
                          <div class="col-xs-6">
        <div class="box">
            <h3 class="heading heading2">Orientation sexuelles</h3>
                    <div class="radio">
                    <label>
                        <input type="radio" id="sex_orientation" name="sex_orientation" value="1" checked="checked">Hétérosexuel
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" id="sex_orientation" name="sex_orientation" value="2">Bisexuelle                    
                    </label>
                </div>
                    </div>
    </div>  
        <div class="col-xs-6 services-for">
        <div class="box">
            <h3 class="heading heading2">Services offerts pour</h3>
                <div class="custom-checkbox">
                    <input type="checkbox" id="sex_availability_1" name="sex_availability[]" value="1" checked="checked">                    
                    <label for="sex_availability_1">Homme</label>
                </div>
                        <div class="custom-checkbox">
                    <input type="checkbox" id="sex_availability_2" name="sex_availability[]" value="2">  <label for="sex_availability_2">Femme</label>
                </div>
                            <div class="custom-checkbox">
                    <input type="checkbox" id="sex_availability_4" name="sex_availability[]" value="4"> 
                    <label for="sex_availability_4">Couples</label>
                </div>    
                        <div class="custom-checkbox">
                    <input type="checkbox" id="sex_availability_32" name="sex_availability[]" value="2+">
                    <label for="sex_availability_32">2+</label>
                </div>
                    </div>
    </div>
<div class="col-xs-12 services-for">
        <div class="box">
            <h3 class="heading">Services disponible</h3>
            <div class="row">
                    <div class="col-xs-4">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_1" name="services_offered[]" value="69" class="checkboxx">                                
                            <label for="services_1">69</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_2" name="services_offered[]" value="Sexe anal" class="checkboxx">                                
                            <label for="services_2">Sexe anal</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_3" name="services_offered[]" value="Ejaculation dans la bouche" class="checkboxx">                                
                            <label for="services_3">Ejaculation dans la bouche</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_4" name="services_offered[]" value="Ejaculation faciale" class="checkboxx">                                
                            <label for="services_4">Ejaculation faciale</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_5" name="services_offered[]" value="Jeux avec gode/sextoys" class="checkboxx">                                
                            <label for="services_5">Jeux avec gode/sextoys</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_6" name="services_offered[]" value="Embrasser avec la langue" class="checkboxx">                                
                            <label for="services_6">Embrasser avec la langue</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_7" name="services_offered[]" value="Expérience avec la copine" class="checkboxx">                                
                            <label for="services_7">Expérience avec la copine</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_8" name="services_offered[]" value="Embrasser" class="checkboxx">                                
                            <label for="services_8">Embrasser</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_9" name="services_offered[]" value="Sucer avec capote" class="checkboxx">                                
                            <label for="services_9">Sucer avec capote</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_10" name="services_offered[]" value="Sucer sans capote" class="checkboxx">                                
                            <label for="services_10">Sucer sans capote</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_11" name="services_offered[]" value="Sucer sans capote et jouir" class="checkboxx">                                
                            <label for="services_11">Sucer sans capote et jouir</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_12" name="services_offered[]" value="Sexe dans différentes positions" class="checkboxx">                                
                            <label for="services_12">Sexe dans différentes positions</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_52" name="services_offered[]" value="Ejaculation sur le corps" class="checkboxx">                                
                            <label for="services_52">Ejaculation sur le corps</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_53" name="services_offered[]" value="Massage érotique" class="checkboxx">                                
                            <label for="services_53">Massage érotique</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_54" name="services_offered[]" value="Branlette" class="checkboxx">                                
                            <label for="services_54">Branlette</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_55" name="services_offered[]" value="Embrasse selon symathie" class="checkboxx">                                
                            <label for="services_55">Embrasse selon symathie</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_68" name="services_offered[]" value="Handjob" class="checkboxx">                                <label for="services_68">Handjob</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_61" name="services_offered[]" value="Bain à bulles" class="checkboxx">                                <label for="services_61">Bain à bulles</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_62" name="services_offered[]" value="Epilation intime" class="checkboxx">                                
                            <label for="services_62">Epilation intime</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_69" name="services_offered[]" value="DUO" class="checkboxx">                                
                            <label for="services_69">DUO</label>
                            </div><br>
                         <div class="custom-checkbox">
                            <input type="checkbox" id="services_56" name="services_offered[]" value="Bodymassage avec mousse" class="checkboxx">                                
                            <label for="services_56">Bodymassage avec mousse</label>
                            </div><br>
                            </div>
                    <div class="col-xs-4">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_13" name="services_offered[]" value="Lécher et sucer les testicules" class="checkboxx">                                
                            <label for="services_13">Lécher et sucer les testicules</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_14" name="services_offered[]" value="Gorge profonde" class="checkboxx">                              
                            <label for="services_14">Gorge profonde</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_15" name="services_offered[]" value="Paroles cochonnes" class="checkboxx">                                
                            <label for="services_15">Paroles cochonnes</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_16" name="services_offered[]" value="Double pénétration" class="checkboxx">                                <label for="services_16">Double pénétration</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_17" name="services_offered[]" value="Plusieurs éjaculations" class="checkboxx">                                
                            <label for="services_17">Plusieurs éjaculations</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_18" name="services_offered[]" value="S'asseoir sur le visage" class="checkboxx">                                
                            <label for="services_18">S'asseoir sur le visage</label>
                            </div><br>
                        <div class="custom-checkbox">
                                <input type="checkbox" id="services_20" name="services_offered[]" value="Massage sensuel intégral" class="checkboxx">                                
                                <label for="services_20">Massage sensuel intégral</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_22" name="services_offered[]" value="Kamasutra" class="checkboxx">                                
                            <label for="services_22">Kamasutra</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_23" name="services_offered[]" value="Jeux sexuels lesbiens" class="checkboxx">                                
                            <label for="services_23">Jeux sexuels lesbiens</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_24" name="services_offered[]" value="Lingerie" class="checkboxx">                                
                            <label for="services_24">Lingerie</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_25" name="services_offered[]" value="Masturbation" class="checkboxx">                                
                            <label for="services_25">Masturbation</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_26" name="services_offered[]" value="Sucer sans préservatif" class="checkboxx">                                
                            <label for="services_26">Sucer sans préservatif </label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_27" name="services_offered[]" value="Sexe à l'extérieur" class="checkboxx">                                
                            <label for="services_27">Sexe à l'extérieur</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_28" name="services_offered[]" value="Expérience de star du porno (PSE)" class="checkboxx">                                
                            <label for="services_28">Expérience de star du porno (PSE)</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_29" name="services_offered[]" value="Photos privées" class="checkboxx">                                
                            <label for="services_29">Photos privées</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_66" name="services_offered[]" value="Private Videos" class="checkboxx">                                
                            <label for="services_66">Private Videos</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_30" name="services_offered[]" value="Massage de la prostate" class="checkboxx">                                
                            <label for="services_30">Massage de la prostate</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_32" name="services_offered[]" value="Lécher l'anus" class="checkboxx">                                <label for="services_32">Lécher l'anus</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_34" name="services_offered[]" value="Striptease/Lapdance" class="checkboxx">                                
                            <label for="services_34">Striptease/Lapdance</label>
                            </div><br>       
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_42" name="services_offered[]" value="Douche dorée" class="checkboxx">                                
                            <label for="services_42">Douche dorée</label>
                            </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_44" name="services_offered[]" value="Maîtresse" class="checkboxx">                                
                            <label for="services_44">Maîtresse</label>
                            </div><br>       
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_49" name="services_offered[]" value="Gode-ceinture" class="checkboxx">                                
                            <label for="services_49">Gode-ceinture</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_50" name="services_offered[]" value="Soumission/esclave (hard)" class="checkboxx">                                
                            <label for="services_50">Soumission/esclave (hard)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_51" name="services_offered[]" value="Soumission/esclave (soft)" class="checkboxx">                                
                            <label for="services_51">Soumission/esclave (soft)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_63" name="services_offered[]" value="Caviar (actif)" class="checkboxx">                                
                            <label for="services_63">Caviar (actif)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_64" name="services_offered[]" value="Caviar (passif)" class="checkboxx">                                
                            <label for="services_64">Caviar (passif)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_65" name="services_offered[]" value="Ejaculation féminine" class="checkboxx">                                
                            <label for="services_65">Ejaculation féminine</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_58" name="services_offered[]" value="Massage anal (actif)" class="checkboxx">                                
                            <label for="services_58">Massage anal (actif)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_59" name="services_offered[]" value="Massage anal (passif)" class="checkboxx">
                            <label for="services_59">Massage anal (passif)</label>
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="services_60" name="services_offered[]" value="Service douche" class="checkboxx">                                
                            <label for="services_60">Service douche</label>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
          </div>
                <div class="col-xs-12">
                     <div class="nextandbackBtns">
                      <a href="javascript:void(0);" onclick="doSave();" class="btn btn-primary save">Enregistrer</a>
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