<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:login.php');
}
date_default_timezone_set("Asia/Jakarta");
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
                <h3>Grafik</h3>
            </div>

            <div class="col-md-3 text-right px-0">
                <?= date('d-M-Y'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 mt-auto d-md-flex flex-md-column-reverse align-items-center">
                <div>
                    <a href="logout.php" class="btn btn-block btn-danger mb-3">Logout</a>
                </div>
                <div>
                    <a href="tabel.php" class="btn btn-block btn-primary mb-3">Tabel</a>
                </div>
            </div>

            <div class="col-md-10">
                <div class="chart-container mx-auto">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16'],
                datasets: [{
                    label: '# of Votes',
                    data: [2, 3, 4, 1, 2, 5, 6, 7, 1, 1, 1, 2, 3, 2, 1, 9],
                    backgroundColor: 'rgba(0, 0, 255, 1.0)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            max: 10
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>