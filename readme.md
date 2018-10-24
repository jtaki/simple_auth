# Create simple authentication for PHP application
Sometimes you simply want to lock up a page for registered users only. The goal here is to create a module with mininal configuration. Simply include simple_auth.php at the top of the desired page and simple auth will prompt the user for email and password. If the credentials are valid, then the rest of the page will load. If not, then the user will get redirected to the registration page. 

## Goals
- Registration
- Session Authentication

## How to use
pop this bad boy right at the top of the page you want to lock down.
`<?php include('simple_auth/simple_auth.php') ?>`

- configuration
  edit config.php to update paths for successful redirects
- make sure users.json is writeable
  `$ chmod -R 777 simple_auth/users.json`

## AuthenticationService
Checks to see if credentials are valid or not
- IF VALID:
  load the rest of the page
- IF INVALID:
  header redirect to registration page
  with error message

## RegistrationService
