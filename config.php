<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'magento242');
// define('DB_NAME', 'login');

// //try connecting to databae
// $conn = mysqli_connect('DB_SERVER', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME');

// //check connection
// if($conn == false){
//     die("connection to this database failed due to ".mysqli_connect_error());
// }

    
        $server = "localhost";
        $username = "root";
        $password = "magento242";
        $db_name = "spotkart";
        $conn = mysqli_connect($server, $username, $password, $db_name);

        if (!$conn){
            die("connection to this database failed due to ".mysqli_connect_error()); 
        }
        // else{
        //     echo "connected successfully";
        // }
?>