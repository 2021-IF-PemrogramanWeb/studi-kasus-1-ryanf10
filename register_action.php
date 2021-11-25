<?php
require_once('database.php');

function registrasi()
{
    global $db;
    $email = strtolower($_POST["email"]);
    $email = mysqli_real_escape_string($db, $email);

    $password = mysqli_real_escape_string($db, $_POST["password"]);

    $query = "SELECT * FROM user WHERE email='$email';";
    $result = query($query);
    if (isset($result[0])) {
        echo "<script>
				alert('Username sudah ada');
			</script>";
        return 0;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($db, "INSERT INTO user (email, password) VALUES('$email','$password');");
    }

    return mysqli_affected_rows($db);
}
