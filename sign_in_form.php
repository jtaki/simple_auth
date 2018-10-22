<div class='container'>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group">
        <label>Email</label>
        <input
          class="form-control"
          type="text"
          name="email"
          required
        />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input
          class="form-control"
          type="text"
          name="password"
          required
        />
      </div>

      <input type="submit" name='login-submit' value='Sign In'>
    </form>

    <span><a href='registration.php'>or Register Now</a></span>
  </div>