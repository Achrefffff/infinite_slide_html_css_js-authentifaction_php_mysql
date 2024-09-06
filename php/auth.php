<?php
session_start();
require_once 'connect.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

// Capture  sortie indésirable
ob_start();
header('Content-Type: application/json');

try {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Email ou mot de passe incorrect.']);
        }
        exit();
    }

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        
        $checkStmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ? OR username = ?");
        $checkStmt->execute([$email, $username]);
        $existingUser = $checkStmt->fetch();

        if ($existingUser) {
            echo json_encode(['success' => false, 'message' => 'Cet email ou nom d\'utilisateur existe déjà.']);
        } else {
            // Insertion dans la base de données
            $stmt = $pdo->prepare("INSERT INTO utilisateurs (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $password]);
            echo json_encode(['success' => true]);
        }
        exit();
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Erreur lors du traitement. Détails : ' . $e->getMessage()]);
    exit();
}

ob_end_clean();
?>
