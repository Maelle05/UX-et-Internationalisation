<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <header>
    <meta charset="utf-8" />
        <title>UX et Internationalisation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" href="css/couleur.css">
        <link rel="stylesheet" href="css/tel.css" media="screen and (max-width: 800px)">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
    </header>
    <body>
        <div class="menu">
             <?php include("menu.php") ?>
        </div>
        <div class="head_barre" >
        <img src="img/logo_UX.png" style="width: 13%; position: fixed; z-index: 31; padding-top: 0.5%; padding-left:5%; " alt="">
        <div style="padding-left: 70%" >


        </div>

        </div>
<div class="contenu">
            <div class="bienvenue_prenom colorChange" id="partie1" >
            <h1>UX et Internationalisation</h1>
                        <?php

                            if (isset($_GET['user_p'], $_GET['user_l'])){
                                if(!empty($_GET['user_p']) AND !empty($_GET['user_l'])){
                                    $user_prenon = htmlspecialchars($_GET['user_p']);
                                    $user_localisation = htmlspecialchars($_GET['user_l']);
                                }else{
                                    $user_prenon = "Utilisateur";
                                    $user_localisation = "France ?";
                                }
                            }else {
                                $user_prenon = "Utilisateur";
                                $user_localisation = "France ?";
                            }
                        ?>

                <img src="img/perso/Violet.png" class="Paul1" alt="Paul" >
            </div>

            <div class="intro " id="intro" >
                <?php include('intro.php') ?>

            </div>
<hr>
            <div class="langue colorChange" id="partie2">
                <h2>Les langues</h2>
                            <?php include('langue.php') ?>
<br>
            </div>
<hr>
            <div class="form colorChange" id="partie3">
                <?php include('form.php') ?>
<br>
            </div>
<hr>
            <div class="couleur_part colorChange" id="partie4">
                <?php include("couleur.php") ?>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
<hr>
            <div class="symbole colorChange" id="partie5">
                <h2>La perception des symboles</h2>
                            <div style="display: flex; flex-direction: row; ">
                                <img src="img/fou.gif" class="hib1"  alt="">
                                <img src="img/calme.gif" class="hib2"  alt="">
                            </div>
                            <div class="cont_symb" style="">
                                <p class="bulle" >
                <?php echo($user_prenon); ?> ! <br>
                Nous voilà enfin arrivé en Inde, au musée Napier ! <br>
                Ici, tu peux voir que le hibou représente la folie.
                L’utiliser pour le logo d’un hôpital psychiatrique n’est pas choquant !
                </p>
                <p class="bulle2" >
                <?php echo($user_prenon); ?> ! <br>
                C’est étrange comme les symboles peuvent varier d’un pays à l’autre.
                Parce qu’aux États Unis, le hibou est un symbole de sagesse et d’intuition. Dans tous les Disneys,
                le hibou est toujours un personnage bienveillant qui guide le héros.

                </p>

                </div>
                        <p style="text-align: center;" class="unSymbole">
Un symbole montrant une paume de la main peut être choquant pour les populations Asiatiques, alors que dans le reste du monde, ce dernier est très courant !
<br>
C’est pourquoi, comme pour les couleurs, il faut se renseigner sur les pays ciblés en UX !
<br> </p>
<div id="d5">
               <button onclick="voirPlus5()">Voir plus</button>
                <p id="p5" class="hide"><br>
                Ici, vous trouverez les <a href="http://dictionnairedessymboles.com/" target = "_blank"> significations des symboles </a> dans divers pays, cultures, époques…
 <br>
                <button onclick="voirMoins5()">Fermer</button></p>
                </p>
			</div>

<script>
let p5 = document.getElementById('p5');
let d5 = document.getElementById('d5');

p5.style.display = "none";
function voirPlus5(){
    p5.style.display = "block";
}

function voirMoins5(){
    p5.style.display = "none";
}
</script>
<br>



            </div>
<hr>
            <div class="convertion colorChange" id="partie6">
                <h2>La convertion des mesures et devises</h2>
                <p class="bulle3">
                Aaaah le Japon ! Il est assez compliqué de s’adapter aux codes culturels du pays, notamment au niveau monétaire ! En effet, 1€ vaut 120,27 Yens ! <br> </p>
                <img src="img/perso/Violet.png" class="personnageLangue Paul" alt="Paul" >
                <img src="img/illu/Balance.png" style="width: 40%; padding-left:20%;" alt="">
                <p style="text-align: center;" class="ilEst">
Il est conseillé pour les UX designers de <b> convertir </b> la devise suivant le pays depuis lequel le site est consulté ! <br> Evidemment, les problèmes d’unités ne s’appliquent pas qu’à la monnaie ! On peut également les rencontrer pour la longueur, <br>
les poids, les codes postaux, la taille des vêtements, l’horaire, ou encore les numéros de téléphones, sur lesquels nous reviendrons plus tard!
<br> </p>
<div id="d4">
               <button onclick="voirPlus4()">Voir plus</button>
                <p id="p4" class="hide"><br>
                Vous trouverez ici un <a href="https://www.convert-me.com/fr/" target = "_blank">convertisseur d’unités </a>
 <br>
                <button onclick="voirMoins4()">Fermer</button></p>
                </p>
			</div>

<script>
let p4 = document.getElementById('p4');
let d4 = document.getElementById('d4');

p4.style.display = "none";
function voirPlus4(){
    p4.style.display = "block";
}

function voirMoins4(){
    p4.style.display = "none";
}
</script>
<br>
            </div>
<hr>
            <div class="devise colorChange" id="partie7">
                <h2>Devises et ponctuation</h2>

                <div class="ligne_devise">
                                <img src="img/illu/Stephen Pauvre.png" style="width: 30%; " alt="">
                                <p class="bulle4" >
                On est arrivé aux Etats-Unis <?php echo($user_prenon); ?> !
                Savais-tu que la virgule  dans un nombre ne signifie pas la même chose chez nous ?
                En effet, la virgule en France est un séparateur décimal alors qu’ici,  il s’agit d’un séparateur des milliers !
                Aux Etats-Unis,le séparateur décimal est  un point.

                </p>
                                <img src="img/illu/Stephen Riche.png" style="width: 40%; height:50%" alt="">
                </div>
                <p style="text-align: center; padding-top:4%;  padding-bottom:6%;" class="cestDailleurs">

C’est d’ailleurs pourquoi un UX designer doit faire très attention aux nombres affichés, notamment s’il <br> travaille sur un site d’E-commerce ! Par exemple, sur Amazon, le site s’adapte, en fonction de la langue <br> choisie, la façon d’écrire les nombres !

                </p>

            </div>
<hr>
            <div class="typo colorChange" id="partie8">
                <h2>Les Typographies</h2>

                <p style="margin-top: 5vh;
  font-size: 1vw;
  width: 50vw;
  margin-left: 10vw;
  background-color: #AAB9ED;
    border-radius: 5%;
    text-align:center">
                Nous atterrissons maintenant en Arabie Saoudite. <br>
                <?php echo($user_prenon); ?>, sais- tu qu’ici, nous ne lisons pas de gauche à droite mais de droite à gauche. <br>
Il s’agit d’une difficulté de plus pour les occidentaux qui doivent déjà comprendre l’alphabet arabe. <br> </p>
<img src="img/perso/Violet.png" class="personnageLangue Paul" alt="Paul" >
    <img src="img/typo.jpg" style="width: 50%; padding-left:15%;" alt="">
<p style="text-align: center" class="ainsiSur">

Ainsi, sur un site traduit dans une langue Arabe, il faudra activer l’effet miroir pour s’adapter <br> au sens de lecture de l’utilisateur. De plus, puisque ces caractères sont plus petits, <br> il faudra toujours que l’UX designer augmente leur taille pour qu’ils <br> soient autant visibles que les caractères latins. <br>
</p>
<div id="d7">
               <button onclick="voirPlus7()">Voir plus</button>
                <p id="p7" class="hide"><br>
                Google a quand à lui, créé une  <a href="https://www.developpez.com/actu/105019/Noto-Google-developpe-une-nouvelle-police-qui-prend-en-charge-800-langues-afin-d-eradiquer-les-problemes-d-affichage-de-caracteres/" target = "_blank"> police </a> qui prend en charge 800 langues afin de ne pas avoir de problèmes d’affichage.
 <br>
                <button onclick="voirMoins7()">Fermer</button></p>
                </p>
			</div>

<script>
let p7 = document.getElementById('p7');
let d7 = document.getElementById('d7');

p7.style.display = "none";
function voirPlus7(){
    p7.style.display = "block";
}

function voirMoins7(){
    p7.style.display = "none";
}
</script>
<br>

            </div>
<hr>
            <div class="tel colorChange" id="partie9">
                <h2>Les numéros de téléphones </h2>

                <p class="bulle5" >
                Nous voilà désormais au Canada <?php echo($user_prenon); ?> ! Cependant, il est temps de prendre des nouvelles de nos proches. <br>
                </p>
<img src="img/illu/BD Telephone.png" style="width: 60%; padding-left:15%;"  alt="">
<p style="text-align: center" class="ahNous">
<br>

Ah, nous avons oublié de renseigner l’indicatif correspondant à la France. En effet, un numéro comprend toujours un préfixe, <br>
composé d’un + et de 1 à 3 chiffres. Pour la France, il s’agit du +33. Il faut toujours le renseigner lorsque l’on passe un appel depuis ou vers l’étranger. <br>
<br> </p>
<div id="d6">
               <button onclick="voirPlus6()">Voir plus</button>
                <p id="p6" class="hide"><br>
Cette page renseigne tous les <a href=" https://fr.wikipedia.org/wiki/Liste_des_indicatifs_téléphoniques_internationaux_par_indicatif" target = "_blank"> préfixes téléphoniques </a> à travers le monde
 <br>
                <button onclick="voirMoins6()">Fermer</button></p>
                </p>
			</div>

<script>
let p6 = document.getElementById('p6');
let d6 = document.getElementById('d6');

p6.style.display = "none";
function voirPlus6(){
    p6.style.display = "block";
}

function voirMoins6(){
    p6.style.display = "none";
}
</script>
<br>
            </div>
<hr>
            <div class="conclusion colorChange" id="partie10">
                <h2>Retour de notre voyage</h2>

                <p class="bulle5" >
                Nous voilà de retour en France, notre voyage prend fin ici <?php echo($user_prenon); ?> <br>
                J'espère que tu auras appris beaucoup de choses durant celui-ci et que ton retour à  <?php echo($user_localisation); ?> se passera sans encombre! <br> </p>
                <img src="img/perso/Violet.png" class="personnageLangue Paul" alt="Paul">
                <p><b>Quelques liens utiles pour approfondir vos connaissances</b></p>

                <p>
<a href="https://www.home.neustar/security-intelligence" target = "_blank">LOCALISER UNE IP</a> <br>

<a href="https://www.getelastic.com/directing-international-visitors-to-localized-content" target = "_blank">Adapter les livraisons en fonction de l’ip</a> <br>

De plus amples informations sur l’internationalisation: <br>
     <a href="https://docs.microsoft.com/en-us/globalization/design/internationalization" target = "_blank">1-design/internationalization</a> <br>
    <a href="https://medium.com/@tnishantha/a-localization-cheatsheet-designing-for-international-audiences-b018e2800291" target = "_blank">2-Internationalisation</a> <br>
<a href="https://www.ux-republic.com/concevoir-lexperience-utilisateur-de-cultures-differentes-lutilisateur-multiculturel/" target = "_blank">3-l'utilisateur-multiculturel</a> <br>

                </p><br><br><br>

                <p style="text-align: center" class="conclu">
                Pour conclure, il ne suffit pas de simplement traduire un site si nous voulons l’adapter à l’international.
                Il faut tout d’abord bien se renseigner sur les pays souhaités, et prendre en compte les différences légales et culturelles.
                Pour s’adapter à celles-ci, la solution est de faire plusieurs versions de notre site pour s’adapter à celles-ci.
               Si jamais tu souhaites créer un site pouvant être visualisé à l’international,
               il y a bien d’autres points à prendre en compte que ceux cités au-dessus !
                Pour approfondir tes connaissances visite les sites qu’on te met ci-dessus, ce sont des sources sûres !

                </p>
            </div>
            <div>
            <h2>Statistiques</h2>
            <p  class="stat">
              D'après notre étude, 60,8% des personnes ayant répondu à notre questionnaire ne naviguent pas sur des sites autres que français ou anglais, et ne connaissent alors que très peu les différences sur les sites entre les différents pays.
              Nous avons donc axé notre site sur la découverte des codes dans l'UX design à l'international, en abordant seulement les bases, mais tout en laissant la possibilité à l'utilisateur d'obtenir de plus amples informations sur des sites externes.
            </p>


            </div>
</div>
    </body>
</html>
