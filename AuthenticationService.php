<?php

define('CONFIG',require('config.php'));
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

  // check user existence, then match password hash.
  public function is_authenticated()
  {
    if($this->user_exists())
    {
      $key = $this->get_user_key();
      return $this->validate_password($user_key);

    } else {
      return false;
    }

  }

  // looks into users file and checks for existence
  // should reutrn a boolean
  public function user_exists() {
    return (($this->get_user_key()) !== NULL) ? true : false;
  }

  public function login($username, $password) {
    if (file_exists(CONFIG['users_file_path']))
    {
      $fp = fopen(CONFIG['users_file_path'], "r") or die("unable to open file");
      $contents = fread($fp, filesize(CONFIG['users_file_path']));
      $users = json_decode($contents, true)['users'];

      if($users[$username]['password'] == $this->password)
      {
        return true;
      }

      fclose($fp);
    }
  }


  public function get_user_key() {
    if (file_exists(CONFIG['users_file_path']))
    {
      $fp = fopen(CONFIG['users_file_path'], "r") or die("unable to open file");
      $contents = fread($fp, filesize(CONFIG['users_file_path']));
      $users = json_decode($contents, true)['users'];

      foreach($users as $key => $attributes)
      {
        if($attributes['email'] == $this->email)
        {
          return $key;
        }
      }
      fclose($fp);
    }
  }

  public function validate_password($user_key) {
    if (file_exists(CONFIG['users_file_path']))
    {
      $fp = fopen(CONFIG['users_file_path'], "r") or die("unable to open file");
      $contents = fread($fp, filesize(CONFIG['users_file_path']));
      $users = json_decode($contents, true)['users'];

      return ($users[$user_key]['password'] === $this->password) ? true : false;

      fclose($fp);
    }
  }

}
?>