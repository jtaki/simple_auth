<?php
  // if registratino service returns successful, redirect to invoice

?>
<div class='container'>
    <h3>Register New User</h3>
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

      <div class="form-group">
        <label>Password Confirmation</label>
        <input
          class="form-control"
          type="text"
          name="password-confirmation"
          required
        />
      </div>

      <input type="submit" name='register-submit' value='Create Account'>
    </form>

  </div>