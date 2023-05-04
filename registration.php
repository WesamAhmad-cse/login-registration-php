<?php

include 'config.php';
include 'db.php';
echo $_POST['submit'];

// if (isset($_POST['submit'])) {

//     $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
//     $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
//     $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
//     $image = $_FILES['image']['name'];
//     $image_size = $_FILES['image']['size'];
//     $image_tmp_name = $_FILES['image']['tmp_name'];
//     $image_folder = 'uploaded_img/' . $image;

//     $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

//     if (mysqli_num_rows($select) > 0) {
//         $message[] = 'user already exist';
//     } else {
//         if ($pass != $cpass) {
//             $message[] = 'confirm password not matched!';
//         } elseif ($image_size > 2000000) {
//             $message[] = 'image size is too large!';
//         } else {
//             $insert = mysqli_query($conn, "INSERT INTO `users`(first_name,last_name, email, password, image) VALUES('$fname', '$lname','$email', '$pass', '$image')") or die('query failed');

//             if ($insert) {
//                 move_uploaded_file($image_tmp_name, $image_folder);
//                 $message[] = 'registered successfully!';
//                 header('location:login.php');
//             } else {
//                 $message[] = 'registeration failed!';
//             }
//         }
//     }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>


    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>register now</h3>
            <?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message">' . $message . '</div>';
    }
}

?>
            <input type="text" name="first_name" placeholder="enter First name" class="box" required>
            <input type="text" name="last_name" placeholder="enter Latst name" class="box" required>
            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="password" placeholder="enter password" class="box" required>
            <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>

    </div>

</body>

</html>