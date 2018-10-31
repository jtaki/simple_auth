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


# TODO
1. need to hash password for save into DB.
2. password gets passed to post vars in locked down page.
  1. is this even a problem?
3. Add personalization ability to registration / reg success
  1. get username and pass through post vars
  2. add firstname to registration
4. On failed auth then registration, submit post is not getting filtered out
  - [x] if form-submit, filter out.
  2. rename all submits to form-submit
- [x] Doesn't sound like registration is actually writing to json
- [ ] Email format validation
- [ ] change password to password field
- [ ] if user refreshes at registration success page, they should somehow go to login vs back to registration?
