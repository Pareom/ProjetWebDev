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

function requestGeneral() {
	var value = document.getElementById("choixJeu").name;//oSelect.options[oSelect.selectedIndex].value;
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
            console.log(xhr.responseType);
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) { //Verifier que le serveur a bien effectué l'action
			readDataGeneral(xhr.responseXML, 1);
			//document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			//document.getElementById("loader").style.display = "inline";
		}
	};
	console.log(value);
	xhr.open("POST", "AJAAX.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("jeu="+value);
}

function readDataGeneral(oData, page) {
        console.log(oData);
	var nodes   = oData.getElementsByTagName("item");
	var tableau = document.getElementById("TabGeneral");
	var lignes,cases;
	tableau.innerHTML = "";
	for (var i=(page-1)*10 ; i<page*10;i++) {
            
                lignes = document.createElement("tr");
                id = document.createElement("th");
                place = document.createElement("th");
                score = document.createElement("th");
                console.log("Longueur "+nodes.length)
                if(i<nodes.length){
                    id.innerHTML = nodes[i].getAttribute("id");
                    place.innerHTML = i+1;
                    score.innerHTML = nodes[i].getAttribute("score");
                }
                else{
                    id.innerHTML = "-";
                    place.innerHTML = i+1;
                    score.innerHTML = "-";
                }
                tableau.appendChild(lignes);
                lignes.appendChild(place);
                lignes.appendChild(id);
                lignes.appendChild(score);
            
            
	}
}


function requestPersonnel(id) {
    if(id!=null){
	var value = document.getElementById("choixJeu").name;//oSelect.options[oSelect.selectedIndex].value;
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
            console.log(xhr.responseType);
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) { //Verifier que le serveur a bien effectué l'action
			readDataPersonnel(xhr.responseXML, 1);
			//document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			//document.getElementById("loader").style.display = "inline";
		}
	};
	console.log(value);
	xhr.open("POST", "AJAAX.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("jeu="+value+"&id="+id);
    }
}

function readDataPersonnel(oData, page) {
        console.log(oData);
	var nodes   = oData.getElementsByTagName("item");
	var tableau = document.getElementById("TabGeneral");
	var lignes,cases;
	tableau.innerHTML = "";
	for (var i=(page-1)*10 ; i<page*10;i++) {
            
                lignes = document.createElement("tr");
                id = document.createElement("th");
                place = document.createElement("th");
                score = document.createElement("th");
                console.log("Longueur "+nodes.length)
                if(i<nodes.length){
                    id.innerHTML = nodes[i].getAttribute("id");
                    place.innerHTML = i+1;
                    score.innerHTML = nodes[i].getAttribute("score");
                }
                else{
                    id.innerHTML = "-";
                    place.innerHTML = i+1;
                    score.innerHTML = "-";
                }
                tableau.appendChild(lignes);
                lignes.appendChild(place);
                lignes.appendChild(id);
                lignes.appendChild(score);
            
            
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
    head.style.backgroundImage = "url('img/agarTete.jpg')";
    $("#choixJeu").attr("name", "agar");
}
function changePaper(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Paper.io";
    image.style.backgroundImage = "url('img/paperFond.png')";
    head.style.backgroundImage = "url('img/paper.png')";
    $("#choixJeu").attr("name", "paper");
}
function changeSlither(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Slither.io";
    image.style.backgroundImage = "url('img/slitherFond.png')";
    head.style.backgroundImage = "url('img/slither.jpg')";
    $("#choixJeu").attr("name", "slither");
}
function changeSplix(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à Splix.io";
    image.style.backgroundImage = "url('img/splixFond.jpg')";
    head.style.backgroundImage = "url('img/splix.jpg')";
    $("#choixJeu").attr("name", "splix");
}
function changeSuperhex(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à SuperHex.io";
    image.style.backgroundImage = "url('img/superFond.png')";
    head.style.backgroundImage = "url('img/superhex.jpg')";
    $("#choixJeu").attr("name", "superhex");
}
function changeOver(){
    hideAccueil();
    setTab();
    var jeu = document.getElementById("choixJeu");
    var image = document.getElementById("scores");
    var head = document.getElementById("head");
    jeu.innerHTML="Jouer à OverWatch.io";
    image.style.backgroundImage = "url('img/overFond.jpg')";
    head.style.backgroundImage = "url('img/over.jpeg')";
    $("#choixJeu").attr("name", "over");
}
function setTab()
{
    $(function(){
        $("#scores").show();
    });
}
function hideTab()
{
    $(function(){
        $("#scores").hide();
    });
}
hideTab();
function hideAccueil()
{
    $(function(){
        $("#accueil").hide();
    });
}
function launchGame()
{
    var name = (document.getElementById("choixJeu")).name;
    if(name==="agar")
    {
        document.location.href="agar.php";
    }
    else if(name==="paper")
    {
        document.location.href="paper.php";
    }
    else if(name==="slither")
    {
        document.location.href="slither.php";
    }
    else if(name==="splix")
    {
        document.location.href="splix.php";
    }
    else if(name==="superhex")
    {
        document.location.href="superhex.php";
    }
    else if(name==="over")
    {
        document.location.href="over.php";
    }
    else
    {
        alert("Veuillez choisir un jeu");
    }
}
function deconnexion()
{
    $_SESSION['id']=""; 
    setcookie('id', '', time() + 1, null, null, false, true);
}
