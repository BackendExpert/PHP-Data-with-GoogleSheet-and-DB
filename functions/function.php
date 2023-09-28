<?php
    include("config.php");

    use FTP\Connection;

    session_start();

    function add_user($name_user, $email, $mobile, $address){
        $con = Connection();

        echo $name_user;
        echo $email;
        echo $mobile;
        echo $address;

        $insert = "INSERT INTO user_tbl(user_name,user_email,user_mobile,user_address,join_date)VALUES('$name_user','$email','$mobile','$address',NOW())";
        $result_insert = mysqli_query($con, $insert);

    }

?>