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
require_once 'header.php';
require_once './inc/manager-db.php';
?>

<?php
if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['login'])) {
  $result = getAuthentification($_POST['login'], $_POST['password']);
  print_r($result);
  if ($result) {
    session_start();
    $_SESSION['login'] = $result->login;
    $_SESSION['password'] = $result->password;
    $_SESSION['role'] = $result->role;
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
  }
  else {
    echo '<script type="text/javascript">
    location.replace("login.php");
    </script>';
  }
}
?>

<body>
  <div class="columns is-mobile is-centered">
    <div class="column is-half">
      <div class="box">
        <form action="login.php" method="post">
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
            <!-- JS - 'is-active' ! -->
            <!-- <p class="help is-success">This username is available</p> -->
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
            <!-- JS - 'is-active' ! -->
            <!-- <p class="help is-danger">This password is invalid</p> -->
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Connection</button>
            </div>
          </div>
      </div>
    </div>
  </div>
  </form>
</body>

<?php
require_once 'footer.php';
?>