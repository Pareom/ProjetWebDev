function Switch_Connection(){
    console.log("passage en mode connection");
    $("#titre").html("Connection");
    $("#inputEmail").attr("style", "display:none;");
    $("#inputIdentifiant").attr("placeholder", "EMail ou Identifiant");
    $(".checkbox").attr("style", "display:block;");
    $("#Switch").html("Pas encore de compte?<a href='#' onclick='Switch_Inscription()'>S'inscrire.</a>");
    $(".btn").html("Connection");
}

function Switch_Inscription(){
    console.log("Passage en mode inscription");
    $("#titre").html("Inscription");
    $("#inputEmail").attr("style", "display:block;");
    $("#inputIdentifiant").attr("placeholder", "Identifiant");
    $(".checkbox").attr("style", "display:none;");
    $("#Switch").html("Déjà inscrit?<a href='#' onclick='Switch_Connection()'>Se connecter</a>");
    $(".btn").html("Inscription");
}
