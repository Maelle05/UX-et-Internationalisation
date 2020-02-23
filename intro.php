<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/intro.css">
   	</head>
	 <body>

	 <div id="bienvenue_prenom">
		 <div id="prenom">
                <h4>Bienvenue,  <?php echo($user_prenon); ?> !
                <br>
                Tu viens de <?php echo($user_localisation); ?></h4>
							</div>
                <div >
                    <form action="index.php" method="get">
                        <label for="name">Quel est ton nom ?</label>
                        <br>
                        <input type="text" name="user_p">
                        <br>  <br>
                        <label for="name">D'où viens-tu ?</label>
                        <br>
                        <input type="text" name="user_l">
												<br>
                        <input type="submit" class="submit">
                    </form>
                </div> <br>
                <button class="Entrer" onclick="finBienvenue()">Aller voir la suite !</button>

</div>
<div class="contenu_intro">
<div id="presentation">
		Moi c'est Paul, ravi de faire ta connaissance ! J'ai une petite question avant de commencer l'aventure... Sais-tu ce qu'est l'UX ? <br>
		<button class="Choix1" onclick="Oui()" >
		Oui
		</button>
		<button class="Choix2" onclick="Non()">
		Non
		</button>
</div>







<div id='uxOui'>
	Bravo à toi ! Accélérons un peu la cadence avec la seconde question dans ce cas !

</div>
<div id='uxNon'>
L’UX définit l'expérience utilisateur. Ce terme désigne la qualité; le ressenti d’un utilisateur vis-à-vis d’un site
web, ou de n’importe quel dispositif ou service digital. Un UX designer doit penser son site afin que la navigation
sur celui-ci soit simple à assimiler.
</div>

<button id="finChoix" onclick="finUx()"> Entrer </button>



<div id="internationalisation">
	Sais-tu à quoi correspond l’internationalisation ? <br>
	<button class="Choix1" onclick="interOui()" >
	Oui
	</button>
	<button class="Choix2" onclick="interNon()" >
	Non
	</button>
</div>

	<div id='interOui'>
		Même si tu as l’air d’être bien calé sur le sujet, laisse toi guider à travers le monde pour découvrir l’UX et l’internationalisation ! Prêt ?
	</div>
	<div id='interNon'>
		L’internationalisation est l’attention portée à la localisation de déploiement d’un produit, d’une application... Elle permet de s’adapter
		à la langue, aux coutumes locales, aux idées, aux codes de chacun. Partons à la découverte de tous ses aspects ! Prêt ?
	</div>

	<button id="finChoix2" onclick="finInter(); location.href='#partie2';" href="index.php#partie2"> Embarquer </button>


	</div>


<script>

function finBienvenue() {
	document.getElementById('bienvenue_prenom').style.display="none";
	document.getElementById('presentation').style.display="block";
}

function Oui() {
	document.getElementById('presentation').style.display="none";
	 document.getElementById('uxOui').style.display="block";
		document.getElementById('finChoix').style.display= "block";
}

function Non() {
	document.getElementById('presentation').style.display="none";
	 document.getElementById('uxNon').style.display="block";
		document.getElementById('finChoix').style.display= "block";
}

function finUx() {
	document.getElementById('uxOui').style.display="none";
	document.getElementById('uxNon').style.display="none";
	document.getElementById('finChoix').style.display="none";
	document.getElementById('internationalisation').style.display="block";
}

function interOui() {
	 document.getElementById('interOui').style.display= "block";
	 document.getElementById('internationalisation').style.display= "none";
	 document.getElementById('finChoix2').style.display= "block";
}

function interNon() {
	document.getElementById('interNon').style.display= "block";
	document.getElementById('internationalisation').style.display= "none";
	document.getElementById('finChoix2').style.display= "block";
}

function finInter() {
	document.getElementById('interOui').style.display="none";
	document.getElementById('interNon').style.display="none";
	document.getElementById('finChoix').style.display="none";
	document.getElementById('finChoix2').style.display= "none";
	document.getElementById('bienvenue_prenom').style.display= "block";
}
</script>

	</body>
</html>
