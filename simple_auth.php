<?php
  require('AuthenticationService.php');
  // authentication service will check to see if user session exists

 // if login form submitted
 // pull vars
  if(isset($_POST['login-submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

      // Make call to authentication service
    $auth = new AuthenticationService($email, $password);

    if($auth->is_authenticated())
    {
      echo "<div class='alert alert-primary'>Authentication successful</div>";
      // render the rest of the page
    } else {

      // if user session does not exist, then render login form
      // since we are locking down a page and not using sessions, just show form.
      echo "<div class='alert alert-danger'>Authentication failed</div>";
      include('sign_in_form.php');
      exit();
    }

  } else { // if login form was not submitted, then render the login form
    include('sign_in_form.php');
    exit();
  }