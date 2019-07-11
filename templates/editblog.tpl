<form action="index.php?page=saveblog" method="post">
    <input type="hidden" name="blog_id" value="{$blog_row.blog_id}">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h3>Bejegyzés szerkesztése</h3>
                <label for="blog_title">Cím</label>
                <input value="{$blog_row.blog_title|escape}" name="blog_title" id="blog_title" type="text" class="form-control" placeholder="Írja ide a címet!">
                <br>
                <label for="blog_content">Tartalom</label>
                <textarea id="blog_content" name="blog_content" class="form-control">{$blog_row.blog_content|escape}</textarea>
                <br>
                <input type="submit" class="btn btn-success" value="Mentés">
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#blog_content' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>
</form>
