<?php
include 'includes/db.php';

$stmt = $pdo->query("SELECT * FROM cars");
$cars = $stmt->fetchAll();
?>

<div class="container">
    <?php foreach ($cars as $car): ?>
    <div class="car">
        <h3><?php echo htmlspecialchars($car['name']); ?></h3>
        <p><?php echo htmlspecialchars($car['description']); ?></p>
        <p>Price: $<?php echo $car['price_per_day']; ?> per day</p>
        <a href="booking.php?car_id=<?php echo $car['id']; ?>">Book Now</a>
    </div>
    <?php endforeach; ?>
</div>