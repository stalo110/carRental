<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

    $stmt = $pdo->prepare("INSERT INTO users (email, password, name) VALUES (:email, :password, :name)");
    $stmt->execute(['email' => $email, 'password' => $password, 'name' => $name]);

    echo "Registration successful!";
}
?>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>