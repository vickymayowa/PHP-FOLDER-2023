<?php
    require 'connection.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo $password , $email;
        $query = "SELECT * FROM users WHERE email = '$email' "
        $query = $dbconnection=>query($query);
        if ($query->num_rows>0) {
            $user = $query->fetch_assoc();
            $hashedpassword = $user['password'];
            $userid = $user['user_id']
            echo $hashedpassword , $userid
            $passwordverify = password_verify($password,$hashedpassword);
            if ($passwordverify) {
                echo $userid;
                $_SESSION['userid']=$userid;
                header('location:dashboard.php');
            } else {
            echo "div class='alert alert-danger'>Invalid Password</div>";
            }
            
        } else {
            echo "div class='alert alert-danger'>Invalid Email Address or Password</div>";
            header('location:login.php');
        }
        
        // $emailverify = $dbconnection->query($query);
        // print_r($emailverify);
        // if ($emailverify->num_rows>0) {
        //     # code..
        //     $user = $emailverify->fetch_assoc();
        //     print_r($user);
        //     $hashedpassword = $user['password'];
        //     $userid = $user['user_id'];
        //     echo $hashedpassword,$userid;
        //     echo 'yes'
        // } else {
        //     # code...
        //     echo "div class='alert alert-danger'>Invalid Email Address or Password</div>";
        //     header('location:login.php');
        // }
        
        
    };
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" placeholder='Email' name='email'>
        <input type="text" placeholder='Password' name='password'>
        <input type="submit" placeholder='Submit' name='submit'>
    </form>
</body>
</html>