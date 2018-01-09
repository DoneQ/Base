{include file="header.html.php"}
<div class="container jumbotron">
<h1>
  <translate>Edit orderproduct</translate>
</h1>
{if isset($orderproducts)}
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}OrderProduct/edit" method="post" id="orderproductForm">
  <input type="hidden" id="id" name="id" value="{$orderproducts['id']}">
  <div class="form-group">
              <label for="idUser">
                <translate>User ID</translate>
              </label>
              <input type="text" class="form-control" name="idUser" value="{$orderproducts['idUser']}" required>
            </div>
     <div class="form-group">
              <label for="idMealOrder">
                <translate>Meal Order ID</translate>
              </label>
              <input type="text" class="form-control" name="idMealOrder" value="{$orderproducts['idMealOrder']}" required>
            </div>
     <div class="form-group">
              <label for="idProduct">
                <translate>Product ID</translate>
              </label>
              <input type="text" class="form-control" name="idProduct" value="{$orderproducts['idProduct']}" required>
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