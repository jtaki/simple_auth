<?php
define('CONFIG',require('config.php'));

class RegistrationService {
  private $email;
  private $password;
  private $password_confirmation;
  private $errors = Array();

  public function __construct($email, $password, $password_confirmation)
  {
    $this->email = $email;
    $this->password = $password;
    $this->password_confirmation = $password_confirmation;
    $this->errors = $this->registration_validation();
  }

  public function registration_validation()
  {
    $errors = [];
    if($this->duplicate_user())
    { $errors['duplicate_user'] = 'email already registered'; }
    if(!$this->passwords_match())
    { $errors['password_nomatch'] = 'passwords do not match'; }

    return $errors;
  }

  public function successful()
  {
    if(empty($this->errors) && $this->passwords_match())
    {
      // $this->register_user();
      return true;
    } else {
      return false;
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

  public function get_errors()
  {
    return $this->errors;
  }

  public function register_user() {
    $user_file = 'users.json';
    $user = [
      'email' => $this->email,
      'password' => $this->password
    ];
    echo file_exists($user_file) ? 'yes' : 'no';

    if (file_exists($user_file))
    {
      $contents = file_get_contents($user_file);
      $data = json_decode($contents, true);
      array_push($data['users'], $user);
      $json = json_encode($data);
      file_put_contents($user_file, $json);
    }
  }
}