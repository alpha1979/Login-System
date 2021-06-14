<?php

use Foundationphp\Sessions\MysqlSessionHandler;

require_once './db/db_connection.php';
require_once './db/Foundationphp/Sessions/MysqlSessionHandler.php';
$handler = new MysqlSessionHandler($db);
session_set_save_handler($handler);

session_start();

if(isset($_POST['first_name'])){
    if(!empty($_POST['first_name'])){
        $_SESSION['first_name'] = htmlentities($_POST['first_name']);
    }else{
        $_SESSION['first_name'] = 'Atit';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2</title>
</head>

<body>
    <p>Hello
        <?php 
        if(isset($_SESSION['first_name'])){
            echo $_SESSION['first_name'];
        }else{
            echo 'stranger';
        }
?>
    </p>
    <a href="session3.php">Go to Page 3</a>
</body>

</html>