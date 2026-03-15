<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Inscription");

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["mailU"]) || !isset($_POST["mdpU"])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
}
else
{
    //A compléter
    // récupérer les données transmises depuis le formulaire
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];
    
    // tenter la connexion
    login($mailU, $mdpU);
    
    // la connexion est réussie si l'utilisateur est connecté
    if (isLoggedOn()) {
        // afficher la confirmation de connexion
        $titre = "Confirmation de connexion";
        include "$racine/vue/entete.html.php";
        // afficher la vue de confirmation
        // ...
        include "$racine/vue/pied.html.php";
    } else {
        // sinon afficher à nouveau le formulaire d'authentification
        $titre = "authentification";
        include "$racine/vue/entete.html.php";
        include "$racine/vue/vueAuthentification.php";
        include "$racine/vue/pied.html.php";
    }
}
?>