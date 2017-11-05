<?php require_once './php/asab_header.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/asab.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="header">
            <h1 style="text-align: center;background-color:#003366;color:#ffffff;padding:1px 5px 10px; margin-top:0">Activity and Service Accounting and Budget Office</h1> <a href="logout.php" style="float:right; margin-right:10px">(Logout)</a> </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">U-Wide</a></li>
                <li><a data-toggle="tab" href="#menu2">Boca</a></li>
                <li><a data-toggle="tab" href="#menu3">Broward</a></li>
                <li><a data-toggle="tab" href="#menu4">Jupiter</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Welcome,
                    <?php
                        function getUserDetails($user){ 
                            $email = $user; 
                            $result = queryMySQL("select a_id, f_name, l_name, position from approver where email = '$email'"); 
                            if ($result->num_rows > 0) { 
                                // output data of each row 
                                while($row = $result->fetch_assoc()) { 
                                    return array (
                                        "userID" => $row["a_id"],
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
                </h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">Please Select an Action:</div>
                                <div class="panel-body text-center">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createDepartment">Create Department</button>
                                    <!-- Modal -->
                                    <div id="createDepartment" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Enter Details for New Department</h4> </div>
                                                <div class="modal-body">
                                                    <p>Some text in the modal.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#terminateDepartment">Terminate Department</button>
                                    <!-- Modal -->
                                    <div id="terminateDepartment" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Select Department to Terminate</h4> </div>
                                                <div class="modal-body">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example <span class="caret"></span></button>
                                                        <ul class="dropdown-menu" style="left: 50%;
  right: auto;
  text-align: center;
  transform: translate(-50%, 0)">
                                                            <li><a href="#">HTML</a></li>
                                                            <li><a href="#">CSS</a></li>
                                                            <li><a href="#">JavaScript</a></li>
                                                        </ul>
                                                    </div>
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
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>U-Wide: 2017-18 Budget Request</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SmartTag</th>
                                    <th>Department</th>
                                    <th>S&amp;E</th>
                                    <th>OPS</th>
                                    <th>EXP</th>
                                    <th>Overhead</th>
                                    <th>Total Expenses</th>
                                    <th>Percent Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TAG001317</td>
                                    <td>Sport Club Council</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>53000</td>
                                    <td>1484</td>
                                    <td>54484</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001320</td>
                                    <td>SG Boca Raton House Projects</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>8500</td>
                                    <td>238</td>
                                    <td>8738</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001324</td>
                                    <td>SG COSO Admin - Boca</td>
                                    <td>NULL</td>
                                    <td>17940</td>
                                    <td>28831</td>
                                    <td>1310</td>
                                    <td>48081</td>
                                    <td>0.5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Boca Campus: 2017-18 Budget Request</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SmartTag</th>
                                    <th>Department</th>
                                    <th>S/B</th>
                                    <th>OPS</th>
                                    <th>OPS GA</th>
                                    <th>EXP</th>
                                    <th>Overhead</th>
                                    <th>Transfer Outs</th>
                                    <th>Total Expenses</th>
                                    <th>Percent Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TAG000493</td>
                                    <td>Jupiter Burrow Activity Center</td>
                                    <td>64766</td>
                                    <td>55035</td>
                                    <td>NULL</td>
                                    <td>13954</td>
                                    <td>3745</td>
                                    <td>1000</td>
                                    <td>138500</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001294</td>
                                    <td>Jupiter Campus Rec</td>
                                    <td>NULL</td>
                                    <td>44250</td>
                                    <td>10560</td>
                                    <td>131615</td>
                                    <td>5220</td>
                                    <td>1000</td>
                                    <td>192645</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001295</td>
                                    <td>Broward Wellness Center</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>243031</td>
                                    <td>243031</td>
                                    <td>0.5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Broward: 2017-18 Budget Request</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SmartTag</th>
                                    <th>Department</th>
                                    <th>S/B</th>
                                    <th>OPS</th>
                                    <th>OPS GA</th>
                                    <th>EXP</th>
                                    <th>Overhead</th>
                                    <th>Transfer Outs</th>
                                    <th>Total Expenses</th>
                                    <th>Percent Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TAG000493</td>
                                    <td>Jupiter Burrow Activity Center</td>
                                    <td>64766</td>
                                    <td>55035</td>
                                    <td>NULL</td>
                                    <td>13954</td>
                                    <td>3745</td>
                                    <td>1000</td>
                                    <td>138500</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001294</td>
                                    <td>Jupiter Campus Rec</td>
                                    <td>NULL</td>
                                    <td>44250</td>
                                    <td>10560</td>
                                    <td>131615</td>
                                    <td>5220</td>
                                    <td>1000</td>
                                    <td>192645</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001295</td>
                                    <td>Broward Wellness Center</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>243031</td>
                                    <td>243031</td>
                                    <td>0.5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>Jupiter: 2017-18 Budget Request</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SmartTag</th>
                                    <th>Department</th>
                                    <th>S/B</th>
                                    <th>OPS</th>
                                    <th>OPS GA</th>
                                    <th>EXP</th>
                                    <th>Overhead</th>
                                    <th>Transfer Outs</th>
                                    <th>Total Expenses</th>
                                    <th>Percent Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TAG000493</td>
                                    <td>Jupiter Burrow Activity Center</td>
                                    <td>64766</td>
                                    <td>55035</td>
                                    <td>NULL</td>
                                    <td>13954</td>
                                    <td>3745</td>
                                    <td>1000</td>
                                    <td>138500</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001294</td>
                                    <td>Jupiter Campus Rec</td>
                                    <td>NULL</td>
                                    <td>44250</td>
                                    <td>10560</td>
                                    <td>131615</td>
                                    <td>5220</td>
                                    <td>1000</td>
                                    <td>192645</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>TAG001295</td>
                                    <td>Broward Wellness Center</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>NULL</td>
                                    <td>243031</td>
                                    <td>243031</td>
                                    <td>0.5%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>