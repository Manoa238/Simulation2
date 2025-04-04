<?php
include '../include/config.php';

// Vérification de la connexion à la base de données
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if (isset($_POST['inscription'])) {

    // Récupération et cryptage des données
    $nom = base64_encode($_POST['Nom']);
    $prenom = base64_encode($_POST['Prenom']);
    $mdp = base64_encode($_POST['Mdp']);
    $phone = base64_encode($_POST['Phone']);
    $mail = $_POST['Email'];
    $genre = $_POST['Gender'];
    

    // Préparation de la requête SQL
    $stmt = $conn->prepare("INSERT INTO user (nom, prenom, mdp, phone, mail,genre) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Erreur lors de la préparation de la requête : " . $conn->error);
    }

    // Liaison des paramètres
    $stmt->bind_param('ssssss', $nom, $prenom, $mdp, $phone, $mail,$genre);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "<script>alert('Inscription réussie !');</script>";
        header('Location: ../front_office/inscription.php');
        exit();
    } else {
        echo "Erreur lors de l'insertion : " . $stmt->error;
    }

    // Fermeture du statement
    $stmt->close();
}
?>
