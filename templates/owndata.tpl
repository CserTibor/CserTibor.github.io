<head

</head>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Adatmódosítás </h5>

                    <form action="index.php?page=owndata_process" class="form-signin" method="post" >
                        {if $datachanged}
                            <div class=" alert alert-success">Az adatok megváltoztatva!</div>
                        {/if}
                        {formlabelgroup}
                            {label for="inputFamilyname" content="Vezetéknév"}
                            {input value=$user.user_familyname name="inputFamilyname"}
                        {/formlabelgroup}
                        <div class="form-label-group">
                            <label for="inputFirstname">Keresztnév:</label>
                            <input value="{$user.user_firstname|escape}" type="text" name="inputFirstname" class="form-control">
                        </div>
                        <button type="submit" class="mt-3 btn btn-lg btn-primary btn-block text-uppercase" >Adatmódosítás</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



