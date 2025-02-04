<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['userId'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['userId'];
    $activity = $_POST['activity'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $distance = $_POST['distance'];
    $calories = $_POST['calories'];
    $intensity = $_POST['intensity'];
    $heartRate = $_POST['heartRate'];
    $location = $_POST['location'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO workouts (userId, activity, date, duration, distance, calories, intensity, heartRate, location, notes) 
            VALUES (:userId, :activity, :date, :duration, :distance, :calories, :intensity, :heartRate, :location, :notes)";
    
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([
        ':userId' => $userId,
        ':activity' => $activity,
        ':date' => $date,
        ':duration' => $duration,
        ':distance' => $distance,
        ':calories' => $calories,
        ':intensity' => $intensity,
        ':heartRate' => $heartRate,
        ':location' => $location,
        ':notes' => $notes
    ]);

    if ($result) {
        header("Location: dashboard.php?success=1");
        exit();
    } else {
        echo "Error logging workout.";
    }
}
?>
