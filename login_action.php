<?php
require_once('database.php');

function login()
{
    global $db;
    $email = strtolower($_POST["email"]);
    $email = mysqli_real_escape_string($db, $email);

    $password = mysqli_real_escape_string($db, $_POST["password"]);

    $query = "SELECT * FROM user WHERE email='$email';";

    $result = query($query);
    if (isset($result[0])) {
        $data = $result[0];
        if (password_verify($password, $data['password'])) {
            session_start();
            $_SESSION['email'] = htmlspecialchars($data['email']);
            if (isset($_POST['remember_me'])) {
                setcookie('id', $data['id'], time() + 3600);
                setcookie('key', hash('sha256', $data['email']), time() + 3600);
            }
            header('Location:home.php');
            exit;
        }
    }
}
