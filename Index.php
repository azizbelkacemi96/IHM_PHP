
<?php

    require_once("Settings.php");

    $track = (int)$_GET["Track"];

?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8"/>
        <title> Bon de commandes </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"> </script>
    </head>
    <body class="container">
        <nav class="navbar navbar-expand-md navbar-light p-5 bg-info shadow">
            <a class="navbar-brand" href="Home.php"> Home </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div id="navbar" class="navbar-collapse text-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php"> Bon de commandes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php?Track=Dashboard"> Dashboard </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive text-center p-5 bg-light shadow border">
            <?php require_once($_GET["Track"] != "Dashboard" ? "Orders.php" : "Dashboard.php"); ?>
            <footer class="my-5">
                <a class="text-decoration-none" href="https://github.com/azizbelkacemi96/IHM_PHP"> Notre Git </p>
            </footer>
        </div>
    </body>
</html>
