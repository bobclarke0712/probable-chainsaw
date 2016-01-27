<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HVAC Tracker</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>


    <?php
    include_once "db.php";
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username = $_SESSION['username'];
    //    **  TODO Change to dynamic username
    $username = "bclarke";
    $devID = $isManager = $isAdmin = "";
    $sql = "SELECT *  FROM tblUsers
INNER JOIN tblCompanies
ON tblUsers.tblUsersCompanyID=tblCompanies.idtblCompanies
where tblUsers.tblUsersUsername ='$username'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {

        $firstName = $row['tblUsersFirstName'];
        $isAdmin = $row['tblUsersIsAdmin'];
        $company = $row['tblCompaniesName'];
    }

    ?>
        <div class="row"><div class="text-center">
            <div class="col-sm-4">
                <div align="left" class="dropdown">&nbsp
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-list-ul fa-2x"></i>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header"><?php echo $company; ?></li>
                        <li><a href="#newBtn" id="newBtn"> <i class="fa fa-plus fa-2x"> New</i></a></li>
                        <li><a href="index.php" id="newBtn"> <i class="fa fa-users fa-2x"> Customers</i></a></li>
                        <li><a href="reports.php" id="newBtn"> <i class="fa fa-bar-chart fa-2x"> Reports</i></a></li>
                        <li><a href="#logout" id="logoutBtn"> <i class="fa  fa-sign-out fa-2x"> Logout</i></a></li>
                        <?php
                        if ($isAdmin) {
                            echo '<li class="divider"></li >';
                            echo '<li class="dropdown-header">Admin Functions</li >';
                            echo '<li ><a href = "companies.php" id = "adminBtn" ><i class="fa fa-university fa-2x"> Companies</i> </a ></li >';
                            echo '<li ><a href = "customers.php" id = "adminBtn" ><i class="fa fa-leaf fa-2x"> Customers</i> </a ></li >';

                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div align="center" class="col-sm-4"><a href="index.php"><i class="fa fa-home fa-3x"> HVAC Tracker</i></a></div>


            <div align="right" class="col-sm-4">Welcome <b><?php echo $firstName . "&nbsp"; ?></div>
                </div>
            </div>
           <br><br>




        </head>

