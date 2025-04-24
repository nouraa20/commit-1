<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Données reçues :</h2>";

    echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
    echo "Prénom : " . htmlspecialchars($_POST['prenom']) . "<br>";
    echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Date de naissance : " . $_POST['DT'] . "<br>";
    echo "Sexe : " . $_POST['sexe'] . "<br>";
    echo "Établissement : " . htmlspecialchars($_POST['etablissement']) . "<br>";
    echo "Filière : " . htmlspecialchars($_POST['filiere']) . "<br>";
    echo "Utilisateur : " . $_POST['eten'] . "<br>";
}
?>
