<?php
// checks to see if provided username exists, then checks for matching password hash
class AuthenticationService
{ // refer to provided email & provided password
  private $email;
  private $password;

  public function __construct($email, $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function is_authenticated()
  {
    if($this->user_exists())
    {
      echo 'authentication successful';
    } else {
      echo 'authentication failed';
    }

  }

  // looks into users file and checks for existence
  private function user_exists() {
    $file = 'users.json';

    if (file_exists($file))
    {
      $fp = fopen($file, "r") or die("unable to open file");
      $contents = fread($fp, filesize($file));
      $users = json_decode($contents, true)['users'];

      foreach($users as $user)
      {
        if($user['email'] == $this->email)
        {
          return true;
        }
      }
      fclose($fp);
    }
  }
}

?>