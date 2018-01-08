{include file="header.html.php"}
<div class="container jumbotron">
<h1>
  <translate>Edit mealorder</translate>
</h1>
{if isset($mealorders)}
<form action="http://{$smarty.server.HTTP_HOST}{$subdir}MealOrder/edit" method="post" id="mealorderForm">
  <input type="hidden" id="id" name="id" value="{$mealorders['id']}">
  <div class="form-group">
              <label for="idClient">
                <translate>Client ID</translate>
              </label>
              <input type="text" class="form-control" name="idClient" value="{$mealorders['idClient']}" required>
            </div>
     <div class="form-group">
              <label for="idWorker">
                <translate>Worker ID</translate>
              </label>
              <input type="text" class="form-control" name="idWorker" value="{$mealorders['idWorker']}" required>
            </div>
     <div class="form-group">
              <label for="contactPhone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="contactPhone" value="{$mealorders['contactPhone']}" required>
            </div>
     <div class="form-group">
              <label for="adress">
                <translate>Adress</translate>
              </label>
              <input type="text" class="form-control" name="adress" value="{$mealorders['adress']}" required>
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