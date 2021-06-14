<?php
use Foundationphp\Sessions\MysqlSessionHandler;
require_once './db/db_connection.php';
require_once './db/Foundationphp/Sessions/MysqlSessionHandler.php';
$handler = new MysqlSessionHandler($db);
session_set_save_handler($handler);
    session_start();

    if(isset($_POST['logout'])){
        $_SESSION =[];
        $params = session_get_cookie_params();
        setcookie(session_name(),'',time()-86400, $params['path'],
        $params['domain'],$params['secure'], $params['httponly']);
        session_destroy();
        header('Location: session1.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hello
    <?php
        if(isset($_SESSION['first_name'])){
            echo 'again '. $_SESSION['first_name'];
        }else{
            echo "stranger";
        }
    ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="submit" name="logout" value="LOG OUT">
    </form>

</body>

</html>