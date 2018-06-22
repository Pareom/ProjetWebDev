function request(oSelect) {
	var value = oSelect.options[oSelect.selectedIndex].value;
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) { //Verifier que le serveur a bien effectué l'action
			readData(xhr.responseXML);
			document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			document.getElementById("loader").style.display = "inline";
		}
	};
	
	xhr.open("POST", "XMLHttpRequest_getListData.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("IdEditor=" + value);
}

function readData(oData) {
	var nodes   = oData.getElementsByTagName("item");
	var oSelect = document.getElementById("softwaresSelect");
	var oOption, oInner;
	
	oSelect.innerHTML = "";
	for (var i=0, c=nodes.length; i<c; i++) {
		oOption = document.createElement("option");
		oInner  = document.createTextNode(nodes[i].getAttribute("name"));
		oOption.value = nodes[i].getAttribute("id");
		
		oOption.appendChild(oInner);
		oSelect.appendChild(oOption);
	}
}


function readData(oData) {
	var nodes   = oData.getElementsByTagName("item");
	var oSelect = document.getElementById("softwaresSelect");
	var oOption, oInner;
	
	oSelect.innerHTML = "";
	for (var i=0, c=nodes.length; i<c; i++) {
		oOption = document.createElement("option");
		oInner  = document.createTextNode(nodes[i].getAttribute("name"));
		oOption.value = nodes[i].getAttribute("id");
		
		oOption.appendChild(oInner);
		oSelect.appendChild(oOption);
	}
}


function changeAgar(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Agar.io";
    image.style.backgroundImage = "url('img/agar.png')";
    head.style.backgroundImage = "url('img/agarTete.jpg')";;
}
function changePaper(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Paper.io";
    image.style.backgroundImage = "url('img/paperFond.png')";
    head.style.backgroundImage = "url('img/paper.png')";;
}
function changeSlither(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Slither.io";
    image.style.backgroundImage = "url('img/slitherFond.png')";
    head.style.backgroundImage = "url('img/slither.jpg')";;
}
function changeSplix(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Splix.io";
    image.style.backgroundImage = "url('img/splixFond.jpg')";
    head.style.backgroundImage = "url('img/splix.jpg')";;
}
function changeSuperhex(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à SuperHex.io";
    image.style.backgroundImage = "url('img/superFond.png')";
    head.style.backgroundImage = "url('img/superhex.jpg')";;
}
function changeOver(){
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à OverWatch.io";
    image.style.backgroundImage = "url('img/overFond.jpg')";
    head.style.backgroundImage = "url('img/over.jpeg')";;
}
