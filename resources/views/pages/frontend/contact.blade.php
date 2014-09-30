@extends('layouts.frontend.pages')

@section('content')
<div class="pages-container container">
  <div class="row">
    <div class="col-sm-6">
      <div class="pages-heading-wrapper">
        <h3>Contact Us</h3>
      </div>
      <div class="pages-wrapper">
        <div class="pages-r">
          <div class="pages-content">
            {!! Form::open(array(
              'route' => 'contact',
              'name'  => 'contact',
              'class' => 'form-horizontal'
            )) !!}
              <!-- Full Name Form Input -->
              <div class="form-group">
                  {!! Form::label('full-name','Full Name:', ['class'=>'control-label col-sm-3']) !!}
                  <div class="col-sm-7">
                    {!! Form::text('full-name', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Email Form Input -->
              <div class="form-group">
                  {!! Form::label('email','Email:', ['class'=>'control-label col-sm-3']) !!}
                  <div class="col-sm-7">
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Message Subject Form Input -->
              <div class="form-group">
                  {!! Form::label('phone','Phone:', ['class'=>'control-label col-sm-3']) !!}
                  <div class="col-sm-7">
                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Message Content Form Input -->
              <div class="form-group">
                  {!! Form::label('messcont','Message:', ['class'=>'control-label col-sm-3']) !!}
                  <div class="col-sm-7">
                    {!! Form::textarea('messcont', null, ['class'=>'form-control','rows'=>'4']) !!}
                  </div>
              </div>
              <div class="col-sm-4 col-sm-offset-6">
                <!-- Form Send Input -->
                		<div class="form-group">
                			{!! Form::submit('Send', ['class'=>'btn btn-danger pull-right']) !!}
                		</div>
              </div>
              <div class="clearfix"></div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="pages-heading-wrapper">
        <h3>Locations</h3>
      </div>
      <div class="pages-wrapper">
        <div class="pages-r">
          <div class="pages-content">
            <h4>Wiler & Associates Main Office</h4>
            <div class="facontent"><span class="fa fa-map-marker fa-fw fa_front"></span>13101 El Camino Road</div>
            <div class="facontent"><div class="faspacer"></div>Austin, Texas  78727</div>
            <div class="spacer-5"></div>
            <div class="facontent"><span class="fa fa-phone fa-fw fa_front"></span>512 244-6100</div>
            <div class="spacer-5"></div>
            <div class="facontent"><span class="fa fa-fax fa-fw fa_front"></span>512 244-6781</div>
          </div>
        </div>
      </div>
      <div class="pages-heading-wrapper">
        <h3>Agents</h3>
      </div>
      <div class="pages-wrapper">
        <div class="pages-r">
          <div class="pages-content">
            <div class="col-sm-3">
              <img src="img/agents/empty_profile.png" alt="Agent Name" class="img-circle img-responsive"/>
            </div>
            <div class="col-sm-9">
              <h4>Agent Name<br><small>{specialty} {title}</small></h4>
              <div class="facontent"><span class="fa fa-phone fa-fw fa_front"></span>512 244-6100</div>
              <div class="facontent"><span class="fa fa-envelope fa-fw fa_front"></span>email[at]wilerandassociates.com</div>
            </div>
            <div class="clearfix"></div>
            <div class="spacer-10"></div>
            <div class="col-sm-12">
              <div class=""><strong>About:</strong></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed urna facilisis, posuere mi in,
                  imperdiet nibh. Pellentesque vel leo ut orci ultricies aliquet at quis magna. Nam id auctor nibh.
                  Pellentesque id purus lectus. Duis pellentesque bibendum mi, quis vehicula quam ultrices eget. Nullam
                  bibendum augue vel urna ullamcorper, at auctor nisi rutrum. Proin elementum, sapien ut viverra pulvinar,
                  est dui tempus turpis, vitae tempus arcu dui a metus.
              <p>In pharetra rhoncus mattis. Curabitur semper, eros ac dignissim pharetra, mauris felis consequat justo,
                  eget rhoncus odio nisl fringilla felis. Vestibulum blandit egestas ligula vel aliquet. Sed id erat quis
                  leo interdum pulvinar. Quisque blandit tellus eget metus hendrerit, id sagittis orci rutrum. Morbi
                  consectetur aliquet vulputate. Fusce fringilla justo nisl, sit amet volutpat turpis bibendum sed. Proin
                  ut interdum orci. Nulla facilisi. Proin accumsan vulputate metus ornare pharetra. Morbi sem magna,
                  auctor sed facilisis at, mattis ac tortor. Class aptent taciti sociosqu ad litora torquent per conubia
                  nostra, per inceptos himenaeos.</p>
              </div>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop