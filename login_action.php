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
            session_set_cookie_params(0);
            session_start();
            $_SESSION['email'] = $email;
            if (isset($_POST['remember_me'])) {
                setcookie('id', $data['id'], time() + 60);
                setcookie('key', hash('sha256', $data['email']), time() + 60);
            }
            header('Location:home.php');
            exit;
        }
    }
}
