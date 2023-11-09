<?php
    require 'connection.php';
    if(isset($_POST('submit'))){
        print_r($_POST);
        $firstname = $_POST('first_name');
        $lastname = $_POST('last_name');
        $age = $_POST('age');
        $email = $_POST('email');
        $address = $_POST('address');
        $phonenumber = $_POST('phone_number');
        $city = $_POST('city');
        $createdAt = $_POST('creat');
        $passsword = $_POST('password');
        $department = $_POST('department');
        $complextion = $_POST('complextion');

        // verify email 
        $query = "SELECT * FROM  users WHERE email = '$email'";
        $emailverify = $dbconnection->query($query);
        print_r($emailverify);
        if ($emailverify->num_rows>0) {
            # code...
            $_SESSION['msg']='Email Has been Taken';
            header('location:signup.php');
        } else {
            # code...
            $hashedpassword = password_hash($passsword, PASSWORD_DEFAULT);
            $dbquery = "INSERT INTO users (first_name, last_name, email, age, password, gender, address, city, phone_number, department, complextion) VALUES ('$firstname', '$lastname', '$email', '$age', '$passsword', '$gender', '$address', '$city', '$phonenumber', '$department', '$complextion')";
        }
        
        // hashing of password
        $hashedpassword = password_hash($passsword, PASSWORD_DEFAULT);
        $savedquery = $dbconnection->query($query);
        if ($savedquery) {
            echo "SuccessFully Saved";
        } else {
            echo "Not Submitted";
        }
    }else(
        header('location.signup.php')
    )
?>

