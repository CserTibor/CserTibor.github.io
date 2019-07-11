<div class="container">
    <div class="row">
        <div class="col-md-12">
            {foreach from=$bloglist item=entry }
                <div class="card">
                    <h4 class="card-header">{$entry.blog_title}</h4>
                    <div class="card-body">{$entry.blog_content}</div>
                    <div class="card-footer text-muted">{$entry.blog_created_ts}</div>
                </div>
                <br>
            {/foreach}
        </div>
    </div>
</div>