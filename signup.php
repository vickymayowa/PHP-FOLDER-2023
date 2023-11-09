<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" >

    </div>
    <div>
        <?php 
        session_start();
            if (isset($_SESSION['msg'])) {
                # code...
                
            } else {
                # code...
            }
            
        ?>
    </div>
    <div>
        <form action="submit.php" method="post">
            <input type="text" placeholder="First Name" name="first_name">
            <input type="text" placeholder="Last Name" name="last_name">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Password" name="password">
            <input type="text" placeholder="Age" name="age">
            <input type="text" placeholder="Gender" name="gender">
            <input type="text" placeholder="Address" name="address">
            <input type="text" placeholder="City" name="city">
            <input type="text" placeholder="Phone Number" name="phone_number">
            <input type="text" placeholder="Department" name="department">
            <input type="text" placeholder="Complextion" name="complextion">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>