<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form action="<?= base_url('auth/process') ?>" class="login-form" method="post">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" required />
        <button type="submit" name="login">login</button>
      </form>
    </div>
  </div>
  <div class="git-link">
    <a href="https://github.com/MarufurRahman">My Github Profile</a>
  </div>
</body>

</html>