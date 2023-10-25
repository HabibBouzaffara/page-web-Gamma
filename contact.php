<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $tel=trim($_POST['tel']);
  $message = trim($_POST["message"]);

  // validate the form data
  if (empty($name) || empty($email) || empty($tel)) {
    die("Please fill in all required fields.");
  }

  $name=$_POST['name'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];
  $message=$_POST['message'];

  $to='Habib.bouzaffara@ieee.org';
  $subject='New form submission from' . $name;
  $message_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  
  if (mail($to, $subject, $message)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>
