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
              <a class="navbar-brand" href="#"><img src="img/logo.gif" alt="Wiler &amp; Associates Logo"/></a>
              <div class="headertxt"><h1>Wiler &amp; Associates, Inc.</h1></div>
              <div class="clearfix"></div>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li>{!! link_to_route('home', 'Home') !!}</a></li>
                  <li>{!! link_to_route('search', 'Search') !!}</li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listings <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li>{!! link_to_route('commlist','Commercial Listings') !!}</li>
                          <li>{!! link_to_route('resilist','Residential Listings') !!}</li>
                        <!--  <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>-->
                      </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>{!! link_to_route('simplepiti','Simple PITI') !!}</li>
                        <li>{!! link_to_route('advpiti','Advanced PITI') !!}</li>
                        <li>{!! link_to_route('mortincome','Mortgage Income Required') !!}</li>
                        <li>{!! link_to_route('mortpayment','Mortgage Payment Qualifier') !!}</li>
                    </ul>
                  </li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </div><!--/.nav-collapse -->
      </div>
  </div>