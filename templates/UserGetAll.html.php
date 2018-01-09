{include file="header.html.php"}
<div class="container jumbotron">
<h1>Lista urzytkowników</h1>
{if isset($users)}
{if $users|@count === 0}
	<b>Brak urzytkowników bazie!</b><br/><br/>
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
                <translate>Login</translate>
              </th>
              <th>
                <translate>Edit</translate>
              </th>
              <th>
                <translate>Delete</translate>
              </th>
            </tr>
            {foreach $users as $id => $login}
            <tr>
              <th>
                {$id}.
              </th>
              <th>
                {$login}
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}User/editForm/{$id}">Edit</a>
              </th>
              <th>
                <a href="http://{$smarty.server.HTTP_HOST}{$subdir}User/delete/{$id}">usuń</a>
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
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAddUser">Dodaj urzytkownika</button>
    </div>
  </div>

<!-- Modal section -->
  <div id="modalAddUser" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
            <translate>Add new user</translate>
          </h4>
        </div>
        <div class="modal-body">
          <form action="http://{$smarty.server.HTTP_HOST}{$subdir}User/add" method="post" id="userForm">
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
              <label for="login">
                <translate>Login</translate>
              </label>
              <input type="text" class="form-control" name="login" required>
            </div>
              <div class="form-group">
              <label for="password">
                <translate>Password</translate>
              </label>
              <input type="text" class="form-control" name="password" required>
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
    <script src="http://{$smarty.server.HTTP_HOST}{$subdir}js/UserFormCheck.js"></script>
  </body>
</html>