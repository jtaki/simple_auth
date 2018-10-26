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
      <!-- hidden input to carry post vars from index -->
      <?php foreach($_POST as $k => $v) {?>
      <?php if($k === "password" || $k === "email") { continue; } ?>
      <?= $k ?>
        <input type="hidden" name="<?= $k ?>" value="<?= $v ?>">
      <?php } ?>

      <input type="submit" name='login-submit' value='Sign In'>
    </form>

    <span><a href='simple_auth/registration.php'>or Register Now</a></span>
  </div>