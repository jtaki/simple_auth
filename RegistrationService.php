<?php
define('CONFIG',require('config.php'));

class RegistrationService {
  private $email;
  private $password;
  private $password_confirmation;
  private $errors = [];

  public function __construct($email, $password, $password_confirmation)
  {
    $this->email = $email;
    $this->password = $password;
    $this->password_confirmation = $password_confirmation;
  }

  public function successful()
  {
    if(!$this->duplicate_user())
    {
      if($this->passwords_match())
      {
        return true;
      }
      else
      {
        $errors[] = 'passwords do not match';
      }
    }
    else
    {
      $erorrs[] = 'email already exists';
    }

  }

  public function duplicate_user()
  {
    if (file_exists(CONFIG['users_file_path']))
    {
      $fp = fopen(CONFIG['users_file_path'], "r") or die("unable to open file");
      $contents = fread($fp, filesize(CONFIG['users_file_path']));
      $users = json_decode($contents, true)['users'];

      foreach($users as $key => $attributes)
      {
        if($attributes['email'] == $this->email)
        {
          return true;
        }
      }

      fclose($fp);
    }
  }

  public function passwords_match()
  {
    return ($this->password === $this->password_confirmation)
    ? true
    : false;
  }
}