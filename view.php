<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NJSZK Menedzsment</title>
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">NJSZK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Kezdőlap</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Események</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Kapcsolat</a>
                    </li>

                    <?php
                        if (isset($_SESSION["user"])){  ?>

                    <li class="nav-item ">
                        <a class="nav-link" href="index.php?page=logout">Kijelentkezés</a>
                    </li>



                    <?php } else { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php?page=login">Bejelentkezés</a>
                    </li>



                       <?php } ?>
                </ul>

            </div>
        </nav>
    </div>

    <div class="container">
        <h1 class="">NJSZK Menedzsment</h1>
        <p class="">Egyszerű adminisztrációs rendszer</p>
    </div>
</body>
</html>