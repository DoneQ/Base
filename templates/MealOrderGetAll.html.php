{include file="header.html.php"}
<div class="container jumbotron">
<h1>Lista kateogrii</h1>
{if isset($mealorders)}
{if $mealorders|@count === 0}
	<b>Brak kategorii w bazie!</b><br/><br/>
{else}
<!--- Contact table --->
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                <translate>Id</translate>
              </th>
              <th>
                <translate>Adress</translate>
              </th>
              <th>
                <translate>Edit</translate>
              </th>
              <th>
                <translate>Delete</translate>
              </th>
            </tr>
            {foreach $mealorders as $id => $adress}
            <tr>
              <th>
                {$id}.
              </th>
              <th>
                {$adress}
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}MealOrder/editForm/{$id}">Edit</a>
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}MealOrder/delete/{$id}">usuń</a>
              </th>
            </tr>
            {/foreach}
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
  <!--- /.table-collapse --->
{/if}
{/if}
{if isset($error)}
    <strong>{$error}</strong>
{/if}
    <div class="col-md-2">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddMealOrder">Dodaj kategorie</button>
    </div>
  </div>

<!-- Modal section -->
  <div id="modalAddMealOrder" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new mealorder</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://{$smarty.server.HTTP_HOST}{$subdir}MealOrder/add" method="post" id="mealorderForm">
            <div class="form-group">
              <label for="idClient">
                <translate>Client ID</translate>
              </label>
              <input type="text" class="form-control" name="idClient" required>
            </div>
              <div class="form-group">
              <label for="idWorker">
                <translate>Worker ID</translate>
              </label>
              <input type="text" class="form-control" name="idWorker" required>
            </div>
              <div class="form-group">
              <label for="contactPhone">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="contactPhone" required>
            </div>
              <div class="form-group">
              <label for="adress">
                <translate>Adress</translate>
              </label>
              <input type="text" class="form-control" name="adress" required>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-default" value="Add"/>
              <input type="button" class="btn btn-default" value="Close" data-dismiss="modal"/>
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

        </div>

      </div>

    </div>
  </div>
  <!--- /.modal-collapse --->
	<div class="container">
	  <!-- Site footer -->
      <footer class="footer">
        <p>&copy; MVC + Smarty + Bootstrap</p>
      </footer>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/jquery.min.js"></script>
	<script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/jquery-ui.min.js"></script>
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/bootstrap.min.js"></script>
	<script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/jquery.cookie.js"></script>
	<script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/jquery.validate.min.js"></script>	
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/MealOrderFormCheck.js"></script>
  </body>
</html>