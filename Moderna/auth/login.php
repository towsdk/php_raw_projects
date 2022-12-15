
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="http://localhost/Moderna/admin/css/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="http://localhost/Moderna/admin/css/app.css"
              rel="stylesheet">
        

        <!-- Material Design Icons -->
        <link type="text/css"
              href="http://localhost/Moderna/admin/css/vendor-material-icons.css"
              rel="stylesheet">
       

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="http://localhost/Moderna/admin/css/vendor-fontawesome-free.css"
              rel="stylesheet">

    </head>

    <body class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form card">

        <?php
        session_start();
        require_once '../db.php';
        if(isset($_SESSION['success'])){
           printf('<div class="alert alert-danger">%s</div>', $_SESSION['success']); 
        }
        ?>
            <div class="page-separator">
                <div class="page-separator__text">Welcome</div>
            </div>

            <form action="loginpost.php" method="POST"
                  novalidate>
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2"
                               type="email"
                               required=""
                               class="form-control form-control-prepended"
                               placeholder="Enter your email" name="email">
                        </div>
                        <?php
        if(isset($_SESSION['error']['emailErr'])){
           printf('<div class="alert alert-danger">%s</div>', $_SESSION['error']['emailErr']); 
        }
        ?>
                    </div>
                
                <div class="form-group">
                    <label class="text-label"
                           for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2"
                               type="password"
                               required=""
                               class="form-control form-control-prepended"
                               placeholder="Enter your password" name="password">
                    </div>
                    <?php
        if(isset($_SESSION['error']['passwordErr'])){
           printf('<div class="alert alert-danger">%s</div>', $_SESSION['error']['passwordErr']); 
        }
        ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary"
                            type="submit" name="submit">Login</button>
                            <?php
        if(isset($_SESSION['error']['matchError'])){
           printf('<div class="alert alert-danger">%s</div>', $_SESSION['error']['matchError']); 
        }
        ?>
                </div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                               class="custom-control-input"
                               checked=""
                               id="remember">
                        <label class="custom-control-label"
                               for="remember">Remember me for 30 days</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <a href="">Forgot password?</a> <br>
                    Don't have an account? <a class="text-body text-underline"
                       href="signup.php">Sign up!</a>
                </div>
            </form>
        </div>

    </body>

</html>
<?php
unset($_SESSION['success']);
unset($_SESSION['error']);
?>