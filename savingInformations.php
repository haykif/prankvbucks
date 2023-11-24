<?php
// Vérifier si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $lieu = isset($_POST['lieu']) ? $_POST['lieu'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $sexe = isset($_POST['sexe']) ? $_POST['sexe'] : '';

    // Créer un tableau associatif avec les données
    $informations = array(
        'nom' => $nom,
        'prenom' => $prenom,
        'age' => $age,
        'lieu' => $lieu,
        'email' => $email,
        'telephone' => $telephone,
        'sexe' => $sexe
    );

    // Convertir le tableau en chaîne JSON
    $informationsJSON = json_encode($informations);

    // Écrire la chaîne JSON dans un fichier
    file_put_contents('informations.json', $informationsJSON);

    // Répondre au client
    echo 'Informations enregistrées avec succès.';
} else {
    // Si la requête n'est pas de type POST, renvoyer une erreur
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo 'Méthode non autorisée';
}
?>
