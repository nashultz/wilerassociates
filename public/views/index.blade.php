<!doctype html>
<html lang="en">
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
  <% css('style.css') %>
  <!-- FONTS -->
  <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type='text/css'>
  <!-- JAVASCRIPT -->
  <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <!--<%-- js('dependencies/jquery-2.1.1.min.js') --%>-->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js" type="text/javascript"></script>
  <!--<%-- js('dependencies/bootstrap.js') --%>-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.carousel').carousel({
        interval: 10000
      });
    });
  </script>
  
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
  <div class="main container">
    <div class="row">
      <div class="welcome">
          <h1>Welcome</h1>
          <p>We welcome you to Wiler & Associates Real Estate Services, Inc. Wiler & Associates offers more than two decades of commercial and residential real estate experience in the state of Texas. We bring together a collection of market savvy, customer centricity, and real estate experience to provide our customers with the greatest satisfaction.</p>
          <p>At W&A we not only work closely with our clients to help facilitate the buying or selling process, we offer support from initial contact to closing and beyond. We strive to create value through the eyes of our clients, and pride ourselves on creating lifelong relationships by working hard to provide the best experience possible. Our licensed real estate team has earned a reputation for extraordinary service, integrity, and personal attention to our clients.</p>
          <p>We look forward to having the opportunity to earn your business.</p>
        </div>
      <div class="listings-grid">
        <div class="listings">
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <% img('','properties/c_1.jpg',array('class'=>'img-thumbnail img-responsive')) %>
              <div class="desc">
                <p>Arlington Comfort Suites - 411 Road to 6 Flags W<br>
                   Arlington, TX 76011</p>
                <p>Listed By: Dustin Hughey</p>
                <p>108 Rooms Full Service Comfort Suites Hotel, All Suites, 
                   Top Ranked Hotel, 71,149 +- Sqft, 2.41 acres 411 W Road to 
                   Six Flags, Arlington, Texas 76011 Turnpike South Addition 
                   Lot 1 B1, 2.41 acres
                </p>
              </div>
              <div class="viewlisting">
                <button class="btn btn-primary btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <% img('','properties/c_1.jpg',array('class'=>'img-thumbnail img-responsive')) %>
              <div class="desc">
                <p>Arlington Comfort Suites - 411 Road to 6 Flags W<br>
                   Arlington, TX 76011</p>
                <p>Listed By: Dustin Hughey</p>
                <p>108 Rooms Full Service Comfort Suites Hotel, All Suites, 
                   Top Ranked Hotel, 71,149 +- Sqft, 2.41 acres 411 W Road to 
                   Six Flags, Arlington, Texas 76011 Turnpike South Addition 
                   Lot 1 B1, 2.41 acres
                </p>
              </div>
              <div class="viewlisting">
                <button class="btn btn-primary btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <% img('','properties/c_1.jpg',array('class'=>'img-thumbnail img-responsive')) %>
              <div class="desc">
                <p>Arlington Comfort Suites - 411 Road to 6 Flags W<br>
                   Arlington, TX 76011</p>
                <p>Listed By: Dustin Hughey</p>
                <p>108 Rooms Full Service Comfort Suites Hotel, All Suites, 
                   Top Ranked Hotel, 71,149 +- Sqft, 2.41 acres 411 W Road to 
                   Six Flags, Arlington, Texas 76011 Turnpike South Addition 
                   Lot 1 B1, 2.41 acres
                </p>
              </div>
              <div class="viewlisting">
                <button class="btn btn-primary btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
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
            <div class="facontent"><span class="fa fa-fax fa-fw fa_front"></span>Fax: 512 244-6781</div>
            <div class="spacer-5"></div>
            <div class="facontent"><span class="fa fa-map-marker fa-fw fa_front"></span>13101 El Camino Road</div>
            <div class="facontent"><div class="faspacer"></div>Austin, Texas  78727</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="disclaimer">
            <h5>Discliamer</h5>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
