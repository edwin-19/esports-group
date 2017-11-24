<?php
  require_once '../php/dbconfig.php';
  require_once '../php/file.php';

  echo "<title>Welcome Back " . $_SESSION['username']. "</title>";

  if ($user->isLoggedIn()!="") {

  } else {
    $user->redirect('../index.html');
  }

  function checkPassword($password) {
    $uconfirmPass = $_POST['txt_confirm_password'];

    if ($uconfirmPass == $password) {
      return true;
    } else {
      return false;
    }
  }

  // Check if image file is a actual image or fake image
  if(isset($_POST['btn-upload'])){
    validateImage();
    checkFileExists();
    checkFileSize();
  }

  if(isset($_POST['btnLogOut'])){
    $user->logout();
    $user->redirect("../index.html");
  }

  if(isset($_POST['btnSave'])){
    $uname = $_POST['txt_uname'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];
    $ufname = $_POST['txt_uname_fname'];
    $ulname = $_POST['txt_uname_lname'];
    $ucompany = $_POST['txt_uname_company'];

    if (checkPassword($upass)) {
      $user->updateUser($ufname, $ulname, $uname, $upass, $ucompany, $umail, $_SESSION['user_session']);
    } else {
      echo "Password does not match";
    }

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

    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="eSport - eSports Gaming Theme For Clans, Teams, Tournament &amp; Organizations &raquo; Feed" href="../feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="eSport - eSports Gaming Theme For Clans, Teams, Tournament &amp; Organizations &raquo; Comments Feed" href="../comments/feed/index.html" />

    <!-- Simple word press script -->
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.gloriathemes.com\/wp\/esport\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.2"}};
      !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>

    <!-- Style picture -->
    <style type="text/css">
      img.wp-smiley, img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>

    <!-- Link to word press based contents -->
    <!-- CSS -->
    <link rel='stylesheet' id='bbp-default-css'  href='../wp-content/plugins/bbpress/templates/default/css/bbpress01c4.css?ver=2.5.14-6684' type='text/css' media='screen' />
    <link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles33a6.css?ver=4.9' type='text/css' media='all' />
    <link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='../wp-content/plugins/recent-tweets-widget/tp_twitter_plugin5152.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout0226.css?ver=3.1.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen0226.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce0226.css?ver=3.1.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/esport/assets/css/bootstrap.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css-css'  href='../wp-content/themes/esport/assets/css/font-awesome.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='../wp-content/themes/esport/assets/css/animate4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='scrollbar-css'  href='../wp-content/themes/esport/assets/css/scrollbar4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='select-css'  href='../wp-content/themes/esport/assets/css/select4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'  href='../wp-content/themes/esport/assets/css/swiper.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='plyr-io-css'  href='../wp-content/themes/esport/assets/css/plyr4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='esport-css'  href='../wp-content/themes/esport/style4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.minde54.css?ver=5.3' type='text/css' media='all' />

    <script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var wc_add_to_cart_params = {
        "ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/contact\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.gloriathemes.com\/wp\/esport\/cart\/","is_cart":"","cart_redirect_after_add":"no"
      };
      /* ]]> */
    </script>

    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0226.js?ver=3.1.2'></script>
    <script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cartde54.js?ver=5.3'></script>
    <link rel='https://api.w.org/' href='../wp-json/index.html' />

    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.8.2" />
    <meta name="generator" content="WooCommerce 3.1.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='../index0345.html?p=22' />

    <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed4a89.json?url=http%3A%2F%2Fdemo.gloriathemes.com%2Fwp%2Fesport%2Fcontact%2F" />
    <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed16a7?url=http%3A%2F%2Fdemo.gloriathemes.com%2Fwp%2Fesport%2Fcontact%2F&amp;format=xml" />
    <link href='http://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,600,700,700i&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khand:200,300,400,400i,500,600,700,700i&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style id='esport-selection' type='text/css'>
    		body{font-family:Poppins;}
    h1,h2,h3,h5,h6,.esport-slider-carousel  .slider-wrapper .content .top-title,.esport-slider-carousel  .slider-wrapper .content .title,.content-title-element.size1 .title,.content-title-element.size1 .title,.content-title-element.size2 .title,.achievement-box .point,.achievement-box .content .title,.player-wrapper .content,.team-player-list li .player-wrapper .hover-content .view-profile,.player-team-list-wrapper .nav-tabs li a span,.esport-counter .number,.esport-counter .title,.fixtures-wrapper .fixture-list li .left .game,.fixtures-wrapper .fixture-list li .left .title,.fixtures-wrapper .fixture-list li .right .team-details .team-name,.fixtures-wrapper .fixture-list li .score-date,.fixtures-wrapper .nav-tabs li a span,.alternativeFont,.widget-title,.header-style-1 .header-main-area .header-menu .navbar .navbar-nav,.post-list-style-1 .image .category .post-categories,.post-list-style-1 .title,.post-list-style-2 .title,.content-title-wrapper .title{font-family:Khand;}
    		/*----- CUSTOM COLOR START -----*/
    	   .page-title-breadcrumbs .page-title-breadcrumbs-image {
    				background-image:url(../wp-content/themes/esport/assets/img/breadcrumbs-bg.jpg);
    	}
    </style>

    <noscript>
      <style>
        .woocommerce-product-gallery {
          opacity: 1 !important;
        }
      </style>
    </noscript>

    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.gloriathemes.com/wp/esport/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><link rel="icon" href="../wp-content/uploads/2017/04/logo.png" sizes="32x32" />
    <link rel="icon" href="../wp-content/uploads/2017/04/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../wp-content/uploads/2017/04/logo.png" />
    <meta name="msapplication-TileImage" content="http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/logo.png" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">
      .vc_custom_1495280034451 {
        margin-bottom: 30px !important;
      }
      .vc_custom_1493742574155{
        margin-bottom: 60px !important;
      }

      .vc_custom_1493742578931 {
         margin-bottom: 60px !important;
      }

      .vc_custom_1493742477532{
        margin-top: 0px !important;
        margin-right: 0px !important;
        margin-bottom: 0px !important;
        margin-left: 0px !important;
        border-top-width: 0px !important;
        border-right-width: 0px !important;
        border-bottom-width: 0px !important;
        border-left-width: 0px !important;
        padding-top: 0px !important;
        padding-right: 0px !important;
        padding-bottom: 0px !important;
        padding-left: 0px !important;
      }
      </style>
      <noscript>
        <style type="text/css">
        .wpb_animate_when_almost_visible {
           opacity: 1;
        }
        </style>
      </noscript>
  </head>
  <body>
    <div class="container">
    <h1>Edit Profile</h1>
  	 <hr>
	    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
          <form id="uploadForm" action="" method="post"  enctype= "multipart/form-data">
            <div class="text-center">
              <img src="<?php echo "" ?>" class="avatar img-circle" alt="avatar">
              <h6>Upload a different photo...</h6>

              <input type="file" name="fileToUpload" id="fileToUpload">
              <br />
              <input type="submit" class="btn btn-primary" value="Upload Image" name="btn-upload">
            </div>
          </form>
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
                <input class="form-control" type="text" name="txt_uname_fname" value="<?php
                echo $_SESSION['firstname'];
                ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">
                Last name:
              </label>

              <div class="col-lg-8">
                <input class="form-control" type="text" name="txt_uname_lname" value="<?php
                echo $_SESSION['lastname'];
                ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Company:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="txt_uname_company" value="<?php
                echo $_SESSION['company'];
                ?>">
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
                <input class="form-control" type="password" name="txt_password" value="" placeholder="e.g 123">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" name="txt_confirm_password" value="" placeholder="e.g 123">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit" class="btn btn-primary" value="Save Changes" name="btnSave" style="margin-right:50px;">
                <span></span>
                <input type="submit" class="btn btn-primary" value="Cancel" name="btnCancel" style="margin-right:50px;">
                <span></span>
                <input type="submit" class="btn btn-primary" value="Log Out" name="btnLogOut">
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
