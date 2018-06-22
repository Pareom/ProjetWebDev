function Switch_Connection(){
    console.log("passage en mode connection");
    $("#titre").html("Connection");
    $("#inputEmail").attr("style", "display:none;");
    $("#inputIdentifiant").attr("placeholder", "Mail ou Identifiant");
    $(".checkbox").attr("style", "display:block;");
    $("#Switch").html("Pas encore de compte?<a href='#' onclick='Switch_Inscription()'>S'inscrire.</a>");
    $(".btn").html("Se connecter");
}
function ProblemeConnection(){
    Switch_Connection();
    $(".alert").attr("style", "display:block;");
}
function Switch_Inscription(){
    console.log("Passage en mode inscription");
    $("#titre").html("Inscription");
    $("#inputEmail").attr("style", "display:block;");
    $("#inputIdentifiant").attr("placeholder", "Identifiant");
    $(".checkbox").attr("style", "display:none;");
    $("#Switch").html("Déjà inscrit?<a href='#' onclick='Switch_Connection()'>Se connecter</a>");
    $(".btn").html("S'inscrire");
}
function ProblemeInscription(){
    Switch_Inscription();
    $(".alert").attr("style", "display:block;");
}
function typeFormMail(mail)
{
    var reg = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    return(reg.test(mail));
}

function verifChamps()
{
    alert("fct");
    var id = document.forms["form"]["inputIdentifiant"];
    var mail = document.forms["form"]["inputEmail"];
    var mdp = document.forms["form"]["inputPassword"];
    if(!id.value)
    {
        id.style.border ="solid red";
        return false;
    } 
    if(!mdp.value)
    {
        mdp.style.border ="solid red";
        return false;
    } 
    if(mail.style.display==='block')
    {
        if(!mail.value || typeFormMail(mail))
        {
            mail.style.border ="solid red";
            return false;
        }
    }  
}