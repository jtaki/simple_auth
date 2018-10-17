<?php
  require('AuthenticationService.php');

  $email = $_POST['email'];
  $password = $_POST['password'];

  $auth = new AuthenticationService($email, $password);

  // if authentication succeeds, create session and redirect to cart page
  if ($auth->is_authenticated())
  {

  } else {

  }
  // if auth fails, render error message
