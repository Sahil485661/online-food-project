<?php
session_start();
require_once 'db_connect.php'; // Make sure this file connects to your database

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user info from database
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email, phone, f_name, l_name, address FROM users WHERE u_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($username, $email, $phone, $f_name, $l_name, $address);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        .profile-container {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background:rgb(8, 234, 144);
        }
        .profile-container h2 {
            text-align: center;
        }
        .profile-info {
            margin: 15px 0;
        }
        .profile-info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-info">
            <label>User Name:</label> <?php echo htmlspecialchars($username); ?>
        </div>
        <div class="profile-info">
            <label>Full Name:</label> <?php echo htmlspecialchars($f_name . ' ' . $l_name); ?>
        </div>
        <div class="profile-info">
            <label>Email ID:</label> <?php echo htmlspecialchars($email); ?>
        </div>
        <div class="profile-info">
            <label>Phone Number:</label> <?php echo htmlspecialchars($phone); ?>
        </div>
        <div class="profile-info">
            <label>First Name:</label> <?php echo htmlspecialchars($f_name); ?>
        </div>
        <div class="profile-info">
            <label>Last Name:</label> <?php echo htmlspecialchars($l_name); ?>
            </div>
        <div class="profile-info">
            <label>Address:</label> <?php echo htmlspecialchars($address); ?>
        </div>
    </div>
</body>
</html>