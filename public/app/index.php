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
    <link href="app/bower_components/ng-tags-input/ng-tags-input.css" rel="stylesheet">
    <link href="app/bower_components/fontawesome/css/font-awesome.css" rel="stylesheet">
    <link href="app/bower_components/angular-loading-bar/build/loading-bar.css" rel="stylesheet">
    <link href="app/bower_components/toastr/toastr.css" rel="stylesheet">
    <link href="app/bower_components/angular-ui-switch/angular-ui-switch.css" rel="stylesheet">

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
  <body ng-controller="ApplicationCtrl">
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div ng-include="'app/partials/navbar.html'"></div>

    <div class="container" ng-view></div>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="app/bower_components/jquery/dist/jquery.js"></script>
    <script src="app/bower_components/angular/angular.js"></script>
    <script src="app/bower_components/lodash/dist/lodash.compat.js"></script>
    <script src="app/bower_components/restangular/dist/restangular.js"></script>
    <script src="app/bower_components/angular-route/angular-route.js"></script>
    <script src="app/bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="app/bower_components/angular-filter/dist/angular-filter.js"></script>
    <script src="app/bower_components/angular-utils-pagination/dirPagination.js"></script>
    <script src="app/bower_components/ng-tags-input/ng-tags-input.js"></script>
    <script src="app/bower_components/angular-loading-bar/build/loading-bar.js"></script>
    <script src="app/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <script src="app/bower_components/angular-bootstrap/ui-bootstrap.min.js"></script>
    <script src="app/bower_components/angular-md5/angular-md5.js"></script>
    <script src="app/bower_components/angular-timedistance/src/bd.timedistance.js"></script>
    <script src="app/bower_components/angular-timedistance/src/bd.timedistance.js"></script>
    <script src="app/bower_components/toastr/toastr.js"></script>
    <script src="app/bower_components/angular-ui-switch/angular-ui-switch.js"></script>
    <!-- endbower -->
    <!-- endbuild -->


    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="app/scripts/app.js"></script>

    <!-- Auth -->
    <script src="app/scripts/auth/ApplicationCtrl.js"></script>
    <script src="app/scripts/auth/LoginCtrl.js"></script>
    <script src="app/scripts/auth/SessionService.js"></script>
    <script src="app/scripts/auth/AuthService.js"></script>
    <script src="app/scripts/auth/AuthInterceptor.js"></script>
    <script src="app/scripts/auth/AuthEvents.js"></script>
    <script src="app/scripts/auth/LoginDirective.js"></script>

    <!-- Partials -->
    <script src="app/scripts/dashboard/DashboardCtrl.js"></script>
    <script src="app/scripts/navbar/NavbarCtrl.js"></script>

    <!-- Subjects -->
    <script src="app/scripts/subjects/SubjectsCtrl.js"></script>
    <script src="app/scripts/subjects/SubjectsFactory.js"></script>

    <!-- Topics -->
    <script src="app/scripts/topics/TopicsCtrl.js"></script>
    <script src="app/scripts/topics/TopicsFactory.js"></script>

    <!-- Activities -->
    <script src="app/scripts/activities/ActivitiesCtrl.js"></script>
    <script src="app/scripts/activities/ActivitiesFactory.js"></script>

    <!-- Answers -->
    <script src="app/scripts/answers/AnswersCtrl.js"></script>
    <script src="app/scripts/answers/AnswersFactory.js"></script>

    <!-- Famouses -->
    <script src="app/scripts/famouses/FamousesCtrl.js"></script>
    <script src="app/scripts/famouses/FamousesFactory.js"></script>

    <!-- Users -->
    <script src="app/scripts/users/UsersCtrl.js"></script>
    <script src="app/scripts/users/UsersFactory.js"></script>

    <!-- Shares -->
    <script src="app/scripts/shares/SharesCtrl.js"></script>

    <!-- Articles-->
    <script src="app/scripts/articles/ArticlesCtrl.js"></script>
    <script src="app/scripts/articles/ArticlesFactory.js"></script>

    <!-- Reddits -->
    <script src="app/scripts/reddits/RedditsCtrl.js"></script>
    <script src="app/scripts/reddits/RedditsFactory.js"></script>
    <script src="app/scripts/reddits/FavoritedRedditsFactory.js"></script>

    <!--Timeline-->
    <script src="app/scripts/timeline/TimelineFactory.js"></script>

    <!-- Notifications -->
    <script src="app/scripts/notifications/NotificationsFactory.js"></script>

    <!--Schools-->
    <script src="app/scripts/schools/SchoolsCtrl.js"></script>
    <script src="app/scripts/schools/SchoolsFactory.js"></script>

    <!-- Notifications -->
    <script src="app/scripts/notifications/NotificationsFactory.js"></script>

    <!-- Filters -->
    <script src="app/scripts/filters/spacesToDashes.js"></script>
    <script src="app/scripts/filters/limitString.js"></script>

    <!-- inject:partials -->
    <!-- angular templates will be automaticaly converted in js and inserted here -->
    <!-- endinject -->
    <!-- endbuild -->

  </body>
</html>
