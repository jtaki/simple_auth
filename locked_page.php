<?php
  session_start();
  include('simple_auth/simple_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Locked Page</title>
</head>
<body>
  Some hidden stuff

  <pre><?= var_dump($_SESSION) ?></pre>
  <!-- <pre><? print_r($_POST); ?></pre> -->
  <a
    href="simple_auth/actions/logout.php"
    class="btn btn-danger"
  >
    Log out
  </a>
</body>
</html>