{include file="header.html.php"}
<div class="container jumbotron">
<h1>Lista Zamówień</h1>
{if isset($orderproducts)}
{if $orderproducts|@count === 0}
	<b>Brak zamówień w bazie!</b><br/><br/>
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
                <translate>Order ID</translate>
              </th>
              <th>
                <translate>Edit</translate>
              </th>
              <th>
                <translate>Delete</translate>
              </th>
            </tr>
            {foreach $orderproducts as $id => $idMealOrder}
            <tr>
              <th>
                {$id}.
              </th>
              <th>
                {$idMealOrder}
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}OrderProduct/editForm/{$id}">Edit</a>
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}OrderProduct/delete/{$id}">usuń</a>
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
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddOrderProduct">Dodaj zamówienie</button>
    </div>
  </div>

<!-- Modal section -->
  <div id="modalAddOrderProduct" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new orderproduct</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://{$smarty.server.HTTP_HOST}{$subdir}OrderProduct/add" method="post" id="orderproductForm">
            <div class="form-group">
              <label for="idUser">
                <translate>User ID</translate>
              </label>
              <input type="text" class="form-control" name="idUser" required>
            </div>
              <div class="form-group">
              <label for="idMealOrder">
                <translate>Order ID</translate>
              </label>
              <input type="text" class="form-control" name="idMealOrder" required>
            </div>
              <div class="form-group">
              <label for="idProduct">
                <translate>Product ID</translate>
              </label>
              <input type="text" class="form-control" name="idProduct" required>
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
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/OrderProductFormCheck.js"></script>
  </body>
</html>