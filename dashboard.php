<?php 

// require 'connection.php';
// session_start();
// if (isset($_SESSION['userid'])) {
//     $id = $_SESSION['userid'];
//     echo $id;
//     $query = 'SELECT * FROM users WHERE user_id = $id';
//     $querycon = $dbconnection->query($query);
//     print_r($querycon);
//     $user = $querycon->fetch_assoc();
//     print_r($user);
// };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class='text-2xl font-semibold mb-2 text-center '>Welcome to Dashboard</h3>
    <div class="h-screen font-sans text-gray-900 bg-gray-300 border-box">
    <div class="flex justify-center w-full mx-auto sm:max-w-lg">

        <div class="flex flex-col items-center justify-center w-full h-auto my-20 bg-white sm:w-3/4 sm:rounded-lg sm:shadow-xl">
            <div class="mt-10 mb-10 text-center">
                <h2 class="text-2xl font-semibold mb-2">Upload your Profile Picture</h2>
                <p class="text-xs text-gray-500">File should be of format .mp4, .avi, .mov or .mkv,jpg</p>
            </div>
            <form action="fileupload.php" class="relative w-4/5 h-32 max-w-xs mb-10 bg-white bg-gray-100 rounded-lg shadow-inner" method="post" enctype='multipart/form-data'>
                <input type="file" name="profile_pic">
                <input type="submit" value="Upload Profile Pic" name="submit">
                <label for="file-upload" type='submit' class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                    <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your files here</p>
                    <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                    </svg>
                </label>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>