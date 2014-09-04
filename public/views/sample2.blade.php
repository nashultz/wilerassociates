<!doctype html>
<html lang="en" ng-app="Application">
<head>
	<title>Wiler &amp; Associates, Inc.</title>
  <!-- META DATA -->
  <meta charset="UTF-8">
	<meta name="description" content="">
  <meta name="authors" content="">
	<!-- ICONS -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- STYLESHEETS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <!--<%-- css('dependencies/bootstrap.css') --%>-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!--<%-- css('dependencies/font-awesome.css') --%>-->
  <% css('animate.css') %>
  <% css('style2.css') %>
  <!-- FONTS -->
  <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type='text/css'> 

  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <!--<%-- js('dependencies/jquery-2.1.1.min.js') --%>-->

  <!-- Bootstrap JS -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js" type="text/javascript"></script>
  <!--<%-- js('dependencies/bootstrap.js') --%>-->

  <!-- Angular Core -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular.js" type="text/javascript"></script>
  <!-- angularjs('dependencies/angular.js') -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-route.js" type="text/javascript"></script>
  <!-- angularjs('dependencies/angular-route.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-animate.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-animate.js') -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-resource.js" type="text/javascript"></script>
  <!-- angularjs('dependencies/angular-resource.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-cookies.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-cookies.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-loader.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-loader.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-mocks.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-mocks.js') -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-sanitize.js" type="text/javascript"></script>
  <!-- angularjs('dependencies/angular-sanitize.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-scenario.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-scenario.js') -->
  <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular-touch.js" type="text/javascript"></script>-->
  <!-- angularjs('dependencies/angular-touch.js') -->

  <!-- Angular Add-ons -->


  <!-- Angular Main Application -->
  <% angularjs('Application.js') %>

  <!-- Angular Module: Application -->
  <% angularjs('modules/Application/Config.js') %>
  <% angularjs('modules/Application/controllers/ApplicationController.js') %>

  <!-- Angular Module: Admin -->
  <% angularjs('modules/Admin/Config.js') %>

  <!-- Angular Module: Auth -->
  <% angularjs('modules/Auth/Config.js') %>
  <% angularjs('modules/Auth/controllers/AuthController.js') %>
  <% angularjs('modules/Auth/services/AuthService.js') %>

  <!-- Angular Module: User -->
  <% angularjs('modules/User/controllers/UserController.js') %>
  <% angularjs('modules/User/resources/User.js') %>

  <!-- Angular Module: Dashboard -->
  <% angularjs('modules/Dashboard/Config.js') %>
  <% angularjs('modules/Dashboard/controllers/DashboardController.js') %>

</head>
<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><% img('','logo.gif') %></a>
              <div class="headertxt"><h1>Wiler &amp; Associates, Inc.</h1></div>
              <div class="clearfix"></div>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Home</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sample Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<% URL::to('/') %>">Home Page 1</a></li>
                          <li><a href="<% URL::to('/sample2') %>">Home Page 2</a></li>
                        <!--  <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>-->
                      </ul>
                  </li>
                  <li><a href="#">Search</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listings <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Commercial</a></li>
                          <li><a href="#">Residential</a></li>
                        <!--  <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>-->
                      </ul>
                  </li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Locations</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </div><!--/.nav-collapse -->
      </div>
  </div>

  <!-- NG VIEW TESTING AREA -->
  <div ng-view></div>

  <div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="copyright">
            <div class="flogo">
              <% img('','logo-footer.gif') %>
            </div>
            <div class="spacer-10"></div>
            <div class="facontent"><span class="fa fa-phone fa-fw fa_front"></span>512 244-6100</div>
            <div class="spacer-5"></div>
            <div class="facontent"><span class="fa fa-fax fa-fw fa_front"></span>512 244-6781</div>
            <div class="spacer-5"></div>
            <div class="facontent"><span class="fa fa-map-marker fa-fw fa_front"></span>13101 El Camino Road</div>
            <div class="facontent"><div class="faspacer"></div>Austin, Texas  78727</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="disclaimer">
            <h5>Disclaimer</h5>
            <p>This firm is licensed and regulated by the Texas Real Estate Commission (TREC). 
               TREC administers two Recovery Funds which may be used to satisfy judgements against 
               Inspectors and Real Estate Licenses involving a violation of the law.</p>
            <p>Complaints or inquiries should be directed to:</p>
            <div>Texas Real Estate Commission</div>
            <div>512-465-3960</div>
            <div>P.0. Box 12188</div>
            <div>Austin, TX 78711-2188</div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="copyright">
            <div>Copyright &copy; <?php echo date('Y'); ?></div>
            <div>Wiler &amp; Associates, Inc.</div>
            <div>All Rights Reserved</div>
            <div>Site designed &amp; developed by <a href="http://www.systemsedgeonline.com" title="Systems Edge Online, LLC">Systems Edge Online, LLC</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
