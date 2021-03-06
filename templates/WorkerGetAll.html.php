{include file="header.html.php"}
<div class="container jumbotron">
<h1>Lista pracowników</h1>
{if isset($workers)}
{if $workers|@count === 0}
	<b>Brak pracowników w bazie!</b><br/><br/>
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
                <translate>Name</translate>
              </th>
              <th>
                <translate>Edit</translate>
              </th>
              <th>
                <translate>Delete</translate>
              </th>
            </tr>
            {foreach $workers as $id => $name}
            <tr>
              <th>
                {$id}.
              </th>
              <th>
                {$name}
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}Worker/editForm/{$id}">Edit</a>
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}Worker/delete/{$id}">usuń</a>
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
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddWorker">Dodaj pracownika</button>
    </div>
  </div>

<!-- Modal section -->
  <div id="modalAddWorker" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new worker</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://{$smarty.server.HTTP_HOST}{$subdir}Worker/add" method="post" id="workerForm">
            <div class="form-group">
              <label for="name">
                <translate>Name</translate>
              </label>
              <input type="text" class="form-control" name="name" required>
            </div>
              <div class="form-group">
              <label for="name">
                <translate>Surname</translate>
              </label>
              <input type="text" class="form-control" name="sname" required>
            </div>
              <div class="form-group">
              <label for="name">
                <translate>Phone Number</translate>
              </label>
              <input type="text" class="form-control" name="phone" required>
            </div>
              <div class="form-group">
              <label for="name">
                <translate>E-mail</translate>
              </label>
              <input type="text" class="form-control" name="mail" required>
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
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/WorkerFormCheck.js"></script>
  </body>
</html>