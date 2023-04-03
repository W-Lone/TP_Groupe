<?php
// paramètres de connexion à la base de données
$host = '127.0.0.1';
$dbname = 'tp-romero';
$user = 'root';
$password = '';

// création d'une nouvelle connexion PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // définition des options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // afficher les erreurs sous forme d'exceptions
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // récupérer les résultats sous forme de tableau associatif
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // désactiver la préparation émulée des requêtes

    // code à exécuter avec la connexion $pdo ici

} catch (PDOException $e) {
    // afficher une erreur en cas de problème de connexion
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}
?>