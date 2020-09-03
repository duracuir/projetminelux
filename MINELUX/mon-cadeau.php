<?php
session_start();
require ('connexionBD.php');
if (!isset($_SESSION['username'])) {
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
        <link rel="stylesheet" href="css/mon-cadeau.css">
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
            <div >

                <!-- Theo mets une cmd php ici pour afficher ce msg seulement que le profile est enregistre ou enregistre apres modification-->
                           <?php

                    if (isset($_POST['Submitted'])) {
                        $username = $_SESSION['username'];
                        $timer = $_POST['timer'];
                        $unite = $_POST['uniter'];
                        $amount = $_POST['amount'];

                        if ($timer && $unite && $amount) {
                                $statement = $pdo -> prepare( "INSERT INTO `reception` (username, heurerecep, uniterecep, montant)
                                                 VALUES ('$username', '$timer', '$unite', '$amount')");
                             $statement->execute(['username'=> $username, 'heurerecep' => $timer, 'uniterecep'=> $unite, 'montant'=> $amount]);
                            echo "<p style='color: green; background-color: lightgreen;'>Vos données ont été enregistrées avec succès</p>";

                        } else {
                            echo "<p style='color: red;background-color: pink;'> Veuillez renseigner les champs vides </p>";
                        }
                       
                         
             }

            ?>    
              <?php

                    if (isset($_POST['Saved'])) {
                        $usernamed = $_SESSION['username'];
                        $timerd = $_POST['timerd'];
                        $united = $_POST['united'];
                        $amountd = $_POST['amountd'];
                        $taxi = $_POST['taxi'];

                        if ($timerd && $united && $amountd) {
                                $statement = $pdo -> prepare( "INSERT INTO `deplacement` (usernamed, heuredep, unitedep, montantdep, taxi)
                                                 VALUES ('$usernamed', '$timerd', '$united', '$amountd', $taxi)");
                             $statement->execute(['usernamed'=> $usernamed, 'heuredep' => $timerd, 'unitedep'=> $united, 'montantdep'=> $amountd, 'taxi' => $taxi]);
                            echo "<p style='color: green; background-color: lightgreen;'>Vos données ont été enregistrées avec succès</p>";

                        } else {
                            echo "<p style='color: red;background-color: pink;'> Veuillez renseigner les champs vides </p>";
                        }
                        // $sql = "SELECT heuredep, unitedep, montantdep FROM deplacement WHERE usernamed = :usernamed";
                        // // $sql->execute(["username"=> $username]);
                        // $stmt = $pdo->prepare($sql);
                        // $stmt->bindValue(':usernamed', $_SESSION['username']);
                        //  $stmt->execute();
                        // $stmt->bindColumn('heuredep', $timerd);
                        // $stmt->bindColumn('unitedep', $united);
                        // $stmt->bindColumn('montantdep', $amountd);
                        // $stmt->bindColumn('taxi', $taxi);
                         
             }

            ?>     
                <!-- Votre profil a été enregistré avec succès!             -->
            </div>
            <form action id="bio_submit" class="submit_profile" method="post">
             <ul class="steps">
                            <li class="active"><a href="biographie.php">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposdemoi.php">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="langue.php">Step 3:<br>Langues</a></li>
                            <li class=""><a href="ville-de-travail.php">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="services.php">Step 5:<br>Service</a></li>
                            <li class=""><a href="#">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
                    </ul>
<!-- 				<script type="text/javascript">
    $(document).ready(function(){
        $('body').on('click', '.gift .delete-gift', function(e){
            e.preventDefault();
            $(this).closest('.gift').remove();
        });

        $('#incall-gifts').on('click', '#add_incall', function(e){
            e.preventDefault();
            var packing = $('#incall-gifts .pricetable').first();
            var clone = packing.clone();
            var time = clone.find('input#qty');
            var unit = clone.find('select#unit option:selected');
            var price = clone.find('input#amt');
            var currency = clone.find('span#cry');
            if(time.val()<1 || time.val()>60 || $.isNumeric(time.val())===false){
                time.focus();
            }else if(price.val()<1 || $.isNumeric(price.val())===false){
                price.focus();
            }else{
                clone.append('<input type="hidden" name="incall_times[]" value="'+time.val()+'"><input type="hidden" name="incall_unit[]" value="'+packing.find('select#unit option:selected').val()+'"><input type="hidden" name="incall_price[]" value="'+price.val()+'"><input type="hidden" name="incall_currency[]" value="1">');
                clone.find('.cta').empty().html('<a href="#" class="delete-gift"><span>&times;</span> Supprimer</a>');
                clone.find('input[type!="hidden"]').removeAttr('id').prop('disabled', true);
                clone.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
                clone.find('select').removeAttr('id').val(packing.find('select#unit option:selected').val()).selectpicker('refresh');
                clone.find('.bootstrap-select button').addClass('disabled');
                packing.find('input, select').val('');
                packing.find('select').selectpicker("refresh");
                clone.appendTo('#incall-gifts .gifts');
            }
        });

        $('#outcall-gifts').on('click', '#add_outcall', function(e){
            e.preventDefault();
            var packing = $('#outcall-gifts .pricetable').first();
            var clone = packing.clone();
            var time = clone.find('input#qty');
            var unit = clone.find('select#unit option:selected');
            var price = clone.find('input#amt');
            var currency = clone.find('span#cry');
            var taxi = clone.find('input#taxi');

            if(time.val()<1 || time.val()>60 || $.isNumeric(time.val())===false){
                time.focus();
            }else if(price.val()<1 || $.isNumeric(price.val())===false){
                price.focus();
            }else{
                clone.append('<input type="hidden" name="outcall_times[]" value="'+time.val()+'"><input type="hidden" name="outcall_unit[]" value="'+packing.find('select#unit option:selected').val()+'"><input type="hidden" name="outcall_price[]" value="'+price.val()+'"><input type="hidden" name="outcall_currency[]" value="1"><input type="hidden" name="outcall_taxi[]" value="'+ (taxi.is(":checked")?1:0) +'">');
                clone.find('.cta').empty().html('<a href="#" class="delete-gift"><span>&times;</span> Supprimer</a>');
                clone.find('input[type!="hidden"]').removeAttr('id').prop('disabled', true);
                clone.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
                clone.find('select').removeAttr('id').val(packing.find('select#unit option:selected').val()).selectpicker('refresh');
                clone.find('.bootstrap-select button').addClass('disabled');
                clone.find('.custom-checkbox label').removeAttr('for');
                packing.find('input, select').val('');
                packing.find('input[type="checkbox"]').prop('checked', false);
                packing.find('select').selectpicker("refresh");
                clone.appendTo('#outcall-gifts .gifts');
            }
        });
    })
</script> -->

     <div class="row row-17 flex-row">
    <div class="col-xs-6">
        <div class="box" id="incall-gifts">
            <h3 class="heading heading3">Reçoit</h3>
            <div class="subheading">
                <div class="row row-5">
                    <div class="col-xs-13"><span>Heure</span></div>
                    <div class="col-xs-25"><span>Unité</span></div>
                    <div class="col-xs-2"><span>Montant</span></div>
                    <div class="col-xs-2"><span>Devise</span></div>
                </div>
            </div>
    <?php
        $allmsg = $pdo -> query("SELECT username, heurerecep, uniterecep, montant FROM reception WHERE username = '$_SESSION[username]'");
        while($msg = $allmsg -> fetch())
            {
    ?>
    
     <div class="col-xs-13"><?php echo $msg['heurerecep'];?> </div>
        <div class="col-xs-25"><?php echo $msg['uniterecep'];?></div>
        <div class="col-xs-2"><?php echo $msg['montant'];?></div>
        <div class="col-xs-2">FCFA</div><br>
    <?php
            }
    ?>
    
            <div class="gifts">
                <div class="row row-5 gift pricetable" id="gift_100">
                    <div class="col-xs-13 time">
                        <input type="text" id="qty" name="timer">
                    </div>
                    <div class="col-xs-25 unit">
                        <div class="btn-group bootstrap-select">
                            <div class="dropdown-menu open">
                                <ul class="dropdown-menu inner" role="menu">
                                    <li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" style="" data-tokens="null" href="#"><span class="text">-----</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">minutes</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">heures</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">jours</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                </ul>
                            </div>
                        <select id="unit" class="selectpicker" tabindex="-98" name="uniter">
                            <option value="" selected="" disabled="">-----</option>
                            <option value="minutes">minutes</option>
                            <option value="heures">heures</option>
                            <option value="jours">jours</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-xs-2 amount">
                        <input type="text" id="amt" name="amount">
                    </div>
                    <div class="col-xs-2 addon currency">
                        <span>FCFA</span>
                    </div>
                    <div class="col-xs-123"></div>
                    <div class="col-xs-2 cta">
                    <button class="btn btn-primary btn-block add-gift" id="add_incall" name="Submitted">Ajouter</button>
          
                    </div>

                 </div>
            </div>
        </div>
    </div>
<div class="col-xs-6">
        <div class="box" id="incall-gifts">
            <h3 class="heading heading3">Déplacement</h3>
            <div class="subheading">
                <div class="row row-5">
                    <div class="col-xs-13"><span>Heure</span></div>
                    <div class="col-xs-25"><span>Unité</span></div>
                    <div class="col-xs-2"><span>Montant</span></div>
                    <div class="col-xs-2"><span>Devise</span></div>
                    <div class="col-xs-2"><span>+Taxi</span></div>
                </div>
            </div>
            <?php
        $allmsgd = $pdo -> query("SELECT usernamed, heuredep, unitedep, montantdep, taxi FROM deplacement WHERE usernamed = '$_SESSION[username]'");
        while($msgd = $allmsgd -> fetch())
            {
    ?>
    
     <div class="col-xs-13"><?php echo $msgd['heuredep'];?> </div>
        <div class="col-xs-25"><?php echo $msgd['unitedep'];?></div>
        <div class="col-xs-2"><?php echo $msgd['montantdep'];?></div>
        <div class="col-xs-2">FCFA</div>
         <div class="col-xs-2"><?php echo $msgd['taxi'];?></div><br>
    <?php
            }
    ?>
            <div class="gifts">
                <div class="row row-5 gift pricetable" id="gift_100">
                    <div class="col-xs-13 time">
                        <input type="text" id="qty" name="timerd">
                    </div>
                    <div class="col-xs-25 unit">
                        <div class="btn-group bootstrap-select">
                            <div class="dropdown-menu open">
                                <ul class="dropdown-menu inner" role="menu">
                                    <li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" style="" data-tokens="null" href="#"><span class="text">-----</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">minutes</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">heures</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">jours</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                </ul>
                            </div>
                        <select id="unit" class="selectpicker" tabindex="-98" name="united">
                            <option value="" selected="" disabled="" >-----</option>
                            <option value="minutes">minutes</option>
                            <option value="heures">heures</option>
                            <option value="jours">jours</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-xs-2 amount">
                        <input type="text" id="amt" name="amountd">
                    </div>
                    <div class="col-xs-2 addon currency">
                        <span>FCFA</span>
                    </div>
                    <div class="col-xs-123">
                        
                        <div class="custom-checkbox">
                            <input type="checkbox" id="taxi" value="1" name="taxi">
                            <label for="taxi"></label>
                        </div>
                    </div>
                    <div class="col-xs-2 cta">
                        <button class="btn btn-primary btn-block add-gift" id="add_incall" name="Saved">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="csrf" name="csrf" value="dDZqdnY2MzRFK3gzYkgrNnljMHVQUT09">    <div class="col-xs-12">
        <div class="nextandbackBtns">
            <!-- <a href="javascript:void(0);" onclick="doSave();" class="btn btn-primary save">Enregistrer</a> -->
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