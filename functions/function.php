<?php
    include("config.php");

    use FTP\Connection;

    session_start();

    function add_user($user_name, $email, $mobile, $address){
        $con = Connection();

        echo $user_name;
        echo $email;
        echo $mobile;
        echo $address;



    }

?>