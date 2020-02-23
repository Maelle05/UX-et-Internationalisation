<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/langue.css">
   	</head>
	 <body>
		 <img src="img/perso/Violet.png" class="personnageLangue Paul" alt="Paul"style="width:6%; float:right; margin-right:13vw; margin-top:0vh;" >
	<div id="langueIntro" style="text-align: center;">
J'espère que la barrière linguistique ne va pas nous poser trop de soucis durant notre voyage !
D’ailleurs, tu as surement déjà navigué sur des sites étrangers et donc éprouvé des difficultés particulières.
</div>


<div id="choixReponse1">
Il est fortement <b>déconseillé</b> d’utiliser google traduction sur des sites, car ils peuvent en perdre leur signification ! Les mots entre les pays peuvent facilement diverger, et une erreur est très vite arrivée ! Certains mots <b>n’ont pas la même signification</b> aux Etats-Unis et au Royaume-Uni par exemple, et Google Traduction peut avoir du mal à faire la différence.
</div>
<div id="choixReponse2" style="text-align: center;">
	Cela doit être la base du site. L’anglais est <b>la langue mondiale</b> et est comprise par un maximum de personnes. Au fur et à mesure du temps, tu pourras réfléchir à l’opportunité de traduire l’anglais en différentes langues, mais attention à le faire correctement !

</div>
<div id="choixReponse3" style="text-align: center;">
	Si tu as le budget pour cela, c’est la meilleure option. Le strict minimum est d’avoir un site en anglais. Mais, attention : il vaut mieux un site qui n’est pas traduit plutôt qu’un site qui est mal traduit. A moins que tu sois polyglotte, ne le traduis pas toi même ! Il faut également veiller à ce que l’architecture du site reste similaire d’une langue à une autre.

</div>

<br> <br>
<div id="siToi">
<b> Si toi, tu devais faire un site qui s'étendait à l’internationale, tu t’y prendrais comment ? <br> (Sélectionne une réponse en cliquant dessus) </b>
</div> <br>

<div class="Reponse" >
<button id="Reponse1" onclick="Reponse1()">1. Je rédigerais le site dans une langue qui m’est familière pour ne pas faire de fautes, et j’autoriserais l’extension google traduction.</button>  <br> <br> <br>
<button id="Reponse2" onclick="Reponse2()">2. Je rédigerais le site en anglais pour que tout le monde puisse y avoir accès.
</button>
<br>
<br>

<button id="Reponse3" onclick="Reponse3()">3. Je rédigerais le site dans une langue qui m’est familière et embaucherais un professionnel pour la traduction.
</button> <br> <br> <br>
</div>
<div id="d2">
               <button onclick="voirPlus2()"> Voir plus</button>
                <p id="p2" class="hide"><a href="https://fr.wiktionary.org/wiki/Cat%C3%A9gorie:Homographes_non_homophones_en_anglais">Mots qui peuvent poser problème avec google traduction</a> <br><br>
<a href="https://openclassrooms.com/fr/courses/1871271-developpez-votre-site-web-avec-le-framework-django/1874201-linternationalisation">Mettre plusieurs langues sur un site</a> <br>
<br>

<a href="https://uxdesign.cc/how-not-to-design-language-selection-a-ux-study-1631ab3911f7">Ce qu’il ne faut pas faire et quelques conseils</a>
 <br>

                <button onclick="voirMoins2()">Fermer</button></p>
			</div>

<script>
let p2 = document.getElementById('p2');
let d2 = document.getElementById('d2');

p2.style.display = "none";
function voirPlus2(){
    p2.style.display = "block";
}

function voirMoins2(){
    p2.style.display = "none";
}
</script>

<script>
function Reponse1 () {
		document.getElementById('langueIntro').style.display="none";
		document.getElementById('choixReponse3').style.display="none";
		document.getElementById('choixReponse2').style.display="none";
		document.getElementById('choixReponse1').style.display="block";
}

function Reponse2 () {
		document.getElementById('langueIntro').style.display="none";
		document.getElementById('choixReponse3').style.display="none";
		document.getElementById('choixReponse2').style.display="block";
		document.getElementById('choixReponse1').style.display="none";
}

function Reponse3 () {
		document.getElementById('langueIntro').style.display="none";
		document.getElementById('choixReponse3').style.display="block";
		document.getElementById('choixReponse2').style.display="none";
		document.getElementById('choixReponse1').style.display="none";
}


</script>



	</body>
</html>
