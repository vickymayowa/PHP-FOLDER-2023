<?php
    // echo 'Submittted'
    // print_r($_POST)
    require 'connection.php'
    
    if(isset($_POST('submit'))){
        print_r($_POST)
        $firstname = $_POST('first_name')
        $lastname = $_POST('last_name')
        $email = $_POST('email')
        $age = $_POST('age')
        $passsword = $_POST('password')
        $gender = $_POST('gender')
        $address = $_POST('address')
        $city = $_POST('city')
        $phonenumber = $_POST('phone_number')
        $department = $_POST('department')
        $complextion = $_POST('complextion')

        // verify email 
        $query = "SELECT * FROM  users WHERE email = '$email'"
        $emailverify = $dbconnection->query($query);
        print_r($emailverify)
        if ($emailverify->num_rows>0) {
            # code...
            $_SESSION['msg']='Email Has been Taken'
            header('location:signup.php')
        } else {
            # code...
            $hashedpassword = password_hash($passsword, PASSWORD_DEFAULT)
            $dbquery = 'INSERT INTO '
        }
        
        // hashing of password
        $hashedpassword = password_hash($passsword, PASSWORD_DEFAULT)
        $savedquery = $dbconnection->query($query)
        if ($savedquery) {
            echo "SuccessFully Saved"
        } else {
            echo "Not Submitted"
        }
    }else(
        header('location.signup.php')
    )
?>