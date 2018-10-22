<div class='container'>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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

      <input type="submit" name='login-submit'>
    </form>
  </div>