<div class="container">
    <a class="btn btn-success" href="index.php?page=editblog">Új bejegyzés hozzáadása</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <td>Cím:</td>
            <td>Közzétéve:</td>
            <td>Műveletek:</td>
        </tr>
        </thead>
        <tbody>
        {foreach from=$bloglist item=entry }
            <tr>
                <td>{$entry.blog_title}</td>
                <td>{$entry.blog_created_ts}</td>
                <td><a class="btn btn-warning"href="index.php?page=editblog&blog_id={$entry.blog_id}">Szerkesztés</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>