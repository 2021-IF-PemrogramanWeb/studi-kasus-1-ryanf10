<?php
require_once('database.php');
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:login.php');
}
date_default_timezone_set("Asia/Jakarta");

$query = "SELECT * FROM reason;";
$reasons = query($query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Tabel</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2 d-flex justify-content-center">
                <a href="home.php" class="btn btn-success">Home</a>
            </div>

            <div class="col-md-7">
                <h3>Tabel Reason</h3>
            </div>

            <div class="col-md-3 text-right x-0">
                <?= date('d-M-Y'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 mt-auto d-md-flex flex-md-column-reverse align-items-center">
                <div>
                    <a href="logout.php" class="btn btn-block btn-danger mb-3">Logout</a>
                </div>
                <div>
                    <a href="grafik.php" class="btn btn-block btn-warning mb-3">Grafik</a>
                </div>
            </div>

            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reasons as $reason) : ?>
                            <tr>
                                <th scope="row"><?= $reason['id']; ?></th>
                                <td><?= $reason['description']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>