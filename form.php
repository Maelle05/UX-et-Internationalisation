<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/form.css">
   	</head>

<h2>Les contraintes legales</h2>
 <img src="img/perso/Violet.png" class="personnageLangue" alt="Paul"style="width:6%; float:right; margin-right:13vw; margin-top:0vh;" >
                        <p class="rempliFormulaire">
                        Avant de partir en voyage, nous allons devoir remplir quelques papiers... <br>
                        <b>Remplis donc ce formulaire.</b>
                        </p>
                        <form class="forml" action="index.php#partie3" method="post">
                            <label for="">Prenom*</label><br><br>
                            <input type="text" class="answer"><br>
                            <label for="">Nom*</label><br><br>
                            <input type="text" class="answer"><br>
                            <label for="">Adresse*</label><br><br>
                            <input type="text" class="answer"><br>
                            <label for="">Mail*</label><br><br>
                            <input type="text" class="answer"><br>
                            <div class="age">
                              <div class="traitAge">
                              </div>
                            <label class="ageMaj"> Age de majorité :</label>
                          <br>  <br>
                            <select name="age" class="agee" style="padding:8px; border:solid 1px black; color:black; border-radius:5px;" >
                                <option value="0">15</option>
                                <option value="1">17</option>
                                <option value="2">18</option>
                                <option value="4">21</option>
                            </select>
                            <input  type="submit" value="Envoyer"  name="Submit" />
                        </form> <br>

             <?php
                if (isset($_POST['age'])){
                    $age = $_POST['age'];
                 }else {
                     $age = "Age de majorité";
                 }


                if( $age == 0 ){
                    echo (" 15 ans est l'age de majorité en :
                    <br> Iran <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-iran2x.png' /> ") ;
                }else if ( $age == 1 ){
                    echo (" 17 ans est l'age de majorité en :
                    <br> Corée du Nord <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-north-korea2x.png' />") ;
                }else if ( $age == 2 ){
                    echo (" 18 ans est l'age de majorité en :
                    <br> Europe sauf Ecosse <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-european-union2x.png' />
                    <br> Etats-Units <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-usa2x.png' />
                    <br> Australie <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-australia2x.png' />
                    <br> Russie <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-russia2x.png' />") ;
                }else if ( $age == 4 ){
                    echo (" 21 ans est l'age de majorité en :
                    <br> Côte d'Ivoire <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-ivory-coast2x.png' />
                    <br> Egypte <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-egypt2x.png' />
                    <br> Madagascar <img src='img/flag_madagascar.png' style='width:2%;'/>
                    <br> Argentine <img src='https://cdn3.iconfinder.com/data/icons/142-mini-country-flags-16x16px/32/flag-argentina2x.png' />") ;
                }else{
                    echo $age ;
                }

            ?>
          </div>
            <br><br><br><br><br><br><br>
            <br>
            <input class="forml2" type="checkbox" name="" id="check">
            <label class="forml2" class="caseCoche" for="">Acceptez vous de resevoir les publicités</label> <br><br>
            <p> <p class="textForm">
            <?php echo($user_prenon); ?>, Le sais-tu ? Contrairement à la France, cocher <b>directement</b> la case d’abonnement de la Newsletter sur un formulaire d’inscription est complètement autorisé aux Etats-Unis ! L’âge de la majorité change également d’un pays à l’autre, les sites internationaux doivent donc s’adapter à cela ! </p>
<br>
<br>

<div id="d3">
               <button onclick="voirPlus3()">Voir plus</button>
                <p id="p3" class="hide">
<a href="https://decriiipt.intuiti.net/prises-de-recul/15-bonnes-pratiques-ux-pour-le-design-de-vos-formulaires-de-contact/" target = "_blank" >Créer un formulaire</a>
<br>
<br>
<a href="https://www.jotform.com/?utm_source=adwords&utm_campaign=1345823882&utm_medium=cpc&adgroup=56786764711&matchtype=p&device=c&utm_term=form%20builder&utm_content=262939137272&extension_id=&gclid=Cj0KCQiAs67yBRC7ARIsAF49CdXCIuSqlXnTMviYOBc9dvuStrTEnG_VRJx7MBdiLh0tnSNfNFO3-DgaAqv3EALw_wcB">Form Builder (permet de créer et internationaliser un formulaire)</a>
 <br>

                <button onclick="voirMoins3()">Fermer</button></p>
                </p>
			</div>

<script>
let p3 = document.getElementById('p3');
let d3 = document.getElementById('d3');

p3.style.display = "none";
function voirPlus3(){
    p3.style.display = "block";
}

function voirMoins3(){
    p3.style.display = "none";
}
</script>