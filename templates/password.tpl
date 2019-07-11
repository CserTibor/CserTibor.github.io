<head

</head>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Jelszó változtatás</h5>

                    <form action="index.php?page=password_process" class="form-signin" method="post" >
                            {if $all_pw_wrong}
                                <div class=" alert alert-danger">
                                    A régi jelszó nem megfelelő! <br>
                                    A két jelszó nem egyezik meg!
                                </div>
                            {/if}

                            {if $wrong_password}
                                <div class=" alert alert-danger">A régi jelszó nem megfelelő!</div>
                            {/if}

                            {if $wrong_passwords}
                            <div class=" alert alert-danger">A két jelszó nem egyezik meg!</div>

                            {elseif $password_changed}
                            <div class=" alert alert-success">A jelszó sikeresen megváltozott!</div>
                            {/if}

                        <div class="form-label-group">
                            <label for="inputOldPW">Régi jelszó:</label>
                            <input type="text" name="inputOldPW" class="form-control">
                        </div>

                        <div class="form-label-group">
                            <label for="inputPW1">Új jelszó:</label>
                            <input type="text" name="inputPW1" class="form-control">
                        </div>

                        <div class="form-label-group">
                            <label for="inputPW2">Új jelszó újra:</label>
                            <input type="text" name="inputPW2" class="form-control">
                        </div>

                        <button type="submit" class="mt-3 btn btn-lg btn-primary btn-block text-uppercase" >Adatmódosítás</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
