<?php
  require_once 'php/dbconfig.php';

  if ($user->isLoggedIn() != "") {
    $user->redirect('index.html');
  }

  if(isset($_POST['btn-signup'])) {
    $uname = trim($_POST['txt_uname']);
    $umail = trim($_POST['txt_umail']);
    $upass = trim($_POST['txt_upass']);

    if($uname=="") {
      $error[] = "provide username !";
   }
   else if($umail=="") {
      $error[] = "provide email id !";
   }
   else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($upass=="") {
      $error[] = "provide password !";
   }
   else if(strlen($upass) < 6){
      $error[] = "Password must be atleast 6 characters";
   } else {
     try {
       $stmt = $DB_con->prepare("SELECT user_name,user_email FROM USER WHERE user_name=:uname OR user_email=:umail");
       $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
       $row=$stmt->fetch(PDO::FETCH_ASSOC);

       if($row['user_name']==$uname) {
            $error[] = "sorry username already taken !";
       } else if($row['user_email']==$umail) {
            $error[] = "sorry email id already taken !";
       } else {
         if ($user->register($umail,$uname,$upass)) {
           $user->login($uname,$umail,$upass);
          $user->redirect('index.html');
         }
       }

     } catch (PDOException $ex) {
       echo $ex->getMessage();
     }
   }
 }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Register</title>

    <!-- For esports content -->
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="eSport - eSports Gaming Theme For Clans, Teams, Tournament &amp; Organizations &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="eSport - eSports Gaming Theme For Clans, Teams, Tournament &amp; Organizations &raquo; Comments Feed" href="comments/feed/index.html" />

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
    <link rel='stylesheet' id='bbp-default-css'  href='wp-content/plugins/bbpress/templates/default/css/bbpress01c4.css?ver=2.5.14-6684' type='text/css' media='screen' />
    <link rel="stylesheet" id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles33a6.css?ver=4.9' type='text/css' media='all' />
    <link rel='stylesheet' id='tp_twitter_plugin_css-css'  href='wp-content/plugins/recent-tweets-widget/tp_twitter_plugin5152.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout0226.css?ver=3.1.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen0226.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce0226.css?ver=3.1.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='wp-content/themes/esport/assets/css/bootstrap.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css-css'  href='wp-content/themes/esport/assets/css/font-awesome.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='wp-content/themes/esport/assets/css/animate4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='scrollbar-css'  href='wp-content/themes/esport/assets/css/scrollbar4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='select-css'  href='wp-content/themes/esport/assets/css/select4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'  href='wp-content/themes/esport/assets/css/swiper.min4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='plyr-io-css'  href='wp-content/themes/esport/assets/css/plyr4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='esport-css'  href='wp-content/themes/esport/style4a41.css?ver=4.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.minde54.css?ver=5.3' type='text/css' media='all' />

    <!-- JS Linking -->
    <script type="text/javascript" src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type="text/javascript" src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>

    <!-- JS -->
    <script type="text/javascript">
      /* <![CDATA[ */
      var wc_add_to_cart_params = {
        "ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.gloriathemes.com\/wp\/esport\/cart\/","is_cart":"","cart_redirect_after_add":"no"
      };
      /* ]]> */
    </script>

    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0226.js?ver=3.1.2'></script>
    <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cartde54.js?ver=5.3'></script>

    <!-- JSON -->
    <link rel="https://api.w.org/"  href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />

    <meta name="generator" content="WordPress" />
    <meta name="generator" content="WooCommerce" />

    <link rel="canonical" href="index.php" />
    <link rel='shortlink' href='index.php' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7e1e.json?url=http%3A%2F%2Fdemo.gloriathemes.com%2Fwp%2Fesport%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed4e35?url=http%3A%2F%2Fdemo.gloriathemes.com%2Fwp%2Fesport%2F&amp;format=xml" />
    <link href='http://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,600,700,700i&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khand:200,300,400,400i,500,600,700,700i&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <style id='esport-selection' type='text/css'>
  		body{font-family:Poppins;}
      h1,h2,h3,h5,h6,.esport-slider-carousel  .slider-wrapper .content .top-title,.esport-slider-carousel  .slider-wrapper .content .title,.content-title-element.size1 .title,.content-title-element.size1 .title,.content-title-element.size2 .title,.achievement-box .point,.achievement-box .content .title,.player-wrapper .content,.team-player-list li .player-wrapper .hover-content .view-profile,.player-team-list-wrapper .nav-tabs li a span,.esport-counter .number,.esport-counter .title,.fixtures-wrapper .fixture-list li .left .game,.fixtures-wrapper .fixture-list li .left .title,.fixtures-wrapper .fixture-list li .right .team-details .team-name,.fixtures-wrapper .fixture-list li .score-date,.fixtures-wrapper .nav-tabs li a span,.alternativeFont,.widget-title,.header-style-1 .header-main-area .header-menu .navbar .navbar-nav,.post-list-style-1 .image .category .post-categories,.post-list-style-1 .title,.post-list-style-2 .title,.content-title-wrapper .title{font-family:Khand;}

  		/*----- CUSTOM COLOR START -----*/
  		.page-title-breadcrumbs .page-title-breadcrumbs-image {
  			background-image:url(../wp-content/uploads/2017/05/allpage-img.png);
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
    <link rel="icon" href="wp-content/uploads/2017/04/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2017/04/logo.png" />
    <meta name="msapplication-TileImage" content="http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/logo.png" />

    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1492687936586{background-image: url(wp-content/uploads/2017/04/about-bg37ab.jpg?id=59) !important;}.vc_custom_1492790774744{background-color: #fac800 !important;}.vc_custom_1493036821803{background: #0a0a0a url(http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/video-bg.jpg?id=167) !important;}.vc_custom_1492687659997{margin-bottom: 28px !important;}</style><noscript><style type="text/css">
      .wpb_animate_when_almost_visible { opacity: 1; }
    </style>
    </noscript>

    <!-- For register html -->
    <!-- vendor css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/animate/animate.min.css">

    <!-- theme css -->
    <link rel="stylesheet" href="css/theme.min.css">
  </head>

  <body class="home page-template-default page page-id-11 esport-class  esport-shop-column-4 wpb-js-composer js-comp-ver-5.3 vc_responsive">
    <!-- Header and main site content -->
    <div class="esport-wrapper" id="general-wrapper">
      <div class="site-content">
        <div class="header header-style-1 remove-gap">
          <div class="container">
            <div class="header-main-area">
              <div class="header-logo">
                <div class="logo">
                  <a href="index.html" class="site-logo">
                    <img alt="Logo" src="http://demo.gloriathemes.com/wp/esport/wp-content/themes/esport/assets/img/logo.png"  />
                  </a>
                </div>
              </div>

              <div class="header-elements">
                <ul class="social-links">
                  <li>
                    <a href="https://www.facebook.com/gloriathemes/" class="facebook" title="Facebook" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>

                  <li>
                    <a href="https://twitter.com/GloriaThemes" class="twitter" title="Twitter" target="_blank">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>

                  <li>
                    <a href="https://plus.google.com/111420305296774523403" class="googleplus" title="Google+" target="_blank">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>

                  <li>
                    <a href="https://www.instagram.com/gloriathemes/" class="instagram" title="Instagram" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>

                  <li>
                    <a href="https://www.twitch.tv/" class="twitch" title="Twitch" target="_blank">
                      <i class="fa fa-twitch"></i>
                    </a>
                  </li>
                </ul>

                <!-- Search Bar -->
                <div class="header-search">
                  <div class="header-search-content-wrapper">
                    <i class="fa fa-search"></i>
                    <div class="header-search-content">
                      <form role="search" method="get" id="esportsearchform-250754" class="searchform" action="http://demo.gloriathemes.com/wp/esport/">
                        <div class="search-form-widget">
                          <input type="text" value="" placeholder="Search" name="s" id="esport-search-form-250754" class="searchform-text" />
                          <button><i class="fa fa-search"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>


              <div class="header-menu">
                <nav class="navbar">
                  <div class="collapse navbar-collapse">
                    <ul id="menu-main-menu" class="nav navbar-nav">
                      <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                        <a href="about/index.html">About Us</a></li>
                      <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                        <a href="teams/index.html">Teams</a></li>
                      <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
                        <a href="esport-fixtures/index.html">Fixtures</a></li>
                      <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
                        <a href="tickets/index.php">Tickets</a></li>
                      <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                        <a href="news/index.html">News</a></li>

                      <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                          <a href="faq/index.html">FAQ</a></li>

                          <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                              <a href="sponsors/index.html">Sponsors</a></li>


                      <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="contact/index.html">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <!-- Header for the mobile version -->
        <header class="mobile-header">
          <div class="logo-area">
            <div class="container">
              <div class="header-logo">
                <div class="logo"><a href="index.html" class="site-logo">
                  <img alt="Logo" src="http://demo.gloriathemes.com/wp/esport/wp-content/themes/esport/assets/img/logo.png"  />
                </a>
              </div>
            </div>

          <div class="mobile-menu-icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </header>

    <div class="mobile-menu-wrapper"></div>
    <div class="mobile-menu scrollbar-outer">
      <div class="mobile-menu-top">
        <div class="logo-area">
          <div class="header-logo">
            <div class="logo">
              <a href="http://demo.gloriathemes.com/wp/esport/" class="site-logo">
                <img alt="Logo" src="http://demo.gloriathemes.com/wp/esport/wp-content/themes/esport/assets/img/logo.png"  />
              </a>
            </div>
          </div>

        <div class="mobile-menu-icon">
          <i class="fa fa-times-thin" aria-hidden="true"></i>
        </div>
      </div>

      <nav class="mobile-navbar">
        <div class="collapse navbar-collapse">
          <ul id="menu-main-menu-1" class="nav navbar-nav">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-13" data-dropdown="dropdown">
              <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">
                Homepages<i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>

              <ul role="menu" class=" dropdown-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-30">
                  <a href="http://demo.gloriathemes.com/wp/esport/">
                    Home 1
                  </a>
                </li>

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282">
                  <a href="http://demo.gloriathemes.com/wp/esport/home-2/">
                    Home 2
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
              <a href="http://demo.gloriathemes.com/wp/esport/about/">
                About
              </a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
              <a href="http://demo.gloriathemes.com/wp/esport/teams/">
                Teams
              </a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
              <a href="http://demo.gloriathemes.com/wp/esport/esport-fixtures/">
                Fixtures
              </a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
              <a href="http://demo.gloriathemes.com/wp/esport/sponsors/">
                Sponsors
              </a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
              <a href="http://demo.gloriathemes.com/wp/esport/blog-1/">
                Blog
              </a>
            </li>

            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown menu-item-29" data-dropdown="dropdown">
              <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">
                Pages<i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>

              <ul role="menu" class=" dropdown-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47">
                  <a href="http://demo.gloriathemes.com/wp/esport/gallery/">
                    Gallery
                  </a>
                </li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-461" data-dropdown="dropdown">
                  <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">
                    Blog Pages<i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>

                  <ul role="menu" class=" dropdown-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-462">
                      <a href="http://demo.gloriathemes.com/wp/esport/blog-1/">
                        Blog 1
                      </a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-463">
                      <a href="http://demo.gloriathemes.com/wp/esport/blog-2/">
                        Blog 2
                      </a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-464">
                      <a href="http://demo.gloriathemes.com/wp/esport/blog-3/">
                        Blog 3
                      </a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465">
                      <a href="http://demo.gloriathemes.com/wp/esport/blog-4/">
                        Blog 4
                      </a>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-466">
                      <a href="http://demo.gloriathemes.com/wp/esport/blog-5/">
                        Blog 5
                      </a>
                    </li>

                  </ul>
                </li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467">
                  <a href="http://demo.gloriathemes.com/wp/esport/forums/">
                    Forums
                  </a>
                </li>

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2021">
                  <a href="http://demo.gloriathemes.com/wp/esport/shop/">
                    Shop
                  </a>
                </li>

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45">
                  <a href="http://demo.gloriathemes.com/wp/esport/page-example-1/">
                    Page Example 1
                  </a>
                </li>

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                  <a href="http://demo.gloriathemes.com/wp/esport/page-example-2/">
                    Page Example 2
                  </a>
                </li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-1955 active">
                  <a href="http://demo.gloriathemes.com/wp/esport/404">
                    404 Page
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28">
              <a href="http://demo.gloriathemes.com/wp/esport/contact/">
                Contact
              </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

    <div class="mobile-menu-bottom">
      <ul class="social-links">
        <li>
          <a href="https://www.facebook.com/gloriathemes/" class="facebook" title="Facebook" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
        </li>

        <li><a href="https://twitter.com/GloriaThemes" class="twitter" title="Twitter" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      </li>

      <li>
        <a href="https://plus.google.com/111420305296774523403" class="googleplus" title="Google+" target="_blank">
          <i class="fa fa-google-plus"></i>
        </a>
      </li>

      <li>
        <a href="https://www.instagram.com/gloriathemes/" class="instagram" title="Instagram" target="_blank">
          <i class="fa fa-instagram"></i>
        </a>
      </li>

      <li>
        <a href="https://www.twitch.tv/" class="twitch" title="Twitch" target="_blank">
          <i class="fa fa-twitch"></i>
        </a>
      </li>
    </ul>

    <div class="header-search">
      <div class="header-search-content-wrapper">
        <i class="fa fa-search"></i>
        <div class="header-search-content">
          <form role="search" method="get" id="esportsearchform-59351" class="searchform" action="http://demo.gloriathemes.com/wp/esport/">
            <div class="search-form-widget">
              <input type="text" value="" placeholder="Search" name="s" id="esport-search-form-59351" class="searchform-text" />
              <button><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End of mobile header-->

    <!-- MAIN -->
    <!-- Register -->
    <section class="bg-image bg-image-sm" style="background-image: url('img/bg/bg-login.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-4 mx-auto">
            <div class="card">
              <div class="card-header">

                <h4 class="card-title">
                  <i class="fa fa-user-plus"></i>
                  Register a new account
                </h4>

              </div>

              <div class="card-block">
                <form method="post">
                  <a class="btn btn-social btn-google-plus btn-block btn-icon-left" href="#" role="button">
                    <i class="fa fa-google-plus"></i>
                     Register with Google Plus</a>


                <div class="divider">
                  <span>or</span>
                </div>

                <div class="form-group input-icon-left m-b-10">
                  <i class="fa fa-user"></i>
                  <input type="text" class="form-control form-control-secondary" name="txt_uname" placeholder="Username">
                </div>

                <div class="form-group input-icon-left m-b-10">
                  <i class="fa fa-envelope"></i>
                  <input type="email" class="form-control form-control-secondary" name="txt_umail" placeholder="Email Address">
                </div>

                <div class="divider"><span>Security</span></div>
                <div class="form-group input-icon-left m-b-10">
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control form-control-secondary" name="txt_upass" placeholder="Password">
                </div>

                <div class="form-group input-icon-left m-b-10">
                  <i class="fa fa-unlock"></i>
                  <input type="password" class="form-control form-control-secondary" placeholder="Repeat Password">
                </div>

                <div class="divider"><span>I am not a robot</span></div>
                <div class="g-recaptcha-outer">
                  <script src='../../www.google.com/recaptcha/api.js'></script>
                  <div class="g-recaptcha" data-sitekey="6LeBwhwUAAAAAG1RDj-rS2Wu4WYNoV021q0z-LNY"></div>
                </div>

                <div class="divider"><span>Terms of Service</span></div>

                <label class="custom-control custom-checkbox custom-checkbox-primary custom-checked">
                  <input type="checkbox" class="custom-control-input" checked="">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Subscribe to monthly newsletter</span>
                </label>

                <label class="custom-control custom-checkbox custom-checkbox-primary">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Accept <a href="#" data-toggle="modal" data-target="#terms">terms of service</a></span>
                </label>

                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                    <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                  </button>
                </div>

              </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="terms">
        <div class="modal-dialog modal-top" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                <i class="fa fa-file-text-o"></i>
                Terms of Service
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6>1. Morbi ut pharetra tellus</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis justo vel lorem sagittis, eu bibendum ipsum accumsan. Donec congue eget elit ut posuere. Curabitur congue, enim a viverra ultrices, elit velit auctor neque, eget vehicula augue purus
                et lectus. Mauris cursus ac ex in vehicula. Sed ut sagittis eros. Vivamus accumsan diam vitae lectus consectetur aliquet. Proin varius tempor ullamcorper. Quisque malesuada mollis arcu, in euismod nisi pharetra pellentesque. Sed ullamcorper quis dui sed
                varius. Fusce efficitur augue purus, vitae mattis orci blandit ac. Integer suscipit arcu ac diam tincidunt, sed elementum augue lobortis.
              </p>
                <p>Pellentesque finibus dui dui, sit amet scelerisque neque venenatis non. Nullam gravida nisi pretium malesuada luctus. Nunc porttitor ipsum a massa gravida congue. Vestibulum dapibus mauris sit amet volutpat faucibus. Nulla lacinia diam sed ultricies venenatis.
                  Ut ultricies, urna commodo aliquam molestie, lectus leo efficitur tellus, et aliquam magna magna id est. In euismod ac magna quis imperdiet.
                </p>
                  <p>Aliquam ornare elit neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi ut pharetra tellus. Vestibulum a dui nisl. Sed commodo sodales dolor, et malesuada nulla consectetur vitae. Quisque nec neque ac tellus auctor pellentesque
                    vel eleifend urna. Phasellus non urna id tellus fringilla hendrerit. Quisque vel mauris nisi. Mauris nec odio vitae sapien sodales lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam sit amet nisi quis ex pretium congue id id
                    magna. Aenean dictum justo sit amet augue mollis ullamcorper. Aliquam mattis vel mauris et elementum. Morbi et risus quis nisl ullamcorper pulvinar eget et erat.</p>
                    <p>Ut viverra urna non orci interdum, in viverra urna pretium. Suspendisse potenti. Mauris et massa a enim lobortis facilisis. In hac habitasse platea dictumst. Ut varius erat vulputate libero sagittis, vitae feugiat nibh malesuada. Sed vel lacinia urna.
                      Curabitur eget dui nisi.</p>
                  <p>Vivamus orci felis, varius tempor lacus eu, scelerisque bibendum nunc. Vestibulum rutrum, enim quis maximus pretium, nisi est condimentum magna, venenatis dignissim magna nulla quis felis. Quisque id tellus nec mauris sagittis mattis non et quam. Etiam
                  posuere, tellus sed tincidunt egestas, tortor orci interdum risus, nec egestas dolor tortor non turpis. Curabitur in tellus laoreet, congue eros a, bibendum tortor. Nulla in facilisis libero, sit amet sagittis tellus. Aliquam nec pulvinar velit, mattis
                  pharetra urna. Donec et tincidunt libero. Duis at nisi in neque vulputate tempus. Curabitur et lobortis lacus. In sagittis egestas lorem, nec bibendum lacus maximus sed.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
              </div>
            </div>
          </div>
        </div>

    </section>

    <!-- Footer Bottom of site-->
    <footer class="footer footer-style1 remove-gap" id="Footer">
      <div class="container">
        <div class="footer-content">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-4">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">

                  <div class="content-title-element white size2">
                    <div class="title">
                      About &amp; <span>Contact</span>
                    </div>
                  </div>

                  <div class="vc_empty_space"   style="height: 25px" >
                    <span class="vc_empty_space_inner"></span>
                  </div>

                  <div class="esport-contact-box">
                    <div class="contact-row about-text">
                      The MDC also known as Marvelous Dota2 Championship, the successor to the MDC Major Series, is a tournament series organized by the Electronic Sports League.

                    </div>

                    <div class="contact-row address">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Arena of Stars, Resort World Genting, Malaysia
                    </div>

                    <div class="contact-row email">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:info@MDC.com">info@MDC.com</a>
                    </div>

                    <div class="contact-row phone">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <a href="tel:++0166633366">+0166633366</a>
                    </div>

                    <div class="contact-row fax">
                      <i class="fa fa-fax" aria-hidden="true"></i>
                      +0166633367
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="wpb_column vc_column_container vc_col-sm-2">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="content-title-element white size2">
                    <div class="title">
                      Menu
                     </div>
                   </div>

                   <div class="vc_empty_space" style="height: 25px" >
                     <span class="vc_empty_space_inner"></span>
                   </div>

                   <div  class="vc_wp_custommenu wpb_content_element">
                     <div class="widget widget_nav_menu">
                       <div class="menu-footer-menu-container">
                         <ul id="menu-footer-menu" class="menu">
                           <li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-215">
                             <a href="../index.html">Home</a>
                           </li>

                           <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216">
                             <a href="../about/index.html">About</a>
                           </li>

                           <li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217">
                             <a href="../teams/index.html">Teams</a>
                           </li>

                           <li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-218">
                             <a href="../esport-fixtures/index.html">Fixtures</a>
                           </li>

                           <li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221">
                             <a href="../tickets/index.html">Tickets</a>
                           </li>

                           <li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252">
                             <a href="../news/index.html">News</a>
                           </li>

                           <li id="menu-item-253" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-253">
                             <a href="category/videos/index.html">Videos</a>
                           </li>

                           <li id="menu-item-222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220">
                             <a href="../faq/index.html">FAQ</a>
                           </li>
                           <li id="menu-item-220" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item menu-item-222">
                             <a href="../contact/index.php">Contact</a>
                           </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="wpb_column vc_column_container vc_col-sm-3">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="content-title-element white size2">
                    <div class="title">
                      Latest <span>Posts</span>
                    </div>
                  </div>

                  <div class="vc_empty_space"   style="height: 25px" >
                    <span class="vc_empty_space_inner"></span>
                  </div>

                  <div class="esport-latest-posts-element style3">
                    <div class="archive-post-list-style-3 post-list">
                      <div class="post-list-styles post-list-style-3">
                        <div class="image">
                          <a href="../news/vp-champion.html" title="Virtus.Pro are the MDC Genting Champions">
                            <img src="wp-content/uploads/2017/05/vp-champion-150x150.jpg" alt="Virtus.Pro are the MDC Genting Champions" />
                          </a>
                        </div>

                        <div class="desc">
                          <div class="title">
                            <a href="../news/vp-champion.html" title="Virtus.Pro are the MDC Genting Champions">
                              Virtus.Pro are the MDC Genting Champions
                            </a>
                          </div>

                          <div class="post-information">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Oct 29, 2017
                          </div>
                        </div>
                      </div>

                      <div class="post-list-styles post-list-style-3">
                        <div class="image">
                          <a href="../news/liquid.html" title="Team Liquid is the final team to secure a spot in the playoffs at MDC Genting">
                            <img src="wp-content/uploads/2017/05/liquid-news-150x150.jpg" alt="Team Liquid is the final team to secure a spot in the playoffs at MDC Genting" />
                          </a>
                        </div>

                        <div class="desc">
                          <div class="title">
                            <a href="../news/liquid.html" title=" Team Liquid is the final team to secure a spot in the playoffs at MDC Genting">
                              Team Liquid is the final team to secure a spot in the playoffs at MDC Genting
                            </a>
                          </div>

                          <div class="post-information">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Oct 28, 2017
                          </div>
                        </div>
                      </div>

                      <div class="post-list-styles post-list-style-3">
                        <div class="image">
                          <a href="../news/newbee.html" title="Newbee claim a stunning 2-1 victory over EG">
                            <img src="wp-content/uploads/2017/05/newbee-news-150x150.jpg" alt="Newbee claim a stunning 2-1 victory over EG" />
                          </a>
                        </div>

                        <div class="desc">
                          <div class="title">
                            <a href="../news/newbee.html" title="Newbee claim a stunning 2-1 victory over EG">
                              Newbee claim a stunning 2-1 victory over EG
                            </a>
                          </div>

                          <div class="post-information">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          Oct 28, 2017
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="wpb_column vc_column_container vc_col-sm-3">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="content-title-element white size2">
                    <div class="title">
                      Sponsors
                    </div>
                  </div>

                  <div class="vc_empty_space"   style="height: 25px" >
                    <span class="vc_empty_space_inner"></span>
                  </div>

                  <div class="swiper-container logo-carousel gloria-sliders style2" data-column-space="10" data-aplay="" data-item="3" data-sloop="">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="logo-item">
                          <a href="https://gloriathemes.com/" target=" _blank" title="Gloria Themes" >
                            <img src="http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/sponsors-white-1.png" alt="Gloria Themes" />
                          </a>
                        </div>
                      </div>

                      <div class="swiper-slide">
                        <div class="logo-item">
                          <a href="https://gloriathemes.com/" target=" _blank" title="Gloria Themes" >
                            <img src="http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/sponsors-white-2.png" alt="Gloria Themes" />
                          </a>
                        </div>
                      </div>


                      <div class="swiper-slide">
                        <div class="logo-item">
                          <a href="https://gloriathemes.com/" target=" _blank" title="Gloria Computers" >
                            <img src="http://demo.gloriathemes.com/wp/esport/wp-content/uploads/2017/04/sponsors-white-3.png" alt="Gloria Computers" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="vc_empty_space"   style="height: 49px" >
                    <span class="vc_empty_space_inner"></span>
                  </div>

                  <div class="content-title-element white size2">
                    <div class="title">
                      Newsletter
                    </div>
                  </div>

                  <div class="vc_empty_space"   style="height: 25px" >
                    <span class="vc_empty_space_inner"></span>
                  </div>

                  <div class="esport-newsletter-element style2">
                    <script type="text/javascript">(function() {
                        if (!window.mc4wp) {
                          window.mc4wp = {
                            listeners: [],
                            forms    : {
                              on: function (event, callback) {
                                window.mc4wp.listeners.push({
                                  event   : event,
                                  callback: callback
                                });
                              }
                            }
                          }
                        }
                      })();
                    </script><!-- MailChimp for WordPress v4.1.9 - https://wordpress.org/plugins/mailchimp-for-wp/ -->

                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-228" method="post" data-id="228" data-name="eSport Newsletter" >
                      <div class="mc4wp-form-fields">
                        <p>
                          <input type="email" name="EMAIL" placeholder="Your email address" required />
                        </p>

                        <p class="submitButton">
                          <input type="submit" value="Sign up" />
                        </p>
                        <label style="display: none !important;">
                          Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                        </label>

                        <input type="hidden" name="_mc4wp_timestamp" value="1508400768" />
                        <input type="hidden" name="_mc4wp_form_id" value="228" />
                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                      </div>

                      <div class="mc4wp-response"></div>
                    </form><!-- / MailChimp for WordPress Plugin -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="footer-copyright ">
      <div class="container">
        <p>
          © Copyright 2017 eSport - All rights reserved.
        </p>

        <div class="menu-copyright-menu-container">
          <ul id="menu-copyright-menu" class="menu">
            <li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-260">
              <a href="http://demo.gloriathemes.com/wp/esport/">
                Home
              </a>
            </li>

            <li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261">
              <a href="http://demo.gloriathemes.com/wp/esport/payment-terms/">
                Payment Terms
              </a>
            </li>

            <li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262">
              <a href="http://demo.gloriathemes.com/wp/esport/privacy-policy/">
                Privacy Policy
              </a>
            </li>

          </ul>
        </div>
      </div>

    </div>

    <div class="modal fade pt-user-modal" id="user_login_popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="user-box">
              <div class="user-box-login">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <div class="pt-login">
                  <form id="pt_login_form" action="http://demo.gloriathemes.com/wp/esport/" method="post">
                    <div class="form-group">
                      <input class="required" name="pt_user_login" type="text" placeholder="Username" />
                    </div>
                    <div class="form-group">
                      <input class="required" name="pt_user_pass" id="pt_user_pass" type="password" placeholder="Password" />
                    </div>
                    <div class="form-group login-form-remember-me">
                      <div class="login-remember-me-wrapper">
                        <input type="checkbox" value="None" id="login-remember-me-wrapper-input" name="pt_remember_me" />
                        <label for="login-remember-me-wrapper-input" id="login-remember-me-wrapper-label">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group login-form-button">
                      <input type="hidden" name="action" value="esport_login_member"/>
                      <button data-loading-text="Loading..." type="submit">Sign in</button>
                    </div>
                    <div class="bottom-links">
                    <a href="http://demo.gloriathemes.com/wp/esport/my-account/lost-password/">Lost Password?</a>
                    <a href="" data-target="#user_register_popup" data-toggle="modal" class="create-an-account" data-dismiss="modal">Create an Account</a>
                    </div>
                    <input type="hidden" id="login-security" name="login-security" value="b193b60096" /><input type="hidden" name="_wp_http_referer" value="/wp/esport/404" />										</form>
                  <div class="pt-errors"></div>
                </div>
                <div class="pt-loading">
                  <p><i class="fa fa-refresh fa-spin"></i><br>Loading...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade pt-user-modal" id="user_register_popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="user-box">
              <div class="user-box-login">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <div class="pt-register">
                  <p class="users_can_register">New membership are not allowed.</p>									</div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Script to perform various animations -->
        <script type="text/javascript">(function() {function addEventListener(element,event,handler) {
        if(element.addEventListener) {
          element.addEventListener(event,handler, false);
        } else if(element.attachEvent) {
          element.attachEvent('on'+event,handler);
        }
        }

        function maybePrefixUrlField() {
          if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
          }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if( urlFields && urlFields.length > 0 ) {
          for( var j=0; j < urlFields.length; j++ ) {
            addEventListener(urlFields[j],'blur',maybePrefixUrlField);
          }
        }

        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if( testInput.type !== 'date') {
          /* add placeholder & pattern to all date fields */
          var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
          for(var i=0; i<dateFields.length; i++) {
            if(!dateFields[i].placeholder) {
              dateFields[i].placeholder = 'YYYY-MM-DD';
            }
            if(!dateFields[i].pattern) {
              dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
            }
          }
        }

        })();</script>

        <!--- script for wordpress js content of the site -->
        <link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='http://fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&amp;ver=4.8.2' type='text/css' media='all' />
        <script type='text/javascript' src='wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684'></script>

        <script type='text/javascript'>
          /* <![CDATA[ */
          var wpcf7 = {
            "apiSettings":{"root":"http:\/\/demo.gloriathemes.com\/wp\/esport\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"
          };
          /* ]]> */
        </script>


        <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts33a6.js?ver=4.9'></script>
        <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
        <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>

        <script type='text/javascript'>
          /* <![CDATA[ */
          var woocommerce_params = {
            "ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/?wc-ajax=%%endpoint%%"
          };
          /* ]]> */
        </script>

        <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0226.js?ver=3.1.2'></script>
        <script type='text/javascript'>
          /* <![CDATA[ */
          var wc_cart_fragments_params = {
            "ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_1aebe7a6857fda011785e08599f08999"
          };
          /* ]]> */
        </script>

        <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0226.js?ver=3.1.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/bootstrap.min4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/animate4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/scrollbar.min4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/admin-bar4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/fixed-sidebar4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/fixed-header4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.minde54.js?ver=5.3'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/swiper.min4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/counter4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/esport4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/countdown.min4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/plyr4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/select-classie4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/themes/esport/assets/js/select-fx4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-includes/js/wp-embed.min4a41.js?ver=4.8.2'></script>
        <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minde54.js?ver=5.3'></script>

        <script type='text/javascript'>
          /* <![CDATA[ */
          var mc4wp_forms_config = [];
          /* ]]> */
        </script>

        <script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min5fa1.js?ver=4.1.9'></script>
        <!-- End of scripting -->

  </body>
</html>
