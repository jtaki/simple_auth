<?php
  session_start();
  // destroy session
  if(isset($_SESSION['auth']))
  {
    session_destroy();
  }

  // redirect home
  header('Location: ../../index.php');