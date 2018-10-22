<?php
include('AuthenticationService.php');

// correct creds should return a valid auth
$email = 'admin@example.com';
$password = 'asdf1234';
$fpassword = 'bad pw';
$femail = 'invalid@email.com';

$auth =  new AuthenticationService($email, $password);
// assert($auth->is_authenticated());


// valid creds should login valid user
// assert($auth->login($email, $password));


// invalid creds should not login user
// assert($auth->login($femail, $fpassword) == false);

// should be able to get a user's key from username
assert($auth->get_user_key($email) == 0);

// should return true if user exists
assert($auth->user_exists() == true);