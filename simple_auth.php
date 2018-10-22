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
      echo "authentication successful";
      // render the rest of the page
    } else {
      // if user session does not exist, then render login form
      // since we are locking down a page and not using sessions, just show form.
      echo '<h2>Login Failed</h2>';
      include('sign_in_form.php');
      exit();
    }

  } else { // if login form was not submitted, then render the login form
    include('sign_in_form.php');
    exit();
  }







  // // if authentication succeeds, create session and redirect to cart page
  // if ($auth->is_authenticated())
  // {
  //   header('Location: ' . $success_path );
  //   echo '<div>
  //           success
  //         </div>';
  // } else {
  //   echo '<div>
  //           denied
  //         </div>';
  // }
