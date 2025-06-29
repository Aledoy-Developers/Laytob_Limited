<?php

session_start();  

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login_style.css">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="content-body">
        <div class="content-header">
          <p class="big-font">Login</p>
        </div>
        <div class="content-inner">
        <div class="form">
          <form action='proc-login.php' method='post'>
            <?php if ($username_err == 'yes') { ?>
                <div class="alert alert-danger">Username Required</div>
            <?php }?>
            <?php if ($password_err == 'yes') { ?>
                <div class="alert alert-danger">Password required</div>
            <?php }?>
            <?php if ($passwordlength_err == 'yes') { ?>
                <div class="alert alert-danger">Password must be more than 8</div>
            <?php }?>
            <?php if ($error == 'yes') { ?>
                <div class='alert alert-danger'>Login failed... invalid credentials</div>
           <?php } ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value='<?php echo $username?>'>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value='<?php echo $password?>'>

            <input type="submit" value="Login">
          </form>
        </div>

        </div>
      </div>
    </div>
  </body>
</html>

