{include file="header.html.php"}
<div class="container jumbotron">
    <h1>
        <translate>Edit product</translate>
    </h1>
    {if isset($products)}
    <form action="http://{$smarty.server.HTTP_HOST}{$subdir}Product/edit" method="post" id="productForm">
        <input type="hidden" id="id" name="id" value="{$products['id']}">
        <div class="form-group">
            <label for="name">
                <translate>Name</translate>
            </label>
            <input type="text" class="form-control" name="name" value="{$products['name']}" required>
        </div>
        <div class="form-group">
            <label for="info">
                <translate>Informations</translate>
            </label>
            <input type="text" class="form-control" name="info" value="{$products['info']}" required>
        </div>
        <div class="form-group">
            <label for="adds">
                <translate>Addons</translate>
            </label>
            <input type="text" class="form-control" name="adds" value="{$products['adds']}" required>
        </div>
        <div class="form-group">
            <label for="price">
                <translate>Price</translate>
            </label>
            <input type="text" class="form-control" name="price" value="{$products['price']}" required>
        </div>
        <div class="form-group">
            <label for="idCategory">
                <translate>Category ID</translate>
            </label>
            <input type="text" class="form-control" name="idCategory" value="{$products['idCategory']}" required>
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