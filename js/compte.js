function requestGeneral(oSelect) {
	var value = document.getElementByID("choixJeu").name;//oSelect.options[oSelect.selectedIndex].value;
        console.log(name);
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) { //Verifier que le serveur a bien effectué l'action
			readData(xhr.responseXML, 1);
			//document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			//document.getElementById("loader").style.display = "inline";
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
	for (var i=page-1 ; i<page+10;i++) {
            
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
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Agar.io";
    image.style.backgroundImage = "url('img/agar.png')";
    head.style.backgroundImage = "url('img/agarTete.jpg')";;
}
function changePaper(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Paper.io";
    image.style.backgroundImage = "url('img/paperFond.png')";
    head.style.backgroundImage = "url('img/paper.png')";;
}
function changeSlither(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Slither.io";
    image.style.backgroundImage = "url('img/slitherFond.png')";
    head.style.backgroundImage = "url('img/slither.jpg')";;
}
function changeSplix(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Splix.io";
    image.style.backgroundImage = "url('img/splixFond.jpg')";
    head.style.backgroundImage = "url('img/splix.jpg')";;
}
function changeSuperhex(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à SuperHex.io";
    image.style.backgroundImage = "url('img/superFond.png')";
    head.style.backgroundImage = "url('img/superhex.jpg')";;
}
function changeOver(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à OverWatch.io";
    image.style.backgroundImage = "url('img/overFond.jpg')";
    head.style.backgroundImage = "url('img/over.jpeg')";;
}
function setTab()
{
    var scores = document.getElementById("scores");
    $(function(){
        $("#scores").show();
    });
}
function hideTab()
{
    var scores = document.getElementById("scores");
    $(function(){
        $("#scores").hide();
    });
}
hideTab();
function hideAccueil()
{
    var accueil = document.getElementById("accueil");
    $(function(){
        $("#accueil").hide();
    });
}
