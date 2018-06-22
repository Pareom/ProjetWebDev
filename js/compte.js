function requestGeneral(oSelect, page) {
	var value = oSelect.options[oSelect.selectedIndex].value;
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) { //Verifier que le serveur a bien effectué l'action
			readData(xhr.responseXML, page);
			document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			document.getElementById("loader").style.display = "inline";
		}
	};
	
	xhr.open("POST", "compte.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("jeu=" + value);
}

function readDataGeneral(oData, page) {
	var nodes   = oData.getElementsByTagName("item");
	var tableau = document.getElementById("TabGeneral");
	var lignes,cases;
	tableau.innerHTML = "";
	for (var i=page ; i<page+10;i++) {
            
                lignes = document.createElement("tr");
                cases = document.createElement("th");
                if(i<nodes.length)
                    cases.innerHTML = nodes[i].getAttribute("id");
                else
                    cases.innerHTML = "-";
                tableau.appendChild(lignes);
                tableau.appendChild(cases);
            
            
	}
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