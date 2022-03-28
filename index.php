<?php

use Controllers\UsersController;
use Models\Users;
use Views\UsersView;

include 'includes/class-autoloader.inc.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> 
     
</head>
<body>
    <div class="container">
        <center>
            <div class="row w-100 my-5">
                <div class="col">
                    <h1>OOP</h1>
                    <button type="button" data-toggle="modal" data-target="#addUser" class="btn btn-primary">Add User</button>
                </div>
            </div>
            <di class="row">
                <div class="col">
                        <?php
                            $users = new UsersView();
                            $users->showAllUsers();                            
                        ?>
                </div>
            </div>
        </center>
    </div>    


<script src="assets/js/jquery-3.3.1.min.js"></script>    
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script  src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTable-script.js"></script>
<script src="assets/php/custom-php-scripts.php"></script>

    </body>
</html>
