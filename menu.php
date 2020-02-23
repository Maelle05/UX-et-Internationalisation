
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/menu.css">
   	</head>
	 <body>
		 <div id="barreMenu">
		 </div>
		 <div class="rondMenu">
	<div class="rondMenu1" onclick="location.href='#partie1';"	>
		<div id='text0' class="textMenu1 ">Introduction</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(1)" onmouseout="menuOff(1)"  onclick="location.href='#partie2';">
		<div id='text1'class="textMenu ">Langues</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(2)" onmouseout="menuOff(2)"  onclick="location.href='#partie3';">
		<div id='text2' class="textMenu ">Législation</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(3)" onmouseout="menuOff(3)" onclick="location.href='#partie4';">
		<div id='text3' class="textMenu ">Couleurs</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(4)" onmouseout="menuOff(4)" onclick="location.href='#partie5';">
		<div id='text4' class="textMenu ">Symboles</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(5)" onmouseout="menuOff(5)" onclick="location.href='#partie6';">
		<div id='text5' class="textMenu ">Convertisseur</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(6)" onmouseout="menuOff(6)" onclick="location.href='#partie7';">
		<div id='text6' class="textMenu ">Séparateur décimal</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(7)" onmouseout="menuOff(7)" onclick="location.href='#partie8';">
		<div id='text7' class="textMenu ">Typographie</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(8)" onmouseout="menuOff(8)" onclick="location.href='#partie9';">
		<div id='text8' class="textMenu ">Numéro de téléphone</div>
	</div>
	<div class="rondMenu1" onmouseover="menuOn(9)" onmouseout="menuOff(9)" onclick="location.href='#partie10';">
		<div id='text9' class="textMenu ">Conclusion</div>
	</div>
</div>


</div>




<script>
var activeMenu = 0;
 function menuOn(number) {
	 document.getElementById('text' + number).style.fontSize= "1vw";
	 document.getElementsByClassName('rondMenu1')[number].style.transform = "scale(1.5)";
	 document.getElementsByClassName('rondMenu1')[number].style.backgroundColor = "#3333CC";
	 document.getElementsByClassName('rondMenu1')[number].style.marginBottom = "8.9vh";
}
function menuOff(number) {
	if (number != activeMenu) {
		document.getElementById('text' + number).style.fontSize= "0vw";
		document.getElementsByClassName('rondMenu1')[number].style.transform = "scale(1)";
		document.getElementsByClassName('rondMenu1')[number].style.backgroundColor = "black";
		document.getElementsByClassName('rondMenu1')[number].style.marginBottom = "0vh";
	}
}

function offset(element) {
	var rect = element.getBoundingClientRect(),
	scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
	scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}

window.addEventListener('scroll', function() {
  var wind = window.pageYOffset;
  var x = document.getElementsByClassName('colorChange');
  for (var i = 0; i <= x.length; i++) {
    var div = x[i];
    var y = offset(div);
    if (wind >= (y.top - 300) && wind <= (y.top + 300)) {
      menuOn(i);
			activeMenu = i;
      if (i != 0) {
        menuOff(i-1);
      }
      menuOff(i + 1);
    }
  }
});


</script>

	</body>
</html>