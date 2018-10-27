<?php
  print_r($_POST);

  // if registratino service returns successful, redirect to invoice
  $email_err = (isset($errors['duplicate_user'])) ? $errors['duplicate_user'] : NULL;
  $pass_err  = (isset($errors['password_nomatch'])) ? $errors['password_nomatch'] : NULL;
?>
<div class='container'>
    <h3>Register New User</h3>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group">
        <label>Email</label>
        <input
          class="form-control <?= ($email_err) ? 'is-invalid' : ''; ?>"
          type="text"
          name="email"
          required
        />
        <div class="invalid-feedback">
          <?= $email_err ?>
        </div>
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

      <div class="form-group">
        <label>Password Confirmation</label>
        <input
          class="form-control <?= ($pass_err) ? 'is-invalid' : ''; ?>"
          type="text"
          name="password-confirmation"
          required
        />
        <div class="invalid-feedback">
          <?= $pass_err ?>
        </div>
      </div>
      <?php foreach($_POST as $k => $v) {?>
      <?php if(
        $k === "password" ||
        $k === "email" ||
        $k === "password-confirmation" ||
        $k === "login-submit"
        ) { continue; } ?>
      <?= $k ?>
        <input type="hidden" name="<?= $k ?>" value="<?= $v ?>">
      <?php } ?>
      <input type="submit" name='register-submit' value='Create Account'>
    </form>

  </div>