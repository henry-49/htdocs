<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "contactdb";


foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
    // connect to MySQL
 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

 // check connection
if(!$connection){
    die("Database Connection Failed ". mysqli_error($connection));
}

?>
  