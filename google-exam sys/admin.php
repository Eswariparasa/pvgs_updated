<?php
ini_set('display_errors', 1);  // Enable error reporting
error_reporting(E_ALL);         // Report all errors

include 'db.php';  // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entered_passcode = $_POST['passcode']; // Get the entered passcode

    // Query the database for the stored passcode (Assuming table 'passcodes' exists)
    $stmt = $conn->prepare("SELECT passcode FROM passcodes WHERE id = 1"); // Adjust query if needed
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_passcode);
        $stmt->fetch();

        // Compare the entered passcode with the stored passcode
        if ($entered_passcode == $stored_passcode) {
            // Redirect to the sample page if the passcodes match
            header("Location: adminmodify.html");
            exit();
        } else {
            echo "Invalid passcode.";
        }
    } else {
        echo "Passcode not found in the database.";
    }

    $stmt->close();
}
?>
