<?php 
    if(isset($_POST['submit']))
    print_r($_FILES['profile_pic']['tmp_name']);
    $name = $_FILES['profile_pic']['name'];
    echo $name;
    $temp = $_FILES['profile_pic']['tmp_name'];
    echo $temp;
    $anothername = time().$name;
    echo $anothername;

    $movedfile = move_uploaded_file($temp, 'images/'.$anothername);
    if($movedfile){
        echo $movedfile;
    }else{
        $_SESSION; 
    }
?>