{include file="header.html.php"}
<div class="container jumbotron">
    <h1>
        <translate>Edit user</translate>
    </h1>
    {if isset($users)}
    <form action="http://{$smarty.server.HTTP_HOST}{$subdir}User/edit" method="post" id="userForm">
        <input type="hidden" id="id" name="id" value="{$users['id']}">
        <div class="form-group">
            <label for="idClient">
                <translate>Client ID</translate>
            </label>
            <input type="text" class="form-control" name="idClient" value="{$users['idClient']}" required>
        </div>
        <div class="form-group">
            <label for="idWorker">
                <translate>Worker ID</translate>
            </label>
            <input type="text" class="form-control" name="idWorker" value="{$users['idWorker']}" required>
        </div>
        <div class="form-group">
            <label for="login">
                <translate>Login</translate>
            </label>
            <input type="text" class="form-control" name="login" value="{$users['login']}" required>
        </div>
        <div class="form-group">
            <label for="password">
                <translate>Password</translate>
            </label>
            <input type="text" class="form-control" name="password" value="{$users['password']}" required>
        </div>
        <div class="form-footer">
            <input type="submit" class="btn btn-default" value="Edit"/>
            <!--
<button type="submit" class="btn btn-default" data-dismiss="modal">
<translate>Submit</translate>
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
<translate>Close</translate>
</button>
-->
        </div>
    </form>
    {/if}

    {if isset($error)}
    <strong>{$error}</strong>
    {/if}
</div>
{include file="footer.html.php"}