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
        if(isset($_SESSION['error'])){
            foreach($_SESSION['error'] as $error){  
                ?>
                <div class="alert alert-danger"><?=$error?></div>
                <?php
            }
        }
        unset($_SESSION['error']);
        ?>
       
            <div class="page-separator">
                <div class="page-separator__text">Welcome</div>
            </div>

            <form action="signuppost.php" method="POST" enctype="multipart/form-data"
                  novalidate>
                <div class="form-group">
                    <label class="text-label"
                           for="name_2">Name:</label>
                    <div class="input-group input-group-merge">
                        <input id="name_2"
                               type="text"
                               required=""
                               class="form-control form-control-prepended"
                               placeholder="Enter your name" name="name">
                       
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2"
                               type="email"
                               required=""
                               class="form-control form-control-prepended"
                               placeholder="Enter your Email" name="email">
                    </div>
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
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="description">Description</label>
                    <div class="input-group input-group-merge">
                        <input id="description"
                               type="text"
                               class="form-control form-control-prepended"
                               placeholder="Enter your description" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="photo">Photo</label>
                    <div class="input-group input-group-merge">
                        <input id="photo"
                               type="file"
                               class="form-control form-control-prepended"
                               placeholder="Enter your password" name="photo">
                    </div>
                </div>
                
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2"
                            type="submit" name="submit">Create Account</button><br>
                    <a class="text-body text-underline"
                       href="login.php">Have an account? Login</a>
                </div>
            </form>
        </div>
    </body>

</html>