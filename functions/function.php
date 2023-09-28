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

        $insert = "INSERT INTO user_tbl(user_name,user_email,user_mobile,user_address,join_date)VALUES('$user_name','$email','$mobile','$address',NOW())";
        $result_insert = mysqli_query($con, $insert);

    }

?>