<!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js" lang="en-US"><!--<![endif]--><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" type="application/rss+xml" title="Cryptocurrency Feed" href="https://demo.themovation.com/pursuit/cryptocurrency//feed/">
  <title>Admin – Exchange Alternative – Cryptocurrency</title>
  <meta name="robots" content="max-image-preview:large">
  <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/jquery-bar-rating/dist/themes/css-stars.css">
  <link rel="stylesheet" href="node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="alternate" type="application/rss+xml" title="Cryptocurrency » Comments Feed" href="https://demo.themovation.com/pursuit/cryptocurrency/comments/feed/">
          <!-- This site uses the Google Analytics by ExactMetrics plugin v7.10.0 - Using Analytics tracking - https://www.exactmetrics.com/ -->
                              <script src="//www.googletagmanager.com/gtag/js?id=UA-36363716-1" data-cfasync="false" data-wpfc-render="false" type="text/javascript" async=""></script>
              <script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
                  var em_version = '7.10.0';
                  var em_track_user = true;
                  var em_no_track_reason = '';
                  
                                  var disableStrs = [
                                                              'ga-disable-UA-36363716-1',
                                      ];
  
                  /* Function to detect opted out users */
                  function __gtagTrackerIsOptedOut() {
                      for (var index = 0; index < disableStrs.length; index++) {
                          if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
                              return true;
                          }
                      }
  
                      return false;
                  }
  
                  /* Disable tracking if the opt-out cookie exists. */
                  if (__gtagTrackerIsOptedOut()) {
                      for (var index = 0; index < disableStrs.length; index++) {
                          window[disableStrs[index]] = true;
                      }
                  }
  
                  /* Opt-out function */
                  function __gtagTrackerOptout() {
                      for (var index = 0; index < disableStrs.length; index++) {
                          document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                          window[disableStrs[index]] = true;
                      }
                  }
  
                  if ('undefined' === typeof gaOptout) {
                      function gaOptout() {
                          __gtagTrackerOptout();
                      }
                  }
                                  window.dataLayer = window.dataLayer || [];
  
                  window.ExactMetricsDualTracker = {
                      helpers: {},
                      trackers: {},
                  };
                  if (em_track_user) {
                      function __gtagDataLayer() {
                          dataLayer.push(arguments);
                      }
  
                      function __gtagTracker(type, name, parameters) {
                          if (!parameters) {
                              parameters = {};
                          }
  
                          if (parameters.send_to) {
                              __gtagDataLayer.apply(null, arguments);
                              return;
                          }
  
                          if (type === 'event') {
                              
                                                          parameters.send_to = exactmetrics_frontend.ua;
                              __gtagDataLayer(type, name, parameters);
                                                      } else {
                              __gtagDataLayer.apply(null, arguments);
                          }
                      }
  
                      __gtagTracker('js', new Date());
                      __gtagTracker('set', {
                          'developer_id.dNDMyYj': true,
                                              });
                                                              __gtagTracker('config', 'UA-36363716-1', {"forceSSL":"true"} );
                                          window.gtag = __gtagTracker;										(function () {
                          /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                          /* ga and __gaTracker compatibility shim. */
                          var noopfn = function () {
                              return null;
                          };
                          var newtracker = function () {
                              return new Tracker();
                          };
                          var Tracker = function () {
                              return null;
                          };
                          var p = Tracker.prototype;
                          p.get = noopfn;
                          p.set = noopfn;
                          p.send = function () {
                              var args = Array.prototype.slice.call(arguments);
                              args.unshift('send');
                              __gaTracker.apply(null, args);
                          };
                          var __gaTracker = function () {
                              var len = arguments.length;
                              if (len === 0) {
                                  return;
                              }
                              var f = arguments[len - 1];
                              if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                                  if ('send' === arguments[0]) {
                                      var hitConverted, hitObject = false, action;
                                      if ('event' === arguments[1]) {
                                          if ('undefined' !== typeof arguments[3]) {
                                              hitObject = {
                                                  'eventAction': arguments[3],
                                                  'eventCategory': arguments[2],
                                                  'eventLabel': arguments[4],
                                                  'value': arguments[5] ? arguments[5] : 1,
                                              }
                                          }
                                      }
                                      if ('pageview' === arguments[1]) {
                                          if ('undefined' !== typeof arguments[2]) {
                                              hitObject = {
                                                  'eventAction': 'page_view',
                                                  'page_path': arguments[2],
                                              }
                                          }
                                      }
                                      if (typeof arguments[2] === 'object') {
                                          hitObject = arguments[2];
                                      }
                                      if (typeof arguments[5] === 'object') {
                                          Object.assign(hitObject, arguments[5]);
                                      }
                                      if ('undefined' !== typeof arguments[1].hitType) {
                                          hitObject = arguments[1];
                                          if ('pageview' === hitObject.hitType) {
                                              hitObject.eventAction = 'page_view';
                                          }
                                      }
                                      if (hitObject) {
                                          action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                                          hitConverted = mapArgs(hitObject);
                                          __gtagTracker('event', action, hitConverted);
                                      }
                                  }
                                  return;
                              }
  
                              function mapArgs(args) {
                                  var arg, hit = {};
                                  var gaMap = {
                                      'eventCategory': 'event_category',
                                      'eventAction': 'event_action',
                                      'eventLabel': 'event_label',
                                      'eventValue': 'event_value',
                                      'nonInteraction': 'non_interaction',
                                      'timingCategory': 'event_category',
                                      'timingVar': 'name',
                                      'timingValue': 'value',
                                      'timingLabel': 'event_label',
                                      'page': 'page_path',
                                      'location': 'page_location',
                                      'title': 'page_title',
                                  };
                                  for (arg in args) {
                                                                          if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                                          hit[gaMap[arg]] = args[arg];
                                      } else {
                                          hit[arg] = args[arg];
                                      }
                                  }
                                  return hit;
                              }
  
                              try {
                                  f.hitCallback();
                              } catch (ex) {
                              }
                          };
                          __gaTracker.create = newtracker;
                          __gaTracker.getByName = newtracker;
                          __gaTracker.getAll = function () {
                              return [];
                          };
                          __gaTracker.remove = noopfn;
                          __gaTracker.loaded = true;
                          window['__gaTracker'] = __gaTracker;
                      })();
                                      } else {
                                          console.log("");
                      (function () {
                          function __gtagTracker() {
                              return null;
                          }
  
                          window['__gtagTracker'] = __gtagTracker;
                          window['gtag'] = __gtagTracker;
                      })();
                                      }
              </script>
                  <!-- / Google Analytics by ExactMetrics -->
                  <script type="text/javascript">
              window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.themovation.com\/pursuit\/cryptocurrency\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.8"}};
              !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
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
      <link rel="stylesheet" id="formidable-css" href="../wp-content/plugins/formidable/css/formidableforms4_ver%3D171652.css" type="text/css" media="all">
  <link rel="stylesheet" id="themo-icons-css" href="../wp-content/plugins/th-widget-pack/assets/icons/icons_ver%3D2.1.9.css" type="text/css" media="all">
  <link rel="stylesheet" id="thmv-global-css" href="../wp-content/plugins/th-widget-pack/css/global_ver%3D1652777147.css" type="text/css" media="all">
  <link rel="stylesheet" id="wp-block-library-css" href="../wp-includes/css/dist/block-library/style.min_ver%3D5.8.8.css" type="text/css" media="all">
  <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style_ver%3D6.3.3.css" type="text/css" media="all">
  <link rel="stylesheet" id="wc-blocks-style-css" href="../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style_ver%3D6.3.3.css" type="text/css" media="all">
  <link rel="stylesheet" id="woocommerce-layout-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce-layout_ver%3D6.0.0.css" type="text/css" media="all">
  <link rel="stylesheet" id="woocommerce-smallscreen-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen_ver%3D6.0.0.css" type="text/css" media="only screen and (max-width: 768px)">
  <link rel="stylesheet" id="woocommerce-general-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce_ver%3D6.0.0.css" type="text/css" media="all">
  <style id="woocommerce-inline-inline-css" type="text/css">
  .woocommerce form .form-row .required { visibility: visible; }
  </style>
  <link rel="stylesheet" id="thhf-style-css" href="../wp-content/plugins/th-widget-pack/header-footer/assets/css/header-footer-elementor_ver%3D2.1.9.css" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-icons-css" href="../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min_ver%3D5.13.0.css" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-frontend-legacy-css" href="../wp-content/plugins/elementor/assets/css/frontend-legacy.min_ver%3D3.5.3.css" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-frontend-css" href="../wp-content/plugins/elementor/assets/css/frontend.min_ver%3D3.5.3.css" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-post-2383-css" href="../wp-content/uploads/sites/4/elementor/css/post-2383_ver%3D1644819069.css" type="text/css" media="all">
  <link rel="stylesheet" id="font-awesome-css" href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min_ver%3D4.7.0.css" type="text/css" media="all">
  <link rel="stylesheet" id="elementor-post-1837-css" href="../wp-content/uploads/sites/4/elementor/css/post-1837_ver%3D1644819501.css" type="text/css" media="all">
  <link rel="stylesheet" id="thhf-widgets-style-css" href="../wp-content/plugins/th-widget-pack/header-footer/inc/widgets-css/frontend_ver%3D2.1.9.css" type="text/css" media="all">
  <link rel="stylesheet" id="ms-main-css" href="../wp-content/plugins/masterslider/public/assets/css/masterslider.main_ver%3D3.2.11.css" type="text/css" media="all">
  <link rel="stylesheet" id="ms-custom-css" href="../wp-content/uploads/sites/4/masterslider/custom_ver%3D2.css" type="text/css" media="all">
  <link rel="stylesheet" id="roots_app-css" href="../wp-content/themes/pursuitx/assets/css/app_ver%3D1.css" type="text/css" media="all">
  <link rel="stylesheet" id="roots_child-css" href="../wp-content/themes/pursuitx-child/style_ver%3D5.8.8.css" type="text/css" media="all">
  <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.8" type="text/css" media="all">
  <script type="text/javascript" src="../wp-includes/js/jquery/jquery.min_ver%3D3.6.0.js" id="jquery-core-js"></script>
  <script type="text/javascript" src="../wp-includes/js/jquery/jquery-migrate.min_ver%3D3.3.2.js" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/masterslider/includes/modules/elementor/assets/js/elementor-widgets_ver%3D3.2.11.js" id="masterslider-elementor-widgets-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min_ver%3D7.10.0.js" id="exactmetrics-frontend-script-js"></script>
  <script data-cfasync="false" data-wpfc-render="false" type="text/javascript" id="exactmetrics-frontend-script-js-extra">/* <![CDATA[ */
  var exactmetrics_frontend = {"js_events_tracking":"true","download_extensions":"zip,mp3,mpeg,pdf,docx,pptx,xlsx,rar","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/demo.themovation.com\/pursuit\/cryptocurrency","hash_tracking":"false","ua":"UA-36363716-1","v4_id":""};/* ]]> */
  </script>
  <link rel="https://api.w.org/" href="https://demo.themovation.com/pursuit/cryptocurrency/wp-json/"><link rel="alternate" type="application/json" href="https://demo.themovation.com/pursuit/cryptocurrency/wp-json/wp/v2/pages/1837"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.themovation.com/pursuit/cryptocurrency/xmlrpc.php?rsd">
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.themovation.com/pursuit/cryptocurrency/wp-includes/wlwmanifest.xml"> 
  <meta name="generator" content="WordPress 5.8.8">
  <meta name="generator" content="WooCommerce 6.0.0">
  <link rel="canonical" href="https://demo.themovation.com/pursuit/cryptocurrency/home-exchange-alternative/">
  <link rel="shortlink" href="https://demo.themovation.com/pursuit/cryptocurrency/?p=1837">
  <link rel="alternate" type="application/json+oembed" href="https://demo.themovation.com/pursuit/cryptocurrency/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themovation.com%2Fpursuit%2Fcryptocurrency%2Fhome-exchange-alternative%2F">
  <link rel="alternate" type="text/xml+oembed" href="https://demo.themovation.com/pursuit/cryptocurrency/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.themovation.com%2Fpursuit%2Fcryptocurrency%2Fhome-exchange-alternative%2F&amp;format=xml">
  <script>var ms_grabbing_curosr='https://demo.themovation.com/pursuit/cryptocurrency/wp-content/plugins/masterslider/public/assets/css/common/grabbing.cur',ms_grab_curosr='https://demo.themovation.com/pursuit/cryptocurrency/wp-content/plugins/masterslider/public/assets/css/common/grab.cur';</script>
  <meta name="generator" content="MasterSlider 3.2.11 - Responsive Touch Image Slider">
  <!--[if lt IE 9]>
  <script src="https://demo.themovation.com/pursuit/cryptocurrency/wp-content/themes/pursuitx/assets/js/vendor/html5shiv.min.js"></script>
  <script src="https://demo.themovation.com/pursuit/cryptocurrency/wp-content/themes/pursuitx/assets/js/vendor/respond.min.js"></script>
  <![endif]-->
      <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
              <style type="text/css" id="wp-custom-css">
              /* Screenshot temp 
   * 1. Show Admin Bar
   * 2. Show sticky
   * */
  /*
  #scrollUp, #hbl-live-chat-wrapper{
      display:none;
      visibility:hidden;
  }
  */
  /* Hide cart icon and purchase link on certain screen sizes to fix menu collapse */
  @media (max-width:1023px) {
    .themo_cart_icon {display:none}
  }
  @media (min-width:768px) and (max-width:932px) {
    .navbar-nav .menu-purchase {display:none}
  }
  
  /* Modify sticky header logo size */
  .headhesive--clone #logo img {
  height:inherit !important;
  width:inherit !important;
  max-height: 38px !important; } 
  
  .headhesive--clone .navbar-nav {
  margin-top:10px !important
  } 
  
  /* Hide Related Products from  homepage */
  .page-id-526 .woocommerce .woocommerce-tabs, .page-id-526 .woocommerce .related.products {display: none;}
  
  /* Shade products on Shop */
  .single-product .product img, .products .product img {
      filter: brightness(95%);
  }
  
  /* Change button border radius for certain form types */
  .th-form-stacked input[type=submit],
  .footer .frm_form_widget input[type=submit],
  .th-conversion form input[type=submit],
  .th-conversion .with_frm_style input[type=submit] {border-radius:5px !important}
  
  
  /* Max width for Crypto slider title */
  .page-id-315 .slides li:nth-child(3) h1.slider-title {
      max-width: 400px;
  }
  
  /* Footer logo styling */
  .footer .widget_media_image img {max-width:286px !important}
  
  
  
  /* MOVE TO THEME */
  
  /* Adjustment for Header widget icons */
  .th-header-wrap .elementor-icon i {
      margin-left: 5px;
      margin-right: 5px;
  }
  
  /* Cart icon changes 
  .themo_cart_icon {
      padding-left:16px !important;
      border-left:0 !important;
      margin-left:0 !important;
  } */
  
  /* Blog changes */
  .mas-blog-post .post-inner {padding:30px}
  .mas-blog-post .post-title {line-height:1.25}
  .mas-blog-post .entry-content {margin-top:8px}
  .mas-blog-post .entry-content a {display:block; margin-top:12px}
  .mas-blog-post .date-meta {margin-top:28px}
  /*.mas-blog-post .date-meta i.xs-icon {font-size:14px; display:inline; margin-right:3px}*/
  .mas-blog-post .post-inner {
      border: 1px solid #f2f2f2;
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.06);
  }
  .mas-blog-post img {
      box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.06);
  }
  
  
  /* WooComm changes */
  .woocommerce ul.products li.product {
      padding:25px 25px 30px 25px;
      border-radius:5px;
  /*    border:1px solid rgba(0,0,0,0.12);
      box-shadow:0px 0px 20px 0px rgba(0,0,0,0.15); */
  }
  .single-product .product img, .products .product img {border-radius:5px}
  
  
  /* Sidebar / Footer changes */
  /*.th-widget-area .widget-title {
      font-size:16px;
      font-weight:700;
      text-transform:uppercase;
      padding-bottom:12px;
      border-bottom: 2px solid rgba(255,255,255,0.1);
      margin-bottom:22px;
  }*/
  .sidebar .widget-title {border-bottom: 2px solid rgba(0,0,0,0.1);}
  
  
  /* Uppercase menu nav links */
  .navbar .navbar-nav > li > a {text-transform:uppercase; font-size:14px !important}		</style>
          <style id="kirki-inline-styles">#logo img{max-height:44px;width:auto;}.navbar .navbar-nav{margin-top:19px;}.navbar .navbar-toggle{top:19px;}.themo_cart_icon{margin-top:calc(19px + 12px);}.btn-cta-primary,.navbar .navbar-nav>li>a:hover:after,.navbar .navbar-nav>li.active>a:after,.navbar .navbar-nav>li.active>a:hover:after,.navbar .navbar-nav>li.active>a:focus:after,.headhesive--clone .navbar-nav > li > a:hover:after,.banner[data-transparent-header="true"].headhesive--clone .navbar-nav > li > a:hover:after,form input[type=submit],html .woocommerce a.button.alt,html .woocommerce-page a.button.alt,html .woocommerce a.button,html .woocommerce-page a.button,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce #respond input#submit.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce #respond input#submit:disabled[disabled],.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce a.button:disabled[disabled],.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce button.button:disabled[disabled],.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce #respond input#submit.disabled:hover,.woocommerce #respond input#submit:disabled:hover,.woocommerce #respond input#submit:disabled[disabled]:hover,.woocommerce a.button.disabled:hover,.woocommerce a.button:disabled:hover,.woocommerce a.button:disabled[disabled]:hover,.woocommerce button.button.disabled:hover,.woocommerce button.button:disabled:hover,.woocommerce button.button:disabled[disabled]:hover,.woocommerce input.button.disabled:hover,.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover,p.demo_store,.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,.th-conversion form input[type=submit],.th-conversion .with_frm_style input[type=submit],.th-pricing-column.th-highlight,.search-submit,.search-submit:hover,.widget .tagcloud a:hover,.footer .tagcloud a:hover,.btn-standard-primary-form form .frm_submit input[type=submit],.btn-standard-primary-form form .frm_submit input[type=submit]:hover,.btn-ghost-primary-form form .frm_submit input[type=submit]:hover,.btn-cta-primary-form form .frm_submit input[type=submit],.btn-cta-primary-form form .frm_submit input[type=submit]:hover,.th-widget-area form input[type=submit],.th-widget-area .with_frm_style .frm_submit input[type=submit],.elementor-widget-themo-header.elementor-view-stacked .th-header-wrap .elementor-icon,.elementor-widget-themo-service-block.elementor-view-stacked .th-service-block-w .elementor-icon{background-color:#045089;}a,.accent,.navbar .navbar-nav .dropdown-menu li.active a,.navbar .navbar-nav .dropdown-menu li a:hover,.navbar .navbar-nav .dropdown-menu li.active a:hover,.page-title h1,.inner-container>h1.entry-title,.woocommerce ul.products li.product .price,.woocommerce ul.products li.product .price del,.woocommerce .single-product .product .price,.woocommerce.single-product .product .price,.woocommerce .single-product .product .price ins,.woocommerce.single-product .product .price ins,.a2c-ghost.woocommerce a.button,.th-cta .th-cta-text span,.elementor-widget-themo-info-card .th-info-card-wrap .elementor-icon-box-title,.map-info h3,.th-pkg-content h3,.th-pricing-cost,#main-flex-slider .slides h1,.th-team-member-social a i:hover,.elementor-widget-toggle .elementor-toggle .elementor-toggle-title,.elementor-widget-toggle .elementor-toggle .elementor-toggle-title.active,.elementor-widget-toggle .elementor-toggle .elementor-toggle-icon,.elementor-widget-themo-header .th-header-wrap .elementor-icon,.elementor-widget-themo-header.elementor-view-default .th-header-wrap .elementor-icon,.elementor-widget-themo-service-block .th-service-block-w .elementor-icon,.elementor-widget-themo-service-block.elementor-view-default .th-service-block-w .elementor-icon,.elementor-widget-themo-header.elementor-view-framed .th-header-wrap .elementor-icon,.elementor-widget-themo-service-block.elementor-view-framed .th-service-block-w .elementor-icon{color:#045089;}.btn-standard-primary,.btn-ghost-primary:hover,.pager li>a:hover,.pager li>span:hover,.a2c-ghost.woocommerce a.button:hover{background-color:#045089;}.btn-standard-primary,.btn-ghost-primary:hover,.pager li>a:hover,.pager li>span:hover,.a2c-ghost.woocommerce a.button:hover,.btn-standard-primary-form form .frm_submit input[type=submit],.btn-standard-primary-form form .frm_submit input[type=submit]:hover,.btn-ghost-primary-form form .frm_submit input[type=submit]:hover,.btn-ghost-primary-form form .frm_submit input[type=submit]{border-color:#045089;}.btn-ghost-primary,.btn-ghost-primary:focus,.th-portfolio-filters a.current,.a2c-ghost.woocommerce a.button,.btn-ghost-primary-form form .frm_submit input[type=submit]{color:#045089;}.btn-ghost-primary,.th-portfolio-filters a.current,.a2c-ghost.woocommerce a.button,.elementor-widget-themo-header.elementor-view-framed .th-header-wrap .elementor-icon,.elementor-widget-themo-service-block.elementor-view-framed .th-service-block-w .elementor-icon{border-color:#045089;}form select:focus,form textarea:focus,form input:focus,.th-widget-area .widget select:focus,.search-form input:focus{border-color:#045089!important;}{color:#f96d64;}.btn-cta-accent,.a2c-cta.woocommerce a.button,.a2c-cta.woocommerce a.button:hover,.btn-standard-accent-form form .frm_submit input[type=submit],.btn-standard-accent-form form .frm_submit input[type=submit]:hover,.btn-ghost-accent-form form .frm_submit input[type=submit]:hover,.btn-cta-accent-form form .frm_submit input[type=submit],.btn-cta-accent-form form .frm_submit input[type=submit]:hover{background-color:#f96d64;}body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block{background:#f96d64!important;}body #booked-profile-page input[type=submit].button-primary,body table.booked-calendar input[type=submit].button-primary,body .booked-modal input[type=submit].button-primary,body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,.btn-standard-accent-form form .frm_submit input[type=submit],.btn-standard-accent-form form .frm_submit input[type=submit]:hover,.btn-ghost-accent-form form .frm_submit input[type=submit]:hover,.btn-ghost-accent-form form .frm_submit input[type=submit]{border-color:#f96d64!important;}.btn-standard-accent,.btn-ghost-accent:hover{background-color:#f96d64;border-color:#f96d64;}.btn-ghost-accent,.btn-ghost-accent:focus,.btn-ghost-accent-form form .frm_submit input[type=submit]{color:#f96d64;}.btn-ghost-accent{border-color:#f96d64;}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:Lato;font-weight:700;}body,p,li{font-family:Lato;font-size:16px;font-weight:400;line-height:1.65;color:#333333;}.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus,.banner[data-transparent-header="true"].headhesive--clone .navbar-nav > li > a, .navbar .navbar-nav > li.th-accent{font-family:Lato;font-size:15px;font-weight:700;color:#333333;}body{background-color:#FFF;}/* latin-ext */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh7USSwaPHw3q5d0N7w.woff) format('woff');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh7USSwiPHw3q5d0.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  /* latin-ext */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  /* latin-ext */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(../wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }</style></head>
  
  
  <body class="page-template-default page page-id-1837 theme-pursuitx _masterslider _msp_version_3.2.11 woocommerce-no-js ehf-template-pursuitx ehf-stylesheet-pursuitx-child elementor-default elementor-kit-2383 elementor-page elementor-page-1837 th-sticky-header">
          <!-- Preloader Start -->
          <div id="loader-wrapper">
              <div id="loader"></div>
              <div class="loader-section section-left"></div>
              <div class="loader-section section-right"></div>
          </div>
          <!-- Preloader End -->
      
  
  
  
    


    <!--header ends here-->
    

    <!--header ends here-->





    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">
                    <span class="menu-title">Dashboard</span>
                    <span class="menu-sub-title">( 2 new updates )</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/')}}">
                      <span class="menu-title">Home</span>
                      <span class="menu-sub-title">( 2 new updates )</span>
                      <i class="mdi mdi-home menu-icon"></i>
                    </a>
                  </li>
                             
              </ul>
              </div>
              <div class="wrapper upgrade-button">
                <a href="*" target="_blank" class="btn btn-lg btn-block purchase-button">Administrator</a>
              </div>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
              <div class="row purchace-popup">
                <div class="col-12">
                  <span class="d-flex alifn-items-center">
                    <p>Like what you see? Check out our this demo version for more.</p>
                    <i class="mdi mdi-close popup-dismiss"></i>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-warning text-white">
                    <div class="card-body">
                      <h4 class="font-weight-normal mb-3">Weekly Users</h4>
                      <h2 class="font-weight-normal mb-5">$ 15,000</h2>
                      <p class="card-text">Incresed by 50%</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-info text-white">
                    <div class="card-body">
                      <h4 class="font-weight-normal mb-3">Weekly Bets</h4>
                      <h2 class="font-weight-normal mb-5">4582255</h2>
                      <p class="card-text">increased by 10%</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-success text-white">
                    <div class="card-body">
                      <h4 class="font-weight-normal mb-3">Visitors </h4>
                      <h2 class="font-weight-normal mb-5">7869645</h2>
                      <p class="card-text">Increased by 5%</p>
                    </div>
                  </div>
                </div>
              </div>
    
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
      {
      "symbols"; [
        {
          "proName": "BITSTAMP:BTCUSD",
          "title": "Bitcoin"
        },
        {
          "proName": "BITSTAMP:ETHUSD",
          "title": "Ethereum"
        },
        {
          "description": "",
          "proName": "BINANCE:DOGEUSD"
        },
        {
          "description": "Sol",
          "proName": "BINANCE:SOLUSD"
        },
        {
          "description": "MATIC",
          "proName": "KRAKEN:MATICUSD"
        },
        {
          "description": "BNB",
          "proName": "BINANCE:BNBUSDT"
        }
      ],
      "showSymbolLogo"; true,
      "isTransparent"; false,
      "displayMode"; "adaptive",
      "colorTheme"; "light",
      "locale"; "en"
    }
      </script>
    </div>
    <!-- TradingView Widget END -->
    <!--table to fetch betting  data-->
    
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
      {
      "width"; 770,
      "height"; 450,
      "symbolsGroups"; [
        {
          "name": "Indices",
          "originalName": "Indices",
          "symbols": [
            {
              "name": "BINANCE:BNBUSDT",
              "displayName": "Binance"
            },
            {
              "name": "KRAKEN:MATICUSD",
              "displayName": "MATIC"
            },
            {
              "name": "BINANCE:SOLUSD",
              "displayName": "SOL"
            },
            {
              "name": "BINANCE:DOGEUSD",
              "displayName": "DOGE"
            },
            {
              "name": "BITSTAMP:ETHUSD",
              "displayName": "Etherum"
            },
            {
              "name": "BITSTAMP:BTCUSD",
              "displayName": "Bitcoin"
            }
          ]
        },
        {
          "name": "Bonds",
          "originalName": "Bonds",
          "symbols": [
            {
              "name": "CBOT:ZB1!",
              "displayName": "T-Bond"
            },
            {
              "name": "CBOT:UB1!",
              "displayName": "Ultra T-Bond"
            },
            {
              "name": "EUREX:FGBL1!",
              "displayName": "Euro Bund"
            },
            {
              "name": "EUREX:FBTP1!",
              "displayName": "Euro BTP"
            },
            {
              "name": "EUREX:FGBM1!",
              "displayName": "Euro BOBL"
            }
          ]
        },
        {
          "name": "Forex",
          "originalName": "Forex",
          "symbols": [
            {
              "name": "FX:EURUSD",
              "displayName": "EUR to USD"
            },
            {
              "name": "FX:GBPUSD",
              "displayName": "GBP to USD"
            },
            {
              "name": "FX:USDJPY",
              "displayName": "USD to JPY"
            },
            {
              "name": "FX:USDCHF",
              "displayName": "USD to CHF"
            },
            {
              "name": "FX:AUDUSD",
              "displayName": "AUD to USD"
            },
            {
              "name": "FX:USDCAD",
              "displayName": "USD to CAD"
            }
          ]
        }
      ],
      "showSymbolLogo"; true,
      "isTransparent"; false,
      "colorTheme"; "light",
      "locale"; "en"
    }
      </script>
    </div>
    <!-- TradingView Widget END -->
    
    
    
    
    
    
    
    
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Recent Updates</h4>
                      <div class="d-flex">
                        <div class="d-flex align-items-center mr-4 text-muted">
                          <i class="mdi mdi-account icon-sm mr-2"></i>
                          <span>Ammar </span>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                          <i class="mdi mdi-calendar-blank icon-sm mr-2"></i>
                          <span>january 3rd, 2024</span>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-6 pr-1">
                          <img src="images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                          <img src="images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                        </div>
                        <div class="col-6 pl-1">
                          <img src="images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                          <img src="images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                        </div>
                      </div>
                      <div class="d-flex mt-5 align-items-top">
                        <img src="images/faces/face3.jpg" class="img-sm rounded-circle mr-3" alt="image">
                        <div class="mb-0 flex-grow">
                          <p class="font-weight-bold mr-2 mb-0">Jack Manque</p>
                          <p>This is amazing! We have moved to a brand new office in
                            New City with a lot more space.
                            We will miss our old office but we are very excited about our new space.</p>
                        </div>
                        <div class="ml-auto">
                          <i class="mdi mdi-heart-outline text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Recent Bets</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <table class="table text-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">coin</th>
                                    <th scope="col">price</th>
                                    <th scope="col">time</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $records)
                                        
                                    
                                  <tr>
                                    <th class="text-primary">{{$records->id}}</th>
                                    <td >{{$records->name}}</td>
                                    <td>{{$records->email}}</td>
                                    <td>{{$records->coin}}</td>
                                    <td>{{$records->price}}</td>
                                    <td>{{$records->time}}</td>

                                    <td>
                                        <a href="delete_record/{{$records->id}} ">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                  </tr>
                                 
                                  @endforeach
                            
                                  </tr>
                                
                          </thead>
                        </table>
                      </footer>
            <!-- partial -->
          </div>
          <!-- row-offcanvas ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
    































    
    <div class="prefooter"></div>
  
    <footer class="footer" role="contentinfo">
        <div class="container">
                                <div class="footer-widgets row th-widget-area">
                                          <div class="footer-area-1 col-md-4 col-sm-6">
                        <section class="widget media_image-3 widget_media_image"><div class="widget-inner">
                          <h3 style="color:white;">Crytos Era</h3>
                      </div></section><section class="widget text-4 widget_text"><div class="widget-inner">			<div class="textwidget"><p>Mannan's development is a premium  designed for cryptocurrency exchanges, ICOs, digital wallets, bitcoin companies, and cryptocurrency related businesses.</p>
    </div>
            </div></section>
                    <section class="widget widget-th-payments">
                <div class="widget-inner">
                                    <div class="th-payments-widget">
                        <a target="_blank" href="#0"><span class="th-payment-no-img">Bitcoin</span></a><a target="_blank" href="#0"><span class="th-payment-no-img">Ethereum</span></a><a target="_blank" href="#0"><span class="th-payment-no-img">Litecoin</span></a><a href="#0"><span class="th-payment-no-img">EOS</span></a>				</div>
                </div>
            </section>
    
                                </div>
                                                        <div class="footer-area-2 col-md-4 col-sm-6">
                        
                    <section class="widget widget-th-contact-info">
                <div class="widget-inner">
                                        <h3 class="widget-title">CONTACT DETAILS</h3>
                                    <div class="th-contact-info-widget">
                        <div class="icon-blocks"><div class="icon-block"><p><a target="_blank" href="mailto:contact@ourdomain.com"><i class="fa fa-envelope-open-o"></i><span>diamond.coder786.com</span></a></p></div><div class="icon-block"><p><a target="_blank" href="tel:800-222-4545"><i class="fa fa-mobile"></i><span>+92-325-114-4740</span></a></p></div><div class="icon-block"><p><a href="#"><i class="fa fa-map-o"></i><span>Location</span></a></p></div></div>				</div>
                </div>
            </section>
    
            
                    <section class="widget widget-social">
                <div class="widget-inner">
                                    <h3 class="widget-title">CONNECT WITH US</h3>
                                        <div class="soc-widget">
                        <a target="_blank" href="#0"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-twitter"></i></a><a target="_blank" href="#0"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-slack"></i></a>           			</div>
                    </div>
            </section>
    
                                </div>
                                                         <div class="footer-area-3 col-md-4 col-sm-6">
                        
    <section class="widget recent-posts-8 widget_recent_entries"><div class="widget-inner">
      <h3 class="widget-title">RECENT POSTS</h3>
      <ul>
                                          <li>
                  <a href="#">Banking with digital currency</a>
                                          <span class="post-date">April 10, 2018</span>
                                  </li>
                                          <li>
                  <a href="#">Can I mine and is it worth It?</a>
                                          <span class="post-date">April 4, 2018</span>
                                  </li>
                                          <li>
                  <a href="#">How blockchain is redefining trust</a>
                                          <span class="post-date">March 18, 2018</span>
                                  </li>
                                          <li>
                  <a href="#">Tips for trading bitcoin and altcoins</a>
                                          <span class="post-date">March 14, 2018</span>
                                  </li>
                  </ul>
  
      </div></section>                    </div>
                                                   <div class="footer-area-4 col-md-4 col-sm-6">
                                      </div>
                              </div>
              </div>
  <div class="footer-btm-bar">        
      <div class="container">    
          <div class="footer-copyright row">
              <div class="col-xs-12">
                  <p><span class="footer_copy">Cryptocurrency Theme</span> - <span class="footer_credit"><a href="#">Crypto supports</a></span></p>
              </div>
          </div>
      </div>
  </div>
  </footer>
  <script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
  <script type="text/javascript">window.Beacon('init', '63d0ee5c-c9c1-4a05-b896-6cab25849309')</script>	<script type="text/javascript">
      (function () {
          var c = document.body.className;
          c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
          document.body.className = c;
      })();
  </script>
  <link rel="stylesheet" id="e-animations-css" href="../wp-content/plugins/elementor/assets/lib/animations/animations.min_ver%3D3.5.3.css" type="text/css" media="all">
  <script type="text/javascript" src="../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min_ver%3D2.7.0-wc.6.0.0.js" id="jquery-blockui-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min_ver%3D2.1.4-wc.6.0.0.js" id="js-cookie-js"></script>
  <script type="text/javascript" id="woocommerce-js-extra">
  /* <![CDATA[ */
  var woocommerce_params = {"ajax_url":"\/pursuit\/cryptocurrency\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/pursuit\/cryptocurrency\/?wc-ajax=%%endpoint%%"};
  /* ]]> */
  </script>
  <script type="text/javascript" src="../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min_ver%3D6.0.0.js" id="woocommerce-js"></script>
  <script type="text/javascript" id="wc-cart-fragments-js-extra">
  /* <![CDATA[ */
  var wc_cart_fragments_params = {"ajax_url":"\/pursuit\/cryptocurrency\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/pursuit\/cryptocurrency\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_813e37774061c289d02e95cc12260157","fragment_name":"wc_fragments_813e37774061c289d02e95cc12260157","request_timeout":"5000"};
  /* ]]> */
  </script>
  <script type="text/javascript" src="../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min_ver%3D6.0.0.js" id="wc-cart-fragments-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min_ver%3D4.0.2.js" id="elementor-waypoints-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/th-widget-pack/header-footer/inc/js/frontend_ver%3D2.1.9.js" id="thhf-frontend-js-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/th-widget-pack/js/themo-foot_ver%3D2.1.9.js" id="themo-js-foot-js"></script>
  <script type="text/javascript" src="../wp-content/themes/pursuitx/assets/js/vendor/vendor_footer_ver%3D1.2.js" id="t_vendor_footer-js"></script>
  <script type="text/javascript" src="../wp-content/themes/pursuitx/assets/js/main_ver%3D1.3.js" id="roots_main-js"></script>
  <script type="text/javascript" src="../wp-includes/js/wp-embed.min_ver%3D5.8.8.js" id="wp-embed-js"></script>
  <script type="text/javascript" id="formidable-js-extra">
  /* <![CDATA[ */
  var frm_js = {"ajax_url":"https:\/\/demo.themovation.com\/pursuit\/cryptocurrency\/wp-admin\/admin-ajax.php","images_url":"https:\/\/demo.themovation.com\/pursuit\/cryptocurrency\/wp-content\/plugins\/formidable\/images","loading":"Loading\u2026","remove":"Remove","offset":"4","nonce":"1581ee48e5","id":"ID","no_results":"No results match","file_spam":"That file looks like Spam.","calc_error":"There is an error in the calculation in the field with key","empty_fields":"Please complete the preceding required fields before uploading a file."};
  /* ]]> */
  </script>
  <script type="text/javascript" src="../wp-content/plugins/formidable/js/frm.min_ver%3D5.0.16.js" id="formidable-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min_ver%3D3.5.3.js" id="elementor-webpack-runtime-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend-modules.min_ver%3D3.5.3.js" id="elementor-frontend-modules-js"></script>
  <script type="text/javascript" src="../wp-includes/js/jquery/ui/core.min_ver%3D1.12.1.js" id="jquery-ui-core-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/swiper/swiper.min_ver%3D5.3.6.js" id="swiper-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/share-link/share-link.min_ver%3D3.5.3.js" id="share-link-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/lib/dialog/dialog.min_ver%3D4.9.0.js" id="elementor-dialog-js"></script>
  <script type="text/javascript" id="elementor-frontend-js-before">
  var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.5.3","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/demo.themovation.com\/pursuit\/cryptocurrency\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1837,"title":"Home%20%E2%80%93%20Exchange%20Alternative%20%E2%80%93%20Cryptocurrency","excerpt":"","featuredImage":false}};
  </script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/frontend.min_ver%3D3.5.3.js" id="elementor-frontend-js"></script>
  <script type="text/javascript" src="../wp-content/plugins/elementor/assets/js/preloaded-modules.min_ver%3D3.5.3.js" id="preloaded-modules-js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  
  </body></html>




























