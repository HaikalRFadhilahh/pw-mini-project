<?php


$errors = array();

if (empty($_POST['username'])) {
    $errors['username'] = "Username Harus Di isi!!";
} else if (empty($_POST['username'])) {
    $errors['username'] = "Username Harus Di isi!!";
}


if (count($errors) === 0) {
    require('../../lib/koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from admin where username = '$username' and password = '$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['status'] = 'login';
        header('Location: ../dashboard.php');
    } else {
        header('Location: ../index.php');
    }
} else {
    include 'index.php';
}
