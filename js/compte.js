function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}

function changeAgar(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("body_compte");
    jeu.innerHTML="Jouer à Agar.io";
    image.style.backgroundImage = "url('img/agar.png')";
}
function changePaper(){
    var jeu = document.getElementById("choixJeu");
    jeu.innerHTML="Jouer à Paper.io";
}
function changeSlither(){
    var jeu = document.getElementById("choixJeu");
    jeu.innerHTML="Jouer à Slither.io";
}
function changeSplix(){
    var jeu = document.getElementById("choixJeu");
    jeu.innerHTML="Jouer à Splix.io";
}
function changeSuperhex(){
    var jeu = document.getElementById("choixJeu");
    jeu.innerHTML="Jouer à SuperHex.io";
}
function changeOver(){
    var jeu = document.getElementById("choixJeu");
    jeu.innerHTML="Jouer à OverWatch.io";
}