<?php 
    if(isset($_POST['submit']))
    print_r($_FILES['profile_pic']['tmp_name']);
    $name = $_FILES['profile_pic']['name'];
    // echo $name;
    $temp = $_FILES['profile_pic']['tmp_name'];
    // echo $temp;
    $anothername = time().$name;
    // echo $anothername;
    $movedfile = move_uploaded_file($temp, 'images/'.$anothername);
    $userid = $_SESSION['userid'];
    echo $userid;
    if($movedfile){
        // echo $movedfile;
        $query = "UPDATE users SET profile_pic='$anothername' WHERE user_id=$userid";
        $querycon = $dbconnection->query($query);
        if($querycon){
            header('location:dashboard.php');
        }
        else{
            $_SESSION['error']='Upload Failed!'; 
            echo 'Upload Failed!';
            header('location:dashboard.php');
        }
        }else{
        $_SESSION['error']='Upload Failed! Try and Upload again'; 
        header('location:dashboard.php');
    };

    ?>
