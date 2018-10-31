<?php

return array(
  'auth_success_path' => '../locked_page.php',
  'auth_failure_path' => '../index.php',
  'registration_path' => 'simple_auth/registration.php',
  'post_registration_path' => '../locked_page.php',

  'users_file_path' => 'simple_auth/users.json',
  
  'min_pass_length' => 8,
  'max_pass_length' => 10
);