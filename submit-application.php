<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $position = htmlspecialchars($_POST['position']);
    $message  = htmlspecialchars($_POST['message']);

    // File upload
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES["resume"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = ['pdf', 'doc', 'docx'];
    if (!in_array($fileType, $allowedTypes)) {
        echo "Invalid file type. Only PDF, DOC, DOCX allowed.";
        exit;
    }

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)) {
        // Email setup
        $to = "digrowworld@gmail.com";  // CHANGE THIS TO YOUR EMAIL
        $subject = "New Job Application - $position";

        $emailMessage = "
        A new job application has been submitted.

        Name: $name
        Email: $email
        Phone: $phone
        Position: $position
        Message: $message

        Resume: $targetFilePath
        ";

        $headers = "From: no-reply@digrowworld.com"; // Use your domain for best results

        if (mail($to, $subject, $emailMessage, $headers)) {
            echo "Thank you, $name. Your application for '$position' has been submitted successfully!";
        } else {
            echo "Error sending email. Please try again.";
        }
    } else {
        echo "There was an error uploading your resume.";
    }
}
?>
