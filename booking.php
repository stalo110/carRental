<?php
include 'includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $car_id = $_POST['car_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Calculate total price
    $stmt = $pdo->prepare("SELECT price_per_day FROM cars WHERE id = :car_id");
    $stmt->execute(['car_id' => $car_id]);
    $car = $stmt->fetch();
    $days = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24);
    $total_price = $car['price_per_day'] * $days;

    // Insert booking
    $stmt = $pdo->prepare("INSERT INTO bookings (user_id, car_id, start_date, end_date, total_price) VALUES (:user_id, :car_id, :start_date, :end_date, :total_price)");
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'car_id' => $car_id,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'total_price' => $total_price
    ]);

    header("Location: payment.php?booking_id=" . $pdo->lastInsertId());
}
?>