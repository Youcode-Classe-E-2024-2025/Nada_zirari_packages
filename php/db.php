<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];

    $conn = new mysqli('localhost', 'root', '', 'packages');
   
   
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    if ($type === "package") {
        $nom_Package = $_POST['Nom_Package'];
        $desc_Package = $_POST['Desc_Package'];
        $id_Auteur = $_POST['id_auteur']; // Récupération de l'ID de l'auteur
        $stmt = $conn->prepare("INSERT INTO package (nom, description, id_auteur) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nom_Package, $desc_Package, $id_Auteur); // Ajout du paramètre pour l'auteur
    
    
    
    } 
    elseif ($type === "auteur") {
        $nom_Auteur = $_POST['nom_Auteur'];
        $email_Auteur = $_POST['email_Auteur'];
        $stmt = $conn->prepare("INSERT INTO auteur (nom_auteur, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $nom_Auteur, $email_Auteur);
   
   
   
    } 
    elseif ($type === "version") {
        $id_package = $_POST['id_package'];
        $numero_version = $_POST['numero_version'];
        $stmt = $conn->prepare("INSERT INTO version (id_package, numero_version) VALUES (?, ?)");
        $stmt->bind_param("is", $id_package, $numero_version);
    }

   
    if (isset($stmt) && $stmt->execute()) {
        echo "<p class='text-green-500 text-center'>Données ajoutées avec succès !</p>";
   
   
    } else
   {
        echo "<p class='text-red-500 text-center'>Erreur : " . $conn->error . "</p>";
    }
    $stmt->close();
    $conn->close();
}

?>