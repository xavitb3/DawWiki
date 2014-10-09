<!doctype html>
<html class="no-js" ng-app="app">
  <head>
    <meta charset="utf-8">
    <title>DawWiki</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css({.tmp,app}) styles/vendor.css -->
    <link rel="stylesheet" href="app/bower_components/bootstrap/dist/css/bootstrap.css">

    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css({.tmp,app}) styles/main.css -->
    <link rel="stylesheet" href="app/styles/main.css">
    <!-- endbuild -->

    <!-- build:js scripts/modernizr.js -->
    <script src="app/bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div ng-include="'app/partials/navbar.html'"></div>

    <div class="container" ng-view></div>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="app/bower_components/jquery/dist/jquery.js"></script>
    <script src="app/bower_components/angular/angular.js"></script>
    <script src="app/bower_components/lodash/dist/lodash.compat.js"></script>
    <script src="app/bower_components/restangular/dist/restangular.js"></script>
    <script src="app/bower_components/angular-route/angular-route.js"></script>
    <!-- endbower -->
    <!-- endbuild -->


    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="app/scripts/app.js"></script>
    <script src="app/scripts/navbar/NavbarCtrl.js"></script>
    <script src="app/scripts/subjects/SubjectsCtrl.js"></script>
    <script src="app/scripts/shares/SharesCtrl.js"></script>
    <script src="app/scripts/dashboard/DashboardCtrl.js"></script>
    <script src="app/scripts/filters/spacesToDashes.js"></script>

    <!-- inject:partials -->
    <!-- angular templates will be automaticaly converted in js and inserted here -->
    <!-- endinject -->
    <!-- endbuild -->

  </body>
</html>
