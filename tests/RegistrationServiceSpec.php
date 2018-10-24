<?php
include('simple_auth/RegistrationService.php');

$e = 'admin3@example.com';
$p = 'asdf1234';
$pc = 'asdf1234';

$reg = new RegistrationService($e, $p, $pc);

// passwords should match
$test = $reg->passwords_match();
assert($test);

// user should not already exist
$test = $reg->duplicate_user();
assert(!$test);

// assuming last 2 tests true, reg should be successful
$test = $reg->successful();
assert($test);

// write new user to fule
$reg->register_user();