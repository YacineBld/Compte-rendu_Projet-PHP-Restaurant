<?php
include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = controleurPrincipal($action);

//Ajout de cette ligne pour afficher la valeur de $fichier
echo "Contenu de \$fichier : $fichier";

include "$racine/controleur/$fichier";

?>
     