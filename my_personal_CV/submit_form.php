<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = isset($_POST['hobbies']) ? htmlspecialchars($_POST['hobbies']) : 'No hobbies selected';
    $education = htmlspecialchars($_POST['education']);
    $comments = htmlspecialchars($_POST['comments']);

    // Email details
    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Questionnaire Submission";
    $message = "
    Name: $name\n
    Age: $age\n
    Gender: $gender\n
    Hobbies: $hobbies\n
    Education: $education\n
    Comments: $comments
    ";
    $headers = "From: no-reply@example.com";  // Replace with a valid sender email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your questionnaire has been submitted successfully.";
    } else {
        echo "Sorry, there was an issue sending your questionnaire. Please try again.";
    }
}
?>
