<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NJSZK Menedzsment</title>
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/style.css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="time.js"></script>

</head>
<body onload="ido()">

<div id="header">
    <nav class="navbar navbar-expand-lg">
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
                    <a class="nav-link" href="index.php?page=blog">Bejegyzések</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=contact">Kapcsolat</a>
                </li>

                {if $isset_user}

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=logout">Kijelentkezés</a>
                </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=bloglist">Blog</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=owndata">Saját adatok</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=password">Jelszó változtatás</a>
                </li>

                {else}
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?page=login">Bejelentkezés</a>
                </li>
                {/if}
            </ul>
            <div id="orahelye">
            </div>

        </div>
    </nav>
</div>
<hr>

{$output}
</body>
</html>
