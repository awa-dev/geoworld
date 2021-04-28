<?php
session_start();
/**
 * PAGE LOGIN
 *
 * PHP version 7
 *
 * @category  LOGIN
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
<?php
if (!($_SESSION['role'] == "admin") || !($_SESSION['role']) == "prof") {
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
}
?>

<?php
require_once 'header.php';
require_once './inc/manager-db.php';
?>

<body>
<?php
    $action = $_GET['action'];
?>
  <h1>Connection !</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-half">
      <div class="box">
      <?php  
       echo "<form action='". $action ."' method='post'>";
      ?>
      <?php
      if ($action == "update.php") {
          echo '
          <div class="field">
          <label class="label">Login</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" name="login" placeholder="login" value="">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
        </div>

        <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-danger" type="password" name="password" placeholder="password" value="">
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
      </div>

      <div class="field">
      <label class="label">Role</label>
      <div class="control has-icons-left has-icons-right">
        <input class="input is-danger" type="text" name="role" placeholder="role" value="">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-exclamation-triangle"></i>
        </span>
      </div>
    </div>

      <div class="field is-grouped">
      <div class="control">
        <button class="button is-link">Modification</button>
      </div>
    </div>
</div>
</div>
          ';
      } elseif ($action == "register_admin.php") {
        echo '
        <div class="field">
        <label class="label">Login</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="text" name="login" placeholder="login" value="">
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
          </span>
        </div>
      </div>

      <div class="field">
      <label class="label">Password</label>
      <div class="control has-icons-left has-icons-right">
        <input class="input is-danger" type="password" name="password" placeholder="password" value="">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-exclamation-triangle"></i>
        </span>
      </div>
    </div>

    <div class="field">
    <label class="label">Role</label>
    <div class="control has-icons-left has-icons-right">
      <input class="input is-danger" type="text" name="role" placeholder="role" value="">
      <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-exclamation-triangle"></i>
      </span>
    </div>
  </div>

    <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Modification</button>
    </div>
  </div>
</div>
</div>';
      } elseif ($action == "delete.php") {
        echo '
        <div class="field">
        <label class="label">Login</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="text" name="login" placeholder="login" value="">
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
          </span>
        </div>
      </div>

    <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Suppresion</button>
    </div>
  </div>
</div>
</div>';
      }
        ?>
        </from>
  </div>
  </div>
</body>

<?php
require_once 'footer.php';
?>