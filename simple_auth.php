<?php
  require('AuthenticationService.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $success_path = 'index.php';

  $auth = new AuthenticationService($email, $password);

  // if authentication succeeds, create session and redirect to cart page
  if ($auth->is_authenticated())
  {
    header('Location: ' . $success_path );
    echo 'success';
  } else {
    echo 'denied';
  }
