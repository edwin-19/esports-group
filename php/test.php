<?php
  require_once 'dbconfig.php';

  if ($user->isLoggedIn()!="") {
    $user->redirect('index.html');
  } else {
    echo "YOU ARE NOT LOGGED IN";
  }

  if(isset($_POST['btn-login'])) {
    $uname = $_POST['txt_uname_email'];
    echo "EFEFEF";
  } else {
    echo "error s]";
  }

 ?>

 <div class="form-group">
  <button type="submit" name="btn-login" class="btn btn-block btn-primary">
      <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
     </button>
 </div>
