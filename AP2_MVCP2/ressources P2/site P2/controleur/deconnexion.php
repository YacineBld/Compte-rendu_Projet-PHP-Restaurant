<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
logout(); // Appel de la fonction de déconnexion

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Deconnexion";
include "$racine/vue/entete.html.php";

echo "Vous avez été déconnecté avec succès."; // Affichage du message de confirmation

include "$racine/vue/pied.html.php";
?>