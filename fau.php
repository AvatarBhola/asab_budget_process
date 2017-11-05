<?php require_once './php/manager_header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/manager.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/manager.js"></script>
    </head>

    <body>
        <div class="header">
            <h1 style="text-align: center;background-color:#003366;color:#ffffff;padding:1px 5px 10px; margin-top:0">Activity and Service Accounting and Budget Office</h1> <a href="logout.php" style="float:right; margin-right:10px">(Logout)</a> </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Operating Fund Summary</a></li>
                <li><a data-toggle="tab" href="#menu2">Salary &amp; Benefits</a></li>
                <li><a data-toggle="tab" href="#menu3">OPS</a></li>
                <li><a data-toggle="tab" href="#menu4">OPS GA</a></li>
                <li><a data-toggle="tab" href="#menu5">Expenses</a></li>
                <li><a data-toggle="tab" href="#menu6">Supplemental Form - Operating</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Welcome, 
                    <?php 
                        function getUserDetails($user){ 
                            $email = $user; 
                            $result = queryMySQL("select m_id, f_name, l_name, position from manager where email = '$email'"); 
                            if ($result->num_rows > 0) { 
                                // output data of each row 
                                while($row = $result->fetch_assoc()) { 
                                    return array (
                                        "userID" => $row["m_id"],
                                        "f_name" => $row["f_name"],
                                        "l_name" => $row["l_name"],
                                        "position" => $row["position"]
                                    );
                                } 
                            } 
                            else { 
                                echo "Error in retrieving details"; 
                            } 
                        }
                    $user = $_SESSION['user'];
                    echo ' ' . getUserDetails($user)['f_name'] . ' ' . getUserDetails($user)['l_name'];
                    ?>
                    </h3> </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email"> </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd"> </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div id="menu6" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </body>

    </html>