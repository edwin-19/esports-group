<?php
  require_once '../php/dbconfig.php';

  echo "<title>Welcome Back " . $_SESSION['username']. "</title>";

  if(isset($_POST['btnSave'])){
    $uname = $_POST['txt_uname'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];
    $ufname = $_POST['txt_uname_fname'];
    $ulname = $_POST['txt_uname_lname'];
    $ucompany = $_POST['txt_uname_company'];

    $user->updateUser($ufname, $ulname, $uname, $upass, $ucompany, $umail, $_SESSION['user_session']);
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">
    <h1>Edit Profile</h1>
  	 <hr>
	    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
            <h6>Upload a different photo...</h6>

            <input type="file" class="form-control">
          </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
          <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>
            This is an <strong>.alert</strong>.
            Use this to show important messages to the user.
          </div>

          <h3>Personal info</h3>

          <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
              <label class="col-lg-3 control-label">First name:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="txt_uname_fname" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">
                Last name:
              </label>

              <div class="col-lg-8">
                <input class="form-control" type="text" name="txt_uname_lname" value="Bishop">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Company:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="txt_uname_company" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" name="txt_uname_email" type="text" value="<?php
                  echo $_SESSION['useremail'];
                  ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Time Zone:</label>
                <div class="col-lg-8">
                  <div class="ui-select">
                    <select id="user_time_zone" class="form-control">
                      <option value="Hawaii">(GMT-10:00) Hawaii</option>
                      <option value="Alaska">(GMT-09:00) Alaska</option>
                      <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                      <option value="Arizona">(GMT-07:00) Arizona</option>
                      <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                      <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                      <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Username:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="txt_uname" value="<?php
                  echo $_SESSION['username'];
                  ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" name="txt_password" value="11111122333">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" name="txt_confirm_password" value="11111122333">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit" class="btn btn-primary" value="Save Changes" name="btnSave">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <hr>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
