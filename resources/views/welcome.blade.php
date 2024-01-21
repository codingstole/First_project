<!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js" lang="en-US"><!--<![endif]--><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" type="application/rss+xml" title="Cryptocurrency Feed" href="https://demo.themovation.com/pursuit/cryptocurrency//feed/">
  <title>Home – Exchange Alternative – Cryptocurrency</title>
  <meta name="robots" content="max-image-preview:large">
  <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">

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
      
  
  
  
    
  <header class="banner navbar navbar-default navbar-static-top dark-header" role="banner" data-transparent-header="true">
          <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <div id="logo">
                  
                                                <h5 style="color: white;">Cryptos Era</h5>
                                       
              </div>
          </div>
  
          
          <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul id="menu-main-menu" class="nav navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children dropdown menu-item-2053"><a class="dropdown-toggle" href="{{ url('welcome')}}">Home <b class="caret"></b></a>
  
  </li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-2118">
    <a class="dropdown-toggle" href="{{url('bet')}}">Bet to win 
        <b class="caret"></b>
    </a>
  </li>

  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-2342">
    <a class="dropdown-toggle" href="{{url('analysis')}}"">Rate Analysis 
        <b class="caret"></b>
    </a>
  </li>


  <li class="th-accent th-elements menu-item menu-item-type-custom menu-item-object-custom menu-item-2201">
    <a target="_blank" rel="noopener" href="{{url('admin')}}">Admin</a>
</li>
  </ul>    
    </nav>
      </div>
  </header>


  <!--header ends here-->
    <div class="wrap" role="document">
    
      <div class="content">
  
          
  <div class="inner-container">
              <h1 class="entry-title">Home – Exchange Alternative</h1>
      
      
          <section class="content-editor">
              <div data-elementor-type="wp-post" data-elementor-id="1837" class="elementor elementor-1837" data-elementor-settings="[]">
                          <div class="elementor-inner">
                              <div class="elementor-section-wrap">
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-5b0a36a0 elementor-section-height-full elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="5b0a36a0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-background-overlay"></div>
                              <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ba2ac68" data-id="ba2ac68" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-60708d8d elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="60708d8d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h1 class="elementor-icon-box-title">
                          Buy and Sell Bitcoin                    </h1>
                                          <p class="elementor-icon-box-description">The world’s most secure way to buy and sell bitcoin.</p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-647590cd elementor-widget elementor-widget-spacer" data-id="647590cd" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-6efe89c5 elementor-widget elementor-widget-spacer" data-id="6efe89c5" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-4ad72d97 elementor-invisible elementor-widget elementor-widget-themo-formidable-form" data-id="4ad72d97" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:75}" data-widget_type="themo-formidable-form.default">
                  <div class="elementor-widget-container">
                          <div class="th-fo-form  th-centered th-form-stacked th-form-bg th-light-bg th-btn-form btn-standard-primary-form"><div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_3_container">

                            <!--First -->
  <form enctype="multipart/form-data" method="post" class="frm-show-form " id="form_inline">
  <div class="frm_form_fields ">
  <fieldset>
  
  <div class="frm_fields_container">
  <input type="hidden" name="frm_action" value="create">
  <input type="hidden" name="form_id" value="3">
  <input type="hidden" name="frm_hide_fields_3" id="frm_hide_fields_3" value="">
  <input type="hidden" name="form_key" value="inline">
  <input type="hidden" name="item_meta[0]" value="">
  <input type="hidden" id="frm_submit_entry_3" name="frm_submit_entry_3" value="0c085c1fec"><input type="hidden" name="_wp_http_referer" value="/pursuit/cryptocurrency/home-exchange-alternative/"><div id="frm_field_11_container" class="frm_form_field form-field  frm_none_container">
      <label for="field_qy05f8" class="frm_primary_label">Name
          <span class="frm_required"></span>
      </label>
      <input type="text" id="field_qy05f8" name="item_meta[11]" value="" placeholder="Name" data-invmsg="Name is invalid" aria-invalid="false">
      
      
  </div>
  <div id="frm_field_12_container" class="frm_form_field form-field  frm_required_field frm_none_container">
      <label for="field_3asv29" class="frm_primary_label">Email Address
          <span class="frm_required">*</span>
      </label>
      <input type="text" id="field_3asv29" name="item_meta[12]" value="" placeholder="Email Address" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Email Address is invalid" aria-invalid="false">
      
      
  </div>
  <div id="frm_field_13_container" class="frm_form_field form-field  frm_required_field frm_none_container">
      <label for="field_2ywico" class="frm_primary_label">Question / Comment
          <span class="frm_required">*</span>
      </label>
      <input type="text" id="field_2ywico" name="item_meta[13]" value="" placeholder="Question / Comment" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Question / Comment is invalid" aria-invalid="false">
      
      
  </div>
      <input type="hidden" name="item_key" value="">
      <div class="frm_submit">
  
  <input type="submit" value="Send">
  <img class="frm_ajax_loading" src="../wp-content/plugins/formidable/images/ajax_loader.gif" alt="Sending" style="visibility:hidden;">
  
  </div></div>
  </fieldset>
  </div>
  </form>
  </div>
  </div>
                      </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6a5630a6" data-id="6a5630a6" data-element_type="column">
              <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                                  </div>
                      </div>
          </div>
                                  </div>
                      </div>



          </section>


          <!--Form ends here-->

                  <section class="elementor-section elementor-top-section elementor-element elementor-element-1aaba744 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1aaba744" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c0f69d7" data-id="6c0f69d7" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-e800b91 elementor-widget elementor-widget-spacer" data-id="e800b91" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-2909476c elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-header" data-id="2909476c" data-element_type="widget" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h2 class="elementor-icon-box-title">
                          The most secure bitcoin, ethereum, and litecoin exchange                    </h2>
                                          <p class="elementor-icon-box-description"></p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-89cbcd1 elementor-widget elementor-widget-spacer" data-id="89cbcd1" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-11454037 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11454037" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-wide">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4d452711" data-id="4d452711" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-6744df9 elementor-widget elementor-widget-text-editor" data-id="6744df9" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                                  <div class="elementor-text-editor elementor-clearfix">
                  <p><span style="color: #646464;">Ut vehicula arcu massa, sit amet egestas orci euismod quis. Sed sed imperdiet nunc, ut tempus tortor. Ut eget suscipit metus, eu tempor sapien. Duis molestie, nisl id maximus lobortis, ante leo elementum mi, sit amet semper enim sit amet augue.</span></p>					</div>
                          </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5ad8c610" data-id="5ad8c610" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-54d8183d elementor-widget elementor-widget-text-editor" data-id="54d8183d" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                                  <div class="elementor-text-editor elementor-clearfix">
                  <p><span style="color: #646464;">Donec dui lorem, malesuada ut mattis eget, convallis in sem. Duis condimentum ligula vel magna blandit, nec tincidunt orci pellentesque. Mauris a lectus massa. Aliquam egestas pharetra nisi, quis dignissim ligula vehicula magna eget vitae.</span></p>					</div>
                          </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <div class="elementor-element elementor-element-17ebd20d elementor-widget elementor-widget-menu-anchor" data-id="17ebd20d" data-element_type="widget" data-widget_type="menu-anchor.default">
                  <div class="elementor-widget-container">
                      <div id="explore" class="elementor-menu-anchor"></div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-3bd044c2 elementor-widget elementor-widget-spacer" data-id="3bd044c2" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-32b48fc0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="32b48fc0" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-wider">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-108eead0" data-id="108eead0" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-2a83fe5c elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="2a83fe5c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h2 class="elementor-icon-box-title">
                          21.5%                    </h2>
                                          <p class="elementor-icon-box-description">Vestibulum at nisi vitae est molestie pellentesque. Integer augue lorem, vulputate ut ornare eget, semper eget urna. </p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3d22daa1" data-id="3d22daa1" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-79aaea16 elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="79aaea16" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:250}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h2 class="elementor-icon-box-title">
                          12M+                    </h2>
                                          <p class="elementor-icon-box-description">Duis a libero sed eros porttitor facilisis id id elit. Donec aliquam, odio sed gravida hendrerit, tellus dui mollis purus.
  </p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3cc62680" data-id="3cc62680" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-1b426781 elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="1b426781" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h2 class="elementor-icon-box-title">
                          $14                    </h2>
                                          <p class="elementor-icon-box-description">Aliquam vitae leo eros. Phasellus tincidunt, lacus vel tristique pharetra, enim felis volutpat purus, sed eleifend orci.</p>
  
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
          </section>
                  <div class="elementor-element elementor-element-2e0734d3 elementor-widget elementor-widget-spacer" data-id="2e0734d3" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-67d6041c elementor-widget elementor-widget-spacer" data-id="67d6041c" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-40bfcf3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="40bfcf3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12c9d5e0" data-id="12c9d5e0" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-32594853 elementor-widget elementor-widget-spacer" data-id="32594853" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-1f966c25 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="1f966c25" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;arrows&quot;,&quot;slides_to_show&quot;:&quot;4&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
              <div class="elementor-image-carousel swiper-wrapper">
                                  <div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="../wp-content/uploads/sites/4/2018/06/tech-reviews-bk.png" alt="tech-reviews-bk.png"></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="../wp-content/uploads/sites/4/2018/06/info-daily-bk.png" alt="info-daily-bk.png"></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="../wp-content/uploads/sites/4/2018/06/komodo-bk.png" alt="komodo-bk.png"></figure></div><div class="swiper-slide"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="../wp-content/uploads/sites/4/2018/06/las-santos-times-bk.png" alt="las-santos-times-bk.png"></figure></div>			</div>
                                                                  <div class="elementor-swiper-button elementor-swiper-button-prev">
                          <i aria-hidden="true" class="eicon-chevron-left"></i>						<span class="elementor-screen-only">Previous</span>
                      </div>
                      <div class="elementor-swiper-button elementor-swiper-button-next">
                          <i aria-hidden="true" class="eicon-chevron-right"></i>						<span class="elementor-screen-only">Next</span>
                      </div>
                                      </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-73b858aa elementor-widget elementor-widget-spacer" data-id="73b858aa" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-5da10377 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="5da10377" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-background-overlay"></div>
                              <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62b6e26f" data-id="62b6e26f" data-element_type="column">
              <div class="elementor-column-wrap">
                              <div class="elementor-widget-wrap">
                                  </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-5993226a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5993226a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                              <div class="elementor-background-overlay"></div>
                              <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e46858" data-id="7e46858" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-faea95b elementor-widget elementor-widget-menu-anchor" data-id="faea95b" data-element_type="widget" data-widget_type="menu-anchor.default">
                  <div class="elementor-widget-container">
                      <div id="how-it-works" class="elementor-menu-anchor"></div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-4d0d1315 elementor-widget elementor-widget-spacer" data-id="4d0d1315" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-38ab3a18 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-header" data-id="38ab3a18" data-element_type="widget" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h3 class="elementor-icon-box-title">
                          Here's what makes us different.                    </h3>
                                          <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec erat nec sem tincidunt cursus at sit amet neque. Curabitur erat turpis.</p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-1e2eb4ec elementor-widget elementor-widget-spacer" data-id="1e2eb4ec" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-54a0c1ca elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="54a0c1ca" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                          <div class="elementor-container elementor-column-gap-wider">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4147f6e9" data-id="4147f6e9" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-76165a82 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="76165a82" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-trip travelpack-phone-24-7" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Amazing Support</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                  </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-435b8193" data-id="435b8193" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-24a302e5 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="24a302e5" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-linea icon-ecommerce-money" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Accountable</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                  </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7f7bc8f5" data-id="7f7bc8f5" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-16200f26 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="16200f26" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-linea icon-ecommerce-graph-decrease" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Lowest Fees</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
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
          </section>
                  <section class="elementor-section elementor-inner-section elementor-element elementor-element-59dd3385 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="59dd3385" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                          <div class="elementor-container elementor-column-gap-wider">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b4c0db7" data-id="3b4c0db7" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-2e0be133 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="2e0be133" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-linea icon-arrows-switch-horizontal" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Rapid Trading</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                  </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e9acc03" data-id="3e9acc03" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-7f24c027 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="7f24c027" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-linea icon-ecommerce-safe" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Secure</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
                  </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c479ac8" data-id="3c479ac8" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-34f6f7cd elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-service-block" data-id="34f6f7cd" data-element_type="widget" data-widget_type="themo-service-block.default">
                  <div class="elementor-widget-container">
                      <div class="th-service-block-w">
              <div class="elementor-icon-box-wrapper th-show-icon">
                                      <div class="elementor-icon-box-icon th-icon-size-md">
                          <span class="elementor-icon ">
                              <i class="th-linea icon-basic-magic-mouse" aria-hidden="true" fff=""></i>                        </span>
                      </div>
                                  <div class="elementor-icon-box-content">
                      <h5 class="elementor-icon-box-title">
                          <span>Easy to Use</span>
                      </h5>
                      <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida leo porttitor pretium ullamcorper.</p>
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
          </section>
                  <div class="elementor-element elementor-element-71bd1e4e elementor-widget elementor-widget-spacer" data-id="71bd1e4e" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-6efc2a88 elementor-widget elementor-widget-spacer" data-id="6efc2a88" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-1eb6409e elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1eb6409e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22900f9c" data-id="22900f9c" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-5b0b945f elementor-widget elementor-widget-image" data-id="5b0b945f" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                  <div class="elementor-image">
                                                  <img width="375" height="635" src="../wp-content/uploads/sites/4/2018/06/Wallet-list.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="../wp-content/uploads/sites/4/2018/06/Wallet-list.jpg 375w, ../wp-content/uploads/sites/4/2018/06/Wallet-list-177x300.jpg 177w, ../wp-content/uploads/sites/4/2018/06/Wallet-list-22x37.jpg 22w, ../wp-content/uploads/sites/4/2018/06/Wallet-list-47x80.jpg 47w, ../wp-content/uploads/sites/4/2018/06/Wallet-list-179x303.jpg 179w" sizes="(max-width: 375px) 100vw, 375px">														</div>
                          </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16486846" data-id="16486846" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-bec6abd elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="bec6abd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h3 class="elementor-icon-box-title">
                          Why you'll love our platform                    </h3>
                                          <p class="elementor-icon-box-description">Phasellus vitae commodo nisi. Sed vitae quam quis dui bibendum malesuada. Aliquam nec quam vitae nunc ultricies dignissim ultricies in leo. Donec a gravida mauris.</p>
  
                                              <div class="th-btn-wrap">
                                                              <a class="btn-1 btn th-btn btn-standard-primary" href="#next1">
                                                                              See Demo                                                                    </a>
                              
                                                      </div>
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-7aa20085 elementor-widget elementor-widget-spacer" data-id="7aa20085" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-7c574415 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7c574415" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-no">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78ff4ab6" data-id="78ff4ab6" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-7eadfd78 elementor-widget elementor-widget-menu-anchor" data-id="7eadfd78" data-element_type="widget" data-widget_type="menu-anchor.default">
                  <div class="elementor-widget-container">
                      <div id="next1" class="elementor-menu-anchor"></div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-764a7517 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="764a7517" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-35027e2d" data-id="35027e2d" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-e5ca6d3 elementor-view-default elementor-position-top elementor-invisible elementor-widget elementor-widget-themo-header" data-id="e5ca6d3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h3 class="elementor-icon-box-title">
                          It's awesome                    </h3>
                                          <p class="elementor-icon-box-description">Vestibulum vehicula viverra purus, ac malesuada sem euismod quis. Maecenas vel ullamcorper lorem. Donec eget gravida libero, eu sagittis dolor. Proin ut felis orci. Quisque.</p>
  
                                              <div class="th-btn-wrap">
                                                              <a class="btn-1 btn th-btn btn-ghost-light" href="#next2">
                                                                              Learn More                                                                    </a>
                              
                                                      </div>
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-460c5dcb elementor-widget elementor-widget-spacer" data-id="460c5dcb" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3c22b84d" data-id="3c22b84d" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-2c8b5bbf elementor-widget elementor-widget-image" data-id="2c8b5bbf" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                  <div class="elementor-image">
                                                  <img width="375" height="635" src="../wp-content/uploads/sites/4/2018/06/Day-Graph2.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="../wp-content/uploads/sites/4/2018/06/Day-Graph2.jpg 375w, ../wp-content/uploads/sites/4/2018/06/Day-Graph2-177x300.jpg 177w, ../wp-content/uploads/sites/4/2018/06/Day-Graph2-22x37.jpg 22w, ../wp-content/uploads/sites/4/2018/06/Day-Graph2-47x80.jpg 47w, ../wp-content/uploads/sites/4/2018/06/Day-Graph2-179x303.jpg 179w" sizes="(max-width: 375px) 100vw, 375px">														</div>
                          </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-c6a843d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c6a843d" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-no">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f7e39e1" data-id="7f7e39e1" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-512e5ea4 elementor-widget elementor-widget-menu-anchor" data-id="512e5ea4" data-element_type="widget" data-widget_type="menu-anchor.default">
                  <div class="elementor-widget-container">
                      <div id="next2" class="elementor-menu-anchor"></div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-79113174 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="79113174" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5343bbd2" data-id="5343bbd2" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-50aa279a elementor-widget elementor-widget-spacer" data-id="50aa279a" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-541efbab elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-header" data-id="541efbab" data-element_type="widget" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper th-show-icon">
                              <div class="elementor-icon-box-icon th-icon-size-md">
                      <span class="elementor-icon ">
                          <i class="th-linea icon-basic-settings" aria-hidden="true" fff=""></i>                    </span>
                  </div>
                                  <div class="elementor-icon-box-content">
                      <h3 class="elementor-icon-box-title">
                          Designed and developed by and for traders.                    </h3>
                                          <p class="elementor-icon-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis sed felis finibus scelerisque. 
  Sed et facilisis urna. Vestibulum vehicula scelerisque pellentesque. Suspendisse at dolor leo.
  Integer ac luctus nisi, a scelerisque odio. Integer non nisl eu ligula semper dictum. </p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-3a766571 elementor-widget elementor-widget-spacer" data-id="3a766571" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-bf63551 elementor-invisible elementor-widget elementor-widget-image" data-id="bf63551" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                                  <div class="elementor-image">
                                                  <img width="1580" height="1020" src="../wp-content/uploads/sites/4/2018/06/1.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="../wp-content/uploads/sites/4/2018/06/1.jpg 1580w, ../wp-content/uploads/sites/4/2018/06/1-300x194.jpg 300w, ../wp-content/uploads/sites/4/2018/06/1-768x496.jpg 768w, ../wp-content/uploads/sites/4/2018/06/1-1024x661.jpg 1024w, ../wp-content/uploads/sites/4/2018/06/1-57x37.jpg 57w, ../wp-content/uploads/sites/4/2018/06/1-124x80.jpg 124w, ../wp-content/uploads/sites/4/2018/06/1-394x254.jpg 394w, ../wp-content/uploads/sites/4/2018/06/1-915x591.jpg 915w, ../wp-content/uploads/sites/4/2018/06/1-1240x801.jpg 1240w, ../wp-content/uploads/sites/4/2018/06/1-600x387.jpg 600w" sizes="(max-width: 1580px) 100vw, 1580px">														</div>
                          </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-52ee64f9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="52ee64f9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f8b569a" data-id="f8b569a" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-40ed2d1f elementor-invisible elementor-widget elementor-widget-themo-testimonial" data-id="40ed2d1f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="themo-testimonial.default">
                  <div class="elementor-widget-container">
                      
          <div class="elementor-testimonial-wrapper th-testimonial-w th-txt-lg elementor-testimonial-text-align-center">
  
              
                              <div class="elementor-testimonial-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec erat nec sem tincidunt cursus at sit amet neque. Curabitur erat turpis. Cras sit amet ante sollicitudin, venenatis neque in, dictum ipsum."</div>
              
              
              
                      <div class="elementor-testimonial-meta elementor-testimonial-image-position-top">
  
                  <div class="elementor-testimonial-meta-inner">
                                              <div class="elementor-testimonial-image">
                              <img width="394" height="394" src="../wp-content/uploads/sites/4/2018/06/exchange-alt2-394x394.jpg" class="th-team-member-image" alt="" loading="lazy">                        </div>
                      
                                          <div class="elementor-testimonial-details">
                                                      <div class="elementor-testimonial-name">Brent Thompson</div>
                          
                                                      <div class="elementor-testimonial-job">Tech Reviewer</div>
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
          </section>
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-1829d894 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1829d894" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d62dcee" data-id="7d62dcee" data-element_type="column">
              <div class="elementor-column-wrap elementor-element-populated">
                              <div class="elementor-widget-wrap">
                          <div class="elementor-element elementor-element-32aa4b6d elementor-widget elementor-widget-spacer" data-id="32aa4b6d" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-7e878122 elementor-view-default elementor-position-top elementor-widget elementor-widget-themo-header" data-id="7e878122" data-element_type="widget" data-widget_type="themo-header.default">
                  <div class="elementor-widget-container">
                      <div class="th-header-wrap">
          <div class="elementor-icon-box-wrapper ">
                              <div class="elementor-icon-box-content">
                      <h3 class="elementor-icon-box-title">
                          Ready to get started?                    </h3>
                                          <p class="elementor-icon-box-description">Try our free 14 day trial and see if our product is right for your business. No credit card, no hassle!</p>
  
                                      </div>
              </div>
  
          </div>
  
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-5ad2cd51 elementor-widget elementor-widget-spacer" data-id="5ad2cd51" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                  <div class="elementor-element elementor-element-c3d6dd7 elementor-invisible elementor-widget elementor-widget-themo-formidable-form" data-id="c3d6dd7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="themo-formidable-form.default">
                  <div class="elementor-widget-container">
                          <div class="th-fo-form  th-centered th-conversion  th-btn-form btn-standard-primary-form"><div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_11_container">
  <form enctype="multipart/form-data" method="post" class="frm-show-form " id="form_getstarted">
  <div class="frm_form_fields ">
  <fieldset>
  
  <div class="frm_fields_container">
  <input type="hidden" name="frm_action" value="create">
  <input type="hidden" name="form_id" value="11">
  <input type="hidden" name="frm_hide_fields_11" id="frm_hide_fields_11" value="">
  <input type="hidden" name="form_key" value="getstarted">
  <input type="hidden" name="item_meta[0]" value="">
  <input type="hidden" id="frm_submit_entry_11" name="frm_submit_entry_11" value="0c085c1fec"><input type="hidden" name="_wp_http_referer" value="/pursuit/cryptocurrency/home-exchange-alternative/"><div id="frm_field_57_container" class="frm_form_field form-field  frm_none_container">
      <label for="field_qy05f83" class="frm_primary_label">Name
          <span class="frm_required"></span>
      </label>
      <input type="text" id="field_qy05f83" name="item_meta[57]" value="" placeholder="Name" data-invmsg="Name is invalid" aria-invalid="false">
      
      
  </div>
  <div id="frm_field_58_container" class="frm_form_field form-field  frm_required_field frm_none_container">
      <label for="field_3asv293" class="frm_primary_label">Email Address
          <span class="frm_required">*</span>
      </label>
      <input type="text" id="field_3asv293" name="item_meta[58]" value="" placeholder="Email Address" data-reqmsg="This field cannot be blank." aria-required="true" data-invmsg="Email Address is invalid" aria-invalid="false">
      
      
  </div>
      <input type="hidden" name="item_key" value="">
      <div class="frm_submit">
  
  <input type="submit" value="GET STARTED">
  <img class="frm_ajax_loading" src="../wp-content/plugins/formidable/images/ajax_loader.gif" alt="Sending" style="visibility:hidden;">
  
  </div></div>
  </fieldset>
  </div>
  </form>
  </div>
  </div>
                      </div>
                  </div>
                  <div class="elementor-element elementor-element-59931582 elementor-widget elementor-widget-spacer" data-id="59931582" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                      <div class="elementor-spacer">
              <div class="elementor-spacer-inner"></div>
          </div>
                  </div>
                  </div>
                          </div>
                      </div>
          </div>
                                  </div>
                      </div>
          </section>
                          </div>
                          </div>
                      </div>
              </section>    
          <!-- Comment form for pages -->
      <div class="container">        <div class="row">
              <div class="col-md-12">
              
  
              </div>
          </div>
      </div><!-- /.container -->    <!-- End Comment form for pages -->
      
          
                      
      
      </div><!-- /.inner-container -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  
    
  <div class="prefooter"></div>
  
  <footer class="footer" role="contentinfo">
      <div class="container">
                              <div class="footer-widgets row th-widget-area">
                                        <div class="footer-area-1 col-md-4 col-sm-6">
                      <section class="widget media_image-3 widget_media_image"><div class="widget-inner">
                       <h3 style="color:white ;">Crytos Era</h3>    
                    </div></section><section class="widget text-4 widget_text"><div class="widget-inner">			<div class="textwidget"><p>Mannan' development is a premium  designed for cryptocurrency exchanges, ICOs, digital wallets, bitcoin companies, and cryptocurrency related businesses.</p>
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
  
  </body></html>