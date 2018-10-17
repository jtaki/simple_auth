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
  <div class='container'>
    <form action="simple_auth.php" method="post">
      <div class="form-group">
        <label>Email</label>
        <input
          class="form-control"
          type="text"
          name="email"
        />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          class="form-control"
          type="text"
          name="password"
        />
      </div>

      <input type="submit">
    </form>
  </div>
</body>
</html>