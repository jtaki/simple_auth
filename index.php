<? session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Simple Auth</title>
</head>
<body>
  <div class="container">
    <form action="locked_page.php" method="post">
      <input type="hidden" name="some info key" value="hidden info value">
      <input type="submit" value="submit">
    </form>
   Form leading to locked down page
  </div>
  <?= print_r($_SESSION) ?>
</body>
</html>