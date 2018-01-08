{include file="header.html.php"}
<div class="container jumbotron">
<h1>Edytuj kategorię</h1>
{if isset($categories) and $categories|@count === 1}
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Category/edit" method="post" id="categoryForm">
  {foreach $categories as $id => $name}
      <input type="hidden" id="id" name="id" value="{$id}"> 
  <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" value="{$name}" required>
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
  {/foreach}
</form>
{/if}

{if isset($error)}
<strong>{$error}</strong>
{/if}
  </div>
{include file="footer.html.php"}