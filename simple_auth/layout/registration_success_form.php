<pre><? print_r($_POST); ?></pre>

<form action="<?= CONFIG['post_registration_path'] ?>" method="post">
  <?php foreach($_POST as $k => $v) {?>
  <?php if(
    $k === "login-submit" ||
    $k === "password-confirmation"
    ) { continue; } ?>

      <input type="hidden" name="<?= $k ?>" value="<?= $v ?>">
  <?php } ?>
  <input type='submit' name='auth-submit'>
</form>
