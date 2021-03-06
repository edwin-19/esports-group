<?php
  require_once '../php/dbconfig.php';

  if ($user->isLoggedIn()!="") {
    if(isset($_POST['btnReg'])){
      $ticket->purchaseTicket("Regular Ticket", $_SESSION['username']);
      echo "Ticket Purchased";
    } else if (isset($_POST['btnPlus'])) {
      $ticket->purchaseTicket("Plus Ticket", $_SESSION['username']);
      echo "Plus Ticket Purchesed";
    } else if (isset($_POST['btnVIP'])) {
      $ticket->purchaseTicket("VIP Ticket", $_SESSION['username']);
      echo "VIP Ticket Purchased";
    }
  } else {
    echo "YOU ARE NOT LOGGED IN";
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="gmpg.org/xfn/11" />
    <link rel="pingback" href="../xmlrpc.php" />

    <!-- Title -->
    <title>Tickets</title>

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


      <!-- Different Script for table-->
      <link rel="alternate" type="text/calendar" title="TicketBox &raquo; iCal Feed" href="../events/indexedf3.html?ical=1" />
      		<script type="text/javascript">
      			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/dawnthemes.com\/ticketbox\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8"}};
      			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
      		</script>
      		<style type="text/css">
      img.wp-smiley,
      img.emoji {
      	display: inline !important;
      	border: none !important;
      	box-shadow: none !important;
      	height: 1em !important;
      	width: 1em !important;
      	margin: 0 .07em !important;
      	vertical-align: -0.1em !important;
      	background: none !important;
      	padding: 0 !important;
      }
      </style>
      <link rel='stylesheet' id='ticketbox-register-login-css'  href='../wp-content/themes/ticketbox/includes/ajax-register-login/assets/css/ajax-register-login.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='widget-calendar-pro-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/widget-calendar-full859d.css?ver=4.4.13' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe_events-widget-calendar-pro-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/widget-calendar-theme859d.css?ver=4.4.13' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe_events--widget-calendar-pro-override-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/widget-calendar-theme859d.css?ver=4.4.13' type='text/css' media='all' />
      <link rel='stylesheet' id='dawnthemes-instagram-css'  href='../wp-content/plugins/dawnthemes-instagram/assets/css/style.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings78d9.css?ver=5.4.3.1' type='text/css' media='all' />
      <style id='rs-plugin-settings-inline-css' type='text/css'>
      #rs-demo-id {}
      </style>
      <link rel='stylesheet' id='woocommerce-layout-css2'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout0226.css?ver=3.1.2' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css2'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen0226.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css2'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce0226.css?ver=3.1.2' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css'  href='../wp-includes/css/dashicons.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='event-tickets-plus-tickets-css'  href='../wp-content/plugins/event-tickets-plus/src/resources/css/tickets62df.css?ver=4.5.6' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe-events-full-pro-calendar-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-full.min859d.css?ver=4.4.13' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe-events-calendar-pro-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-theme.min859d.css?ver=4.4.13' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe-events-calendar-full-pro-mobile-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-full-mobile.min859d.css?ver=4.4.13' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='tribe-events-calendar-pro-mobile-style-css'  href='../wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-theme-mobile.min859d.css?ver=4.4.13' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='event-tickets-css'  href='../wp-content/plugins/event-tickets/src/resources/css/tickets.min62df.css?ver=4.5.6' type='text/css' media='all' />
      <link rel='stylesheet' id='tribe-bumpdown-css-css'  href='../wp-content/plugins/the-events-calendar/common/src/resources/css/bumpdown.min1c9b.css?ver=4.6.1' type='text/css' media='all' />
      <link rel='stylesheet' id='events-community-tickets-css'  href='../wp-content/plugins/the-events-calendar-community-events-tickets/src/resources/css/events-community-tickets.mincb20.css?ver=4.4.3' type='text/css' media='all' />
      <link rel='stylesheet' id='buttons-css'  href='../wp-includes/css/buttons.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='mediaelement-css'  href='../wp-includes/js/mediaelement/mediaelementplayer.min51cd.css?ver=2.22.0' type='text/css' media='all' />
      <link rel='stylesheet' id='wp-mediaelement-css'  href='../wp-includes/js/mediaelement/wp-mediaelement.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='media-views-css'  href='../wp-includes/css/media-views.minef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='imgareaselect-css'  href='../wp-includes/js/imgareaselect/imgareaselect3bf4.css?ver=0.9.8' type='text/css' media='all' />
      <link rel='stylesheet' id='ticketbox-google-font-css'  href='http://fonts.googleapis.com/css?family=Lato&amp;ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='bootstrap-css2'  href='../wp-content/themes/ticketbox/assets/css/bootstrap.min46df.css?ver=3.3.5' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-css'  href='../wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min3c21.css?ver=5.1.1' type='text/css' media='all' />
      <link rel='stylesheet' id='elegant-icon-css'  href='../wp-content/plugins/dawnthemes/assets/lib/elegant-icon/css/elegant-iconef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='../wp-content/themes/ticketbox/assets/lib/magnific-popup/magnific-popupef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='owl.theme-css'  href='../wp-content/themes/ticketbox/assets/lib/owl-carousel/owl.theme3ba1.css?ver=1.3.3' type='text/css' media='all' />
      <link rel='stylesheet' id='owl.transitions-css'  href='../wp-content/themes/ticketbox/assets/lib/owl-carousel/owl.transitions9e1e.css?ver=1.3.2' type='text/css' media='all' />
      <link rel='stylesheet' id='owl.carousel-css'  href='../wp-content/themes/ticketbox/assets/lib/owl-carousel/owl.carousel3ba1.css?ver=1.3.3' type='text/css' media='all' />
      <link rel='stylesheet' id='slick-css'  href='../wp-content/themes/ticketbox/assets/lib/slick/slickef15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='revealer-css'  href='../wp-content/themes/ticketbox/assets/lib/BlockRevealers/css/revealeref15.css?ver=4.8' type='text/css' media='all' />
      <link rel='stylesheet' id='ticketbox-woocommerce-css'  href='../wp-content/themes/ticketbox/assets/css/woocommerce.mind279.css?ver=1.1.5' type='text/css' media='all' />
      <link rel='stylesheet' id='ticketbox-css'  href='../wp-content/themes/ticketbox/assets/css/style.mind279.css?ver=1.1.5' type='text/css' media='all' />
      <!--[if lt IE 9]>
      <link rel='stylesheet' id='ie-css'  href='http://dawnthemes.com/ticketbox/wp-admin/css/ie.min.css?ver=4.8' type='text/css' media='all' />
      <![endif]-->
      <link rel='stylesheet' id='ticketbox-wp-css'  href='../wp-content/themes/ticketbox/styled279.css?ver=1.1.5' type='text/css' media='all' />
      <style id='ticketbox-wp-inline-css' type='text/css'>
      body.tribe_community_edit #dawnthemes-page,body.tribe_community_edit .site-header.has-header-background{background-image:url(../wp-content/uploads/2017/08/Live-Venue-Tix.jpg) !important;}
      #footer-sidebar .widget.tribe-events-adv-list-widget .tribe-events-widget-link{display:none;} @media (max-width:1024px){.site-header.has-header-background{background-attachment:scroll;}}
      </style>
      <link rel='stylesheet' id='js_composer_front-css2'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min3c21.css?ver=5.1.1' type='text/css' media='all' />
      <script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
      <script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
      <script type='text/javascript' src='../wp-content/themes/ticketbox/includes/ajax-register-login/assets/js/jquery.validate.minef15.js?ver=4.8'></script>
      <script type='text/javascript'>
      /* <![CDATA[ */
      var ticketbox_ajax_auth_object = {"ajaxurl":"http:\/\/dawnthemes.com\/ticketbox\/wp-admin\/admin-ajax.php","redirecturl":"http:\/\/dawnthemes.com\/ticketbox\/","register_redirect":"http:\/\/dawnthemes.com\/ticketbox\/","loadingmessage":"Sending user info, please wait..."};
      /* ]]> */
      </script>
      <script type='text/javascript' src='../wp-content/themes/ticketbox/includes/ajax-register-login/assets/js/ajax-register-login.minef15.js?ver=4.8'></script>
      <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min78d9.js?ver=5.4.3.1'></script>
      <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min78d9.js?ver=5.4.3.1'></script>
      <script type='text/javascript'>
      /* <![CDATA[ */
      var wc_add_to_cart_params = {"ajax_url":"\/ticketbox\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/ticketbox\/pricing-table\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/dawnthemes.com\/ticketbox\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
      /* ]]> */
      </script>
      <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0226.js?ver=3.1.2'></script>
      <script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart3c21.js?ver=5.1.1'></script>
      <script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
      <script type='text/javascript'>
      jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
      </script>
      <script type='text/javascript'>
      /* <![CDATA[ */
      var TribeTickets = {"add_ticket_nonce":"fa4b18a133","edit_ticket_nonce":"a4bd12e0b8","remove_ticket_nonce":"fe2568f491","ajaxurl":"http:\/\/dawnthemes.com\/ticketbox\/wp-admin\/admin-ajax.php"};
      var tribe_ticket_notices = {"confirm_alert":"Are you sure you want to delete this ticket? This cannot be undone."};
      var price_format = {"decimal":".","decimal_error":"Please enter in without thousand separators and currency symbols."};
      var HeaderImageData = {"title":"Ticket header image","button":"Set as ticket header"};
      /* ]]> */
      </script>
      <script type='text/javascript' src='../wp-content/plugins/event-tickets/src/resources/js/tickets.min62df.js?ver=4.5.6'></script>
      <script type='text/javascript' src='../wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
      <script type='text/javascript' src='../wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
      <script type='text/javascript' src='../wp-content/plugins/the-events-calendar/common/src/resources/js/bumpdown.min1c9b.js?ver=4.6.1'></script>
      <script type='text/javascript' src='../wp-content/plugins/the-events-calendar-community-events-tickets/src/resources/js/events-community-tickets.mincb20.js?ver=4.4.3'></script>
      <script type='text/javascript'>
      /* <![CDATA[ */
      var userSettings = {"url":"\/ticketbox\/","uid":"0","time":"1510497692","secure":""};
      /* ]]> */
      </script>
      <script type='text/javascript' src='../wp-includes/js/utils.minef15.js?ver=4.8'></script>
      <script type='text/javascript' src='../wp-includes/js/plupload/plupload.full.mincc91.js?ver=2.1.8'></script>
      <!--[if lt IE 8]>
      <script type='text/javascript' src='http://dawnthemes.com/ticketbox/wp-includes/js/json2.min.js?ver=2015-05-03'></script>
      <![endif]-->
      <script type='text/javascript' src='../wp-content/plugins/event-tickets-plus/vendor/jquery.deparam/jquery.deparam62df.js?ver=4.5.6'></script>
      <link rel='https://api.w.org/' href='../wp-json/index.html' />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
      <meta name="generator" content="WordPress 4.8" />
      <meta name="generator" content="WooCommerce 3.1.2" />
      <link rel="canonical" href="index.html" />
      <link rel='shortlink' href='../indexbd7b.html?p=1018' />
      <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed5f62.json?url=http%3A%2F%2Fdawnthemes.com%2Fticketbox%2Fpricing-table%2F" />
      <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embedc623?url=http%3A%2F%2Fdawnthemes.com%2Fticketbox%2Fpricing-table%2F&amp;format=xml" />
      <meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="http://dawnthemes.com/ticketbox"><link rel="https://theeventscalendar.com/" href="../wp-json/tribe/events/v1/index.html" />			<script type="text/javascript">
      			var ticketbox_retina = 'retina='+ window.devicePixelRatio +';'+ ticketbox_retina;
      			document.cookie = ticketbox_retina;
      			if(document.cookie){
      				// document.location.reload(true);
      			}
      			</script>
      			<script type="text/javascript">
      		var ticketbox_dt_ajaxurl = '../wp-admin/admin-ajax.html';
      	</script>
      	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
      			<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
      		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
      <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://dawnthemes.com/ticketbox/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <link rel="icon" href="../wp-content/uploads/2017/03/favicon.png" sizes="32x32" />
      <link rel="icon" href="../wp-content/uploads/2017/03/favicon.png" sizes="192x192" />
      <link rel="apple-touch-icon-precomposed" href="../wp-content/uploads/2017/03/favicon.png" />
      <meta name="msapplication-TileImage" content="http://dawnthemes.com/ticketbox/wp-content/uploads/2017/03/favicon.png" />
      <script type="text/javascript">function setREVStartSize(e){
      				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
      					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
      				}catch(d){console.log("Failure at Presize of Slider:"+d)}
      			};</script>

      <noscript>
        <style type="text/css">
          .wpb_animate_when_almost_visible { opacity: 1; }
        </style>
      </noscript>
  </head>

  <!-- Main body of the site -->
  <body class="home page-template-default page page-id-11 esport-class  esport-shop-column-4 wpb-js-composer js-comp-ver-5.3 vc_responsive">
    <!-- Header and main site content -->
    <div class="esport-wrapper" id="general-wrapper">
      <div class="site-content">
        <div class="header header-style-1 remove-gap">
          <div class="container">
            <div class="header-main-area">
              <div class="header-logo">
                <div class="logo">
                  <a href="../index.html" class="site-logo">
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
                    <a href="https://www.twitch.tv/" class="twitch" title="Twitch" target="_blank">
                      <i class="fa fa-twitch"></i>
                    </a>
                  </li>

                  <li>
                    <a href="../login.php" class="login" title="Login">
                        <i class="fa fa-user-circle-o"></i>
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
                        <a href="../about/index.html">About Us</a></li>
                      <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                        <a href="../teams/index.html">Teams</a></li>
                      <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
                        <a href="../esport-fixtures/index.html">Fixtures</a></li>
                      <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
                        <a href="#">Tickets</a></li>
                      <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
                        <a href="../news/index.html">News</a></li>

                      <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                          <a href="../faq/index.html">FAQ</a></li>

                      <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
                          <a href="../sponsors/index.html">Sponsors</a></li>


                      <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28">
                        <a href="#">
                          Contact
                        </a>
                      </li>
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
                <div class="logo"><a href="../index.html" class="site-logo">
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
              <a href="../index.html" class="site-logo">
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
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
              <a href="../about/index.html">About</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
              <a href="../teams/index.html">Teams</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
              <a href="../esport-fixtures/index.html">Fixtures</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
              <a href="../ticket/index.html">Ticket</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
              <a href="../news/index.html">News</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
              <a href="../faq/index.html">FAQ</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
              <a href="../faq/index.html">Sponsors</a>
            </li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28">
              <a href="#">
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
        <a href="https://www.twitch.tv/" class="twitch" title="Twitch" target="_blank">
          <i class="fa fa-twitch"></i>
        </a>
      </li>

      <li>
        <a href="login.html" class="login" title="Login">
            <i class="fa fa-user-circle-o"></i>
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
<!-- End of mobile header-->

<!-- Main -->
<div id="dawnthemes-page">
  <div class="container main-container" >
    <div id="main" class="wrapper site-main clearfix ">
      <div id="main-content">
        <div class="row">
          <div id="primary" class="content-area col-md-12 main-wrap">
            <div id="content" class="main-content site-content" role="main">
              <article id="post-1018" class="post-1018 page type-page status-publish hentry">
                <div class="entry-content">
                  <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">

                          <h3 style="text-align: center" class="vc_custom_heading" >
                            Pricing Table
                          </h3>

                          <div class="wpb_text_column wpb_content_element " >
                            <div class="wpb_wrapper">
                              <p style="text-align: center;">
                                Bald packed one much that unstinting crud more a in plankton flipped
                              </p>
                            </div>
                          </div>

                          <div class="ticketbox-pricing-table clearfix pricing-3-column">
                            <div class="pricing-column ">
                              <div class="pricing-column-wrap">
                                <div class="pricing-column-content">
                                  <div class="pricing-header ">
                                    <div class="pricing-title">
                                      <h3>
                                        Regular Ticket
                                      </h3>
                                    </div>

                                    <div class="pricing-price">
                                      <div class="price-value">
                                        <sup>RM</sup>188
                                      </div>
                                    </div>
                                  </div>

                                  <div class="pricing-body">
                                    <ul class="pricing-features">
                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        3 day full of Dota 2 action
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Free seating in the ranks
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Access to signing sessions with teams
                                      </li>
                                    </ul>
                                  </div>
                                </div>

                                <form method="post">
                                  <div class="pricing-footer ticketbox-main-color-bg">
                                    <div class="pricing-footer-wrap">
                                      <button type="submit" name="btnReg" class="btn-pricing-table" style="margin-left: auto; margin-right: auto; width: 8em">
                                        Buy Ticket
                                      </button>
                                    </div>
                                  </div>
                                </form>

                                <div class="pricing-bg-over"></div>
                              </div>
                            </div>

                            <div class="pricing-column  pricing-recommend">
                              <div class="pricing-column-wrap">
                                <div class="pricing-column-content">
                                  <div class="pricing-header  ticketbox-main-color-bg">
                                    <div class="pricing-title">
                                      <h3>
                                        PLUS TICKET
                                      </h3>
                                    </div>

                                    <div class="pricing-price">
                                      <div class="price-value">
                                        <sup>RM</sup>394
                                      </div>
                                    </div>
                                  </div>

                                  <div class="pricing-body">
                                    <ul class="pricing-features">
                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        3 days full of Dota 2 action
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Exclusive Goodie Bag
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Access to signing sessions with teams
                                      </li>
                                    </ul>
                                  </div>
                                </div>

                                <form method="post">
                                  <div class="pricing-footer ticketbox-main-color-bg">
                                    <div class="pricing-footer-wrap">
                                      <button type="submit" name="btnPlus" class="btn-pricing-table" style="margin-left: auto; margin-right: auto; width: 8em">
                                        Buy Ticket
                                      </button>
                                    </div>
                                  </div>
                                </form>

                                <div class="pricing-bg-over"></div>
                              </div>
                            </div>

                            <div class="pricing-column ">
                              <div class="pricing-column-wrap">
                                <div class="pricing-column-content">
                                  <div class="pricing-header ">
                                    <div class="pricing-title">
                                      <h3>
                                        VIP TICKET
                                      </h3>
                                    </div>

                                    <div class="pricing-price">
                                      <div class="price-value">
                                        <sup>RM</sup>765
                                      </div>
                                    </div>
                                  </div>

                                  <div class="pricing-body">
                                    <ul class="pricing-features">
                                      <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>3 days full of Dota 2 action
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true">
                                        </i>Exclusive Signing Sessions
                                      </li>

                                      <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Exclusive Goodie Bag
                                      </li>
                                    </ul>
                                  </div>
                                </div>

                                <form method="post">
                                  <div class="pricing-footer ticketbox-main-color-bg">
                                    <div class="pricing-footer-wrap">
                                      <button type="submit" name="btnVIP" class="btn-pricing-table" style="margin-left: auto; margin-right: auto; width: 8em">
                                        Buy Ticket
                                      </button>
                                    </div>
                                  </div>
                                </form>

                                <div class="pricing-bg-over">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- .entry-content -->

                <!-- SVG code -->

                <svg width="300px" height="100px"
                  xmlns="http://www.w3.org/2000/svg">
                  <text x="10" y="50" font-size="30">Stage</text>
                  <div style="background-color: black;">
                    <img src="../img/seating_map.png" alt="Aleter" />
                  </div>
                </svg>


              </article><!-- #post-## -->

            </div><!-- #content -->
          </div><!-- #primary -->
        </div><!-- .row -->
      </div><!-- #main-content -->
    </div><!-- #main -->
  </div><!-- .container.main-container -->
</div><!-- #dawnthemes-page -->

    <!-- End of main -->
    <footer class="footer footer-style1 remove-gap-removed" id="Footer">
          <div class="container">
          <div class="footer-content">
                        <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="content-title-element white size2"><div class="title">About &amp; <span>Contact</span></div></div><div class="vc_empty_space"   style="height: 25px" ><span class="vc_empty_space_inner"></span></div>
    <div class="esport-contact-box"><div class="contact-row about-text">The MDC also known as Marvelous Dota2 Championship, the successor to the MDC Major Series, is a tournament series organized by the Electronic Sports League.</div><div class="contact-row address"><i class="fa fa-map-marker" aria-hidden="true"></i>Arena of Stars, Resort World Genting, Malaysia</div><div class="contact-row email"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@MDC.com">info@MDC.com</a></div><div class="contact-row phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+0166633366">+0166633366</a></div><div class="contact-row fax"><i class="fa fa-fax" aria-hidden="true"></i>+0166633367</div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="content-title-element white size2"><div class="title">Menu </div></div><div class="vc_empty_space"   style="height: 25px" ><span class="vc_empty_space_inner"></span></div>
    <div  class="vc_wp_custommenu wpb_content_element"><div class="widget widget_nav_menu"><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-215"><a href="../index.html">Home</a></li>
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
      <a href="index.html">Contact</a>
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

        <div class="vc_empty_space"   style="height: 25px" ><span class="vc_empty_space_inner"></span></div>
    <div class="esport-latest-posts-element style3">
      <div class="archive-post-list-style-3 post-list">
        <div class="post-list-styles post-list-style-3">
          <div class="image">
            <a href="../news/vp-champion.html" title="Virtus.Pro are the MDC Genting Champions">
              <img src="../wp-content/uploads/2017/05/vp-champion-150x150.jpg" alt="Virtus.Pro are the MDC Genting Champions" />
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
              <img src="../wp-content/uploads/2017/05/liquid-news-150x150.jpg" alt="Team Liquid is the final team to secure a spot in the playoffs at MDC Genting" />
            </a>
          </div>

          <div class="desc">
            <div class="title">
              <a href="../news/liquid.html" title="Team Liquid is the final team to secure a spot in the playoffs at MDC Genting">
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
            <a href="../news/newbee.html" title="Newbee claim a stunning 2-1 victory over EG ">
              <img src="../wp-content/uploads/2017/05/newbee-news-150x150.jpg" alt="Newbee claim a stunning 2-1 victory over EG " />
            </a>
          </div>

          <div class="desc">
            <div class="title">
              <a href="../news/newbee.html" title="Newbee claim a stunning 2-1 victory over EG ">
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


</div>
</div>
</div>
</footer>
    <div class="footer-copyright "><div class="container"><p>© Copyright 2017 eSport - All rights reserved.</p><div class="menu-copyright-menu-container"><ul id="menu-copyright-menu" class="menu"><li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-260"><a href="../index.html">Home</a></li>
    <li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="../payment-terms/index.html">Payment Terms</a></li>
    <li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="../privacy-policy/index.html">Privacy Policy</a></li>
    </ul></div></div></div>
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
                <a href="../my-account/lost-password/index.html">Lost Password?</a>
                <a href="#" data-target="#user_register_popup" data-toggle="modal" class="create-an-account" data-dismiss="modal">Create an Account</a>
                </div>
                <input type="hidden" id="login-security" name="login-security" value="b193b60096" /><input type="hidden" name="_wp_http_referer" value="/wp/esport/contact/" />										</form>
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
    <script type="text/javascript">(function() {function addEventListener(element,event,handler) {
    if(element.addEventListener) {
    element.addEventListener(event,handler, false);
    } else if(element.attachEvent){
    element.attachEvent('on'+event,handler);
    }
    }function maybePrefixUrlField() {
    if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
    this.value = "http://" + this.value;
    }
    }

    var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
    if( urlFields && urlFields.length > 0 ) {
    for( var j=0; j < urlFields.length; j++ ) {
    addEventListener(urlFields[j],'blur',maybePrefixUrlField);
    }
    }/* test if browser supports date fields */
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

    })();</script><script type='text/javascript' src='../wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.gloriathemes.com\/wp\/esport\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts33a6.js?ver=4.9'></script>
    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/contact\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0226.js?ver=3.1.2'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp\/esport\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/esport\/contact\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_1aebe7a6857fda011785e08599f08999"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0226.js?ver=3.1.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/bootstrap.min4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/animate4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/scrollbar.min4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/admin-bar4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/fixed-sidebar4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/fixed-header4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.minde54.js?ver=5.3'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/swiper.min4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/counter4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/esport4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/countdown.min4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/plyr4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/select-classie4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/themes/esport/assets/js/select-fx4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-includes/js/wp-embed.min4a41.js?ver=4.8.2'></script>
    <script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minde54.js?ver=5.3'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
    </script>
    <script type='text/javascript' src='../wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min5fa1.js?ver=4.1.9'></script>
    <!--[if lte IE 9]>
    <script type='text/javascript' src='http://demo.gloriathemes.com/wp/esport/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.9'></script>
    <![endif]-->
  </body>
</html>
