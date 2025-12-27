<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        // ✅ Redirect back to form with success flag
        header("Location: index.html?success=1");
        exit;
    } else {
        echo "❌ Error: " ._toggle;
    }
}
?>
