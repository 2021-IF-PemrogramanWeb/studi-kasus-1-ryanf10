<?php
require_once('database.php');

function login()
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE email='$email';";

    $result = query($query);
    if (isset($result[0])) {
        $data = $result[0];
        if (password_verify($password, $data['password'])) {
            session_start();
            $_SESSION['email'] = $email;
            header('Location:home.php');
            exit;
        }
    }
}
