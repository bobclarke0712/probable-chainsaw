<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Force Mechanical</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <a href="index.php"><i class="fa fa-home fa-5x"></i> </a>Force Mechanical
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-bars fa-2x"></i>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#newBtn" id="newBtn">New <i class="fa fa-plus"></i></a></li>
                        <li><a href="#users" id="usersBtn">Users</a></li>
                        <?php
                        if ($isAdmin) {
                            echo '<li ><a href = "#ratesBtn" id = "ratesBtn" > Edit Rates </a ></li >';
                            echo '<li ><a href = "#contractsBtn" id = "contractsBtn" > Edit Contracts </a ></li >';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div
            <div class="col-sm-12>">

            </div>
        </div>
    </div>


</head>
<?php
