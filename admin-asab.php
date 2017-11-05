<?php require_once './php/db_connect.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <h1 style="text-align: center;background-color:#003366;color:#ffffff;padding:1px 5px 10px; margin-top:0">Activity and Service Accounting and Budget Office</h1>
        <div class="container">
            <div class="row">
                <div class="well col-sm-6 col-md-4 col-md-offset-4">
                    <h4 class="text-center">Sign in to continue</h4>
                    <form method="post" autocomplete="on">
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user" class="form-control" placeholder="Username" required autofocus> </div>
                        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required> </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button> <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                        <?php 
                            if (isset($_POST['user'])){
                                $salt1 = "M^n*g";
                                $salt2 = "A%M&p";
                                $user = sanitizeString($_POST['user']);
                                $pass = sanitizeString($_POST['pass']);
                                $token = hash('ripemd128', "$salt1$pass$salt2");
                                if ($user == "" || $pass == ""){
                                    $message = "Please enter username/password.";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                }
                                else {
                                    $result = queryMySQL("SELECT email,secret FROM approver WHERE email='$user' AND secret='$token'");
                                }
                                if ($result->num_rows == 0){
                                    $message = "Incorrect username/password.";
                                    echo "<script type='text/javascript'>alert('$message');</script>";
                                }
                                else {
                                    session_start();
                                    $_SESSION['user'] = $user;
                                    $_SESSION['pass'] = $token;
                                    die("<br><br>Welcome, $user you are now logged in. Please <a href='asab-management.php'>" . "click here</a> to continue.<br><br>");
                                }
                            }
                            ?>
                    </form>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Request Login</button>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Request Login</h4> </div>
                                <div class="modal-body">
                                    <form method="post" autocomplete="on">
                                        <div class="form-group">
                                            <label for="f_name">First Name:</label>
                                            <input type="text" class="form-control" name="first" required> </div>
                                        <div class="form-group">
                                            <label for="l_name">Last Name:</label>
                                            <input type="text" class="form-control" name="last" required> </div>
                                        <div class="form-group">
                                            <label for="user">Email:</label>
                                            <input type="email" class="form-control" name="user" required> </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>