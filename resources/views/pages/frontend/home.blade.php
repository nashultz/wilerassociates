@extends('layouts.frontend.default')

@section('content')
<div class="welcome-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="welcome">
            <h1>Wiler &amp; Associates, Inc.</h1>
            <p>We welcome you to Wiler &amp; Associates Real Estate Services, Inc. Wiler &amp; Associates provide
                more than two decades of commerical and residential real estate experience throughout the state of
                Texas. At W&amp;A we offer full service commercial real estate brokerage and expertise in all asset
                classes. Our top producing real estate team has earned a reputation for extraordinary service,
                integrity and personal attention.</p>
            <p>We look forward to having the opportunity to earn your business.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="welcome">
            <h3 class="search-title">Quick Search</h3>
            <form class="">
              <select class="form-control">
                <option>Land - Commercial</option>
                <option>Other - Commercial</option>
                <option>Office/Warehouse</option>
                <option>Retail</option>
                <option>Hotel/Motel</option>
              </select>
              <div class="spacer-5"></div>
              <input type="text" id="" name="" class="form-control" placeholder="Max Price" />
              <div class="spacer-5"></div>
              <input type="text" id="" name="" class="form-control" placeholder="Min Price" />
              <div class="spacer-5"></div>
              <input type="text" id="" name="" class="form-control" placeholder="County" />
              <div class="spacer-5"></div>
              <input type="submit" value="Search" class="btn btn-success btn-block" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="listings-container container">
    <div class="row">
      <div class="listings-grid">
        <div class="listings">
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <img src="img/properties/c_1.jpg" alt="Listing Title" class="img-thumbnail img-responsive"/>
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
                <button class="btn btn-info btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <img src="img/properties/c_1.jpg" alt="Listing Title" class="img-thumbnail img-responsive"/>
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
                <button class="btn btn-info btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing">
              <h4 class="listing-title">Listing Title</h4>
              <img src="img/properties/c_1.jpg" alt="Listing Title" class="img-thumbnail img-responsive"/>
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
                <button class="btn btn-info btn-block">View Listing</button>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
@stop