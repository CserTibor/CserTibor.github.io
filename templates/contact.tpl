<head>

</head>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="index.php?page=contact_process">
                {if $name_error}
                    <div class="alert alert-danger">Nem megfelelő név!</div>
                {/if}
                {if $email_error}
                    <div class="alert alert-danger">Nem megfelelő e-mail cím!</div>
                {/if}
                {if $message_error}
                    <div class="alert alert-danger">Hiányzó üzenet!</div>
                {/if}
                {if $failed_smtp}
                    <div class="alert alert-danger">SMTP hiba!</div>
                {/if}
                <div class="form-group">
                    <label for="contact_name">Név</label>
                    <input class="col-md-8 form-control" type="text" onkeyup='saveValue(this);' name="contact_name" id="contact_name">
                </div>
                <div class="form-group">
                    <label for="contact_email">E-mail</label>
                    <input class="col-md-8 form-control" type="text" onkeyup='saveValue(this);' name="contact_email" id="contact_email">
                </div>
                <div class="form-group">
                    <label for="contact_message">Üzenet</label>
                    <textarea name="contact_message" id="contact_message" onkeyup='saveValue(this);' rows="10" class="form-control"></textarea>
                </div>
                <input formmethod="post" type="submit" value="Elküldés" style="margin-bottom: 20px" class="btn btn-lg btn-secondary">
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    document.getElementById("contact_name").value = getSavedValue("contact_name");    // set the value to this input
    document.getElementById("contact_email").value = getSavedValue("contact_email");   // set the value to this input
    document.getElementById("contact_message").value = getSavedValue("contact_message");   // set the value to this input

    //Save the value function - save it to localStorage as (ID, VALUE)
    function saveValue(e){
        var id = e.id;  // get the sender's id to save it .
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override .
    }

    //get the saved value function - return the value of "v" from localStorage.
    function getSavedValue  (v){
        if (localStorage.getItem(v) === null) {
            return "";// You can change this to your defualt value.
        }
        return localStorage.getItem(v);
    }
</script>
