<head>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">

                            {if $login==1}
                                <div class="alert alert-danger">A fiók letiltva: Túl sok belépési próbálkozás!</div>
                                {elseif $failed_login}
                                <div class="alert alert-danger">Sikertelen bejelentkezés!</div>
                                {/if}

                        <h5 class="card-title text-center">Bejelentkezés</h5>
                        <form action="index.php?page=login_process" class="form-signin" method="post" >
                            <div class="form-label-group">
                                <input type="text" name="inputEmail" class="form-control" placeholder="Email address"  autofocus>
                                <label for="inputEmail">Email cím</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="inputPassword" class="form-control" placeholder="Password" >
                                <label for="inputPassword">Jelszó</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Jelszó mentése </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Bejelentkezés</button>
                        </form>

                     </div>
                    </div>
                <div>
                    Aktív felhasználók:{$online_users}

                </div>

            </div>
        </div>
    </div>
</body>
