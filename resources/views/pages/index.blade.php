<!doctype html>
<html lang="en" ng-app="Application">
<head>
  <!-- TITLE -->
  <title>Worth Tasks</title>

  <!-- META DATA -->
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="authors" content="">

  <!-- ICONS -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- STYLESHEETS -->
  <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
  <% css('dependencies/bootstrap.css') %>
  <% css('dependencies/font-awesome.css') %>
  <%-- css('badges.css') --%>
  <% css('animate.css') %>
  <%-- css('dialogs.css') --%>
  <% css('style.css') %>
  <% css('blue.css') %>

  <% css('dependencies/xeditable.css') %>

  <!-- JAVASCRIPT -->
  <!--<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js" type="text/javascript"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-route.js" type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-animate.js" type="text/javascript"></script>-->
  <%js('dependencies/jquery-2.1.1.min.js')%>
  <%js('dependencies/jquery-ui.min.js')%>
  <%js('dependencies/bootstrap.js')%>

  <!-- Angular Core -->
  <%js('dependencies/angular.js')%>
  <%js('dependencies/angular-route.js')%>
  <%js('dependencies/angular-ui-router.js')%>
  <%js('dependencies/angular-animate.js')%>
  <%js('dependencies/angular-resource.js')%> 
  <%js('dependencies/angular-sanitize.js')%> 
  <%js('dependencies/angular-translate.js')%>
  <%js('dependencies/angular-storage.js')%>
  <%js('dependencies/angular-dragdrop.js')%>
  <%js('dependencies/xeditable.js')%>

  <!-- Angular Add Ons -->
  <%js('extras/dialogs.js')%>
  <%js('extras/angular-translate/service/default-interpolation.js')%>
  <%js('extras/angular-translate/service/storage-key.js')%>
  <%js('extras/angular-translate/service/translate.js')%>
  <%js('extras/angular-translate/filter/translate.js')%>
  <%js('extras/dialogs-default-translations.js')%>
  <%js('extras/ui-bootstrap-tpls-0.11.0.min.js')%>
  <%js('extras/moment.js')%>
  <%js('extras/angular-moment.js')%>

  <!-- Main Application -->
  <% angularjs('Application.js') %>

  <!-- Module: Application -->
  <% angularjs('modules/Application/controllers/ApplicationController.js') %>
  <% angularjs('modules/Application/services/Broadcast.js') %>
  <% angularjs('modules/Application/services/Dialog.js') %>
  <% angularjs('modules/Application/services/RedirectTo.js') %>
  <% angularjs('modules/Application/services/Session.js') %>
  <% angularjs('modules/Application/Config.js') %>

  <!-- Module: Navigation -->
  <% angularjs('modules/Navigation/controllers/NavigationController.js') %>
  <% angularjs('modules/Navigation/directives/Navigation.js') %>

  <!-- Module: Organization -->
  <% angularjs('modules/Organization/controllers/OrganizationController.js') %>
  <% angularjs('modules/Organization/services/Organization.js') %>  
  <% angularjs('modules/Organization/Config.js') %>  

  <!-- Module: Project -->
  <% angularjs('modules/Project/controllers/ProjectController.js') %>
  <% angularjs('modules/Project/services/Project.js') %>
  <% angularjs('modules/Project/services/ProjectService.js') %>
  <% angularjs('modules/Project/Config.js') %>

  <!-- Module: TaskList -->
  <% angularjs('modules/TaskList/controllers/TaskListController.js') %>
  <% angularjs('modules/TaskList/controllers/TaskListDialogController.js') %>
  <% angularjs('modules/TaskList/controllers/TaskListDroppableController.js') %>
  <% angularjs('modules/TaskList/services/TaskList.js') %>
  <% angularjs('modules/TaskList/services/TaskListService.js') %>
  <% angularjs('modules/TaskList/Config.js') %>
  

  <!-- Module: Task -->
  <% angularjs('modules/Task/controllers/TaskController.js') %>
  <% angularjs('modules/Task/controllers/TaskCommentController.js') %>
  <% angularjs('modules/Task/controllers/TaskDisplayController.js') %>
  <% angularjs('modules/Task/controllers/TaskDialogController.js') %>
  <% angularjs('modules/Task/services/Task.js') %>
  <% angularjs('modules/Task/services/TaskService.js') %>
  <% angularjs('modules/Task/services/TaskComment.js') %>
  <% angularjs('modules/Task/services/TaskCommentService.js') %>
  <% angularjs('modules/Task/Config.js') %>

  <!-- Module: Auth -->
  <% angularjs('modules/Auth/controllers/AuthLoginController.js') %>
  <% angularjs('modules/Auth/controllers/AuthLogoutController.js') %>
  <% angularjs('modules/Auth/services/Auth.js') %>
  <% angularjs('modules/Auth/Config.js') %>

  <!-- Module: User -->
  <% angularjs('modules/User/controllers/UserController.js') %>
  <% angularjs('modules/User/services/User.js') %>
  <% angularjs('modules/User/services/UserService.js') %>
  <% angularjs('modules/User/Config.js') %>

  <!-- Module: Dashboard -->
  <% angularjs('modules/Dashboard/controllers/DashboardController.js') %>
  <% angularjs('modules/Dashboard/Config.js') %>

  <% js('menu.js') %>

  <script>
  $(document).ready( function() {
    $('.collapse').collapse();
  });
  </script>

 <base href="/#/">
</head>
<body ng-controller="ApplicationController">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <div class="header">
          <span>Worth Tasks</span>
        </div>
        <div class="main-nav-sidebar" ng-controller="NavigationController">
          <span ng-hide="orgs" class="org-header"><i class="fa fa-cog fa-spin"></i> Loading Organizations...</span>
          <span ng-show="orgs">
            <div ng-repeat="org in orgs" class="animated fadeInDown">
              <div class="org-header">
                {{org.title}}
              </div>
              <ul class="nav nav-sidebar">
                <li ng-repeat="project in org.projects"><a href="#/projects/{{project.id}}">{{project.title}}</a></li>
              </ul>
            </div>
          </span>
        </div>
        <!--
        <navigation>
          <nav:menu ng-hide="currentUser" click="login" icon="fa fa-lg fa-fw fa-sign-in" title="Login"></nav:menu>
          <nav:menu ng-show="currentUser" click="logout" icon="fa fa-lg fa-fw fa-sign-out" title="Logout"></nav:menu>
          <nav:menu ng-show="currentUser" view="/office/test" icon="fa fa-lg fa-fw fa-home" title="Office"></nav:menu>
            <nav:group ng-repeat="org in orgs" title="{{org.title}}" showSlide="false" href=".items{{$index}}">
              <span class="items{{$index}} collapse">
                <nav:item view="" target="" click="" ng-repeat="project in org.projects" href="projects/{{project.id}}" title="{{ project.title }}"></nav:item>
              </span>
            </nav:group>      
          </navigation>
          -->
      </div>
      <div id="content" class="content col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
        <div class="main-content col-xs-12">
          <div class="ngview" ng-view></div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>