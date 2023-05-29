<?php

@include 'config.php';

session_start();

// if (isset($_POST['submit'])) {
//     $email = mysqli_real_escape_string($conn, $_POST['usermail']);
//     $pass = md5($_POST['password']);

//     $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

//     $result = mysqli_query($conn, $select);

//     if (mysqli_num_rows($result) > 0) {
//         $_SESSION['usermail'] = $email;
//         header('location:recipes-list.php');
//     } else {
//         $error[] = 'INCORRECT EMAIL OR PASSWORD';
//     }
// }

if (isset($_SESSION['usermail'])) {
    header('location:recipes-list.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ambatu Cooks - Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./img/ICON/ambatuicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./assets/style-login.css">

</head>

<body class="login">

    <div class="video-background">
        <video id="dreamyvid" autoplay loop>
            <source src="./vid/moon river - dreamy.mp4" type="video/mp4">
        </video>
    </div>

    <div id="form-con" class="form-container">

        <form action="" method="post">
            <h1>
                <img src="./img/Logo/ambatulogoF.png" alt="logo">
            </h1>
            <h3>Pages</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                }
            }
            ?>
            <div class="pages">
                <a href="./index.php">Home</a>
                <a href="./recipes.php">Main Menu</a>
                <a href="./recipes-list.php">Courses</a>
                <a href="./login_form.php">login</a>
                <a href="./register_form.php">Register</a>
            </div>

        </form>

        <script>
            var myVideo = document.getElementById("dreamyvid");
            myVideo.volume = 0.25;
        </script>

    </div>

</body>

</html>