<?php
  require_once('RegistrationService.php');

  if(isset($_POST['register-submit']))
  {
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $pw_conf = $_POST['password-confirmation'];
    $registration = new RegistrationService($email, $pw, $pw_conf);

    if($registration->successful())
    {
      // thank you for sigining up, continue to invoice
      echo "<div class='alert alert-primary'>Thanks for signing up</div>";
      include('layout/registration_success_form.php');
      // do not render form
      die();
      // print_r($_POST);
    }
    else
    {
      $errors = $registration->get_errors();
    }
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>New User Registration</title>
</head>
<body>
  <?php include('layout/registration_form.php'); ?>

  <!-- <pre>
    <? print_r($_POST); ?>
  </pre> -->
</body>
</html>