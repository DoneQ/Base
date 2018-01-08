{include file="header.html.php"}
<div class="container jumbotron">
<h1>
  <translate>Edit client</translate>
</h1>
{if isset($clients)}
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Client/edit" method="post" id="clientForm">
  <input type="hidden" id="id" name="id" value="{$clients['id']}">
  <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" value="{$clients['name']}" required>
            </div>
     <div class="form-group">
              <label for="sname">
                <translate>Surname</translate>
              </label>
              <input type="text" class="form-control" name="sname" value="{$clients['sname']}" required>
            </div>
     <div class="form-group">
              <label for="phone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="phone" value="{$clients['phone']}" required>
            </div>
     <div class="form-group">
              <label for="mail">
                <translate>E-Mail</translate>
              </label>
              <input type="text" class="form-control" name="mail" value="{$clients['mail']}" required>
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