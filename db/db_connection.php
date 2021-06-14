<?php 


try{
    $db= new PDO('mysql:host=localhost;dbname=phpsession','sess_admin','secret');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $error = $e->getMessage();

}


// if(isset($db)){
//     echo 'connected';
// }elseif(isset($error)){
//     echo $error;
// }else{
//     echo ' unexpected error';
// }