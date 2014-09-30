@extends('layouts.frontend.pages')

@section('extrascripts')
function floor(number)
{
  return Math.floor(number*Math.pow(10,2))/Math.pow(10,2);
}

function dosum()
{
  var mi = document.temps.IR.value / 1200;
  var base = 1;
  var mbase = 1 + mi;
  for (i=0; i<document.temps.YR.value * 12; i++)
  {
    base = base * mbase
  }
  document.temps.PI.value = floor(document.temps.LA.value * mi / ( 1 - (1/base)))
  document.temps.MT.value = floor(document.temps.AT.value / 12)
  document.temps.MI.value = floor(document.temps.AI.value / 12)
  var dasum = document.temps.LA.value * mi / ( 1 - (1/base)) +
	document.temps.AT.value / 12 +
	document.temps.AI.value / 12;
  document.temps.MP.value = floor(dasum);
}
// -->
<!--
if (window.focus) self.focus();
// -->
@stop

@section('content')
<div class="pages-container container">
  <div class="row">
    <div class="col-sm-3 col-md-4">
      <div class="pages-heading-wrapper">
        <h3>Resource Links</h3>
      </div>
      <div class="pages-wrapper">
        @include('layouts.frontend.partials.resourcenav')
      </div>
    </div>
    <div class="col-sm-9 col-md-8">
      <div class="pages-heading-wrapper">
        <h3>Simple PITI</h3>
      </div>
      <div class="pages-wrapper">
        <div class="pages-r">
          <div class="pages-content">
            {!! Form::open(array(
              'route' => 'simplepiti',
              'name'  => 'temps',
              'class' => 'form-horizontal'
            )) !!}
              <!-- Loan Amount Form Input -->
              <div class="form-group">
                  {!! Form::label('LA','Loan Amount:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('LA', null, [
                      'class'    => 'form-control',
                      'onchange' => 'dosum()',
                      'tabindex' => '1'
                    ]) !!}
                    <span class="input-group-addon">.00</span>
                  </div>
              </div>
              <!-- Length of Loan Form Input -->
              <div class="form-group">
                  {!! Form::label('YR','Length of Loan:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    {!! Form::text('YR', null, [
                      'class'    => 'form-control',
                      'onchange' => 'dosum()',
                      'tabindex' => '2'
                    ]) !!}
                    <span class="input-group-addon">Years</span>
                  </div>
              </div>
              <!-- Interest Rate Form Input -->
              <div class="form-group">
                  {!! Form::label('IR','Interest Rate:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    {!! Form::text('IR', null, [
                      'class'    => 'form-control',
                      'onchange' => 'dosum()',
                      'tabindex' => '3'
                    ]) !!}
                    <span class="input-group-addon">%</span>
                  </div>
              </div>
              <!-- Annual Property Tax Form Input -->
              <div class="form-group">
                  {!! Form::label('AT','Annual Property Tax:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('AT', null, [
                      'class'    => 'form-control',
                      'onchange' => 'dosum()',
                      'tabindex' => '4'
                    ]) !!}
                    <span class="input-group-addon">.00</span>
                  </div>
              </div>
              <!-- Annual Homeowners Insurance Form Input -->
              <div class="form-group">
                  {!! Form::label('AI','Annual Homeowners Insurance:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('AI', null, [
                      'class'    => 'form-control',
                      'onchange' => 'dosum()',
                      'tabindex' => '5'
                    ]) !!}
                    <span class="input-group-addon">.00</span>
                  </div>
              </div>
              {!! Form::hidden('','hiddenValue',[
                'onclick' => 'dosum()'
              ]) !!}
              <!-- Principle &amp; Interest Form Input -->
              <div class="form-group">
                  {!! Form::label('PI','Principle &amp; Interest:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('PI', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Property Taxes Form Input -->
              <div class="form-group">
                  {!! Form::label('MT','Property Taxes:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('MT', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Homeowner's Insurance Form Input -->
              <div class="form-group">
                  {!! Form::label('MI','Homeowner\'s Insurance:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('MI', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
              <!-- Total PITI Payment Form Input -->
              <div class="form-group">
                  {!! Form::label('MP','Total PITI Payment:', ['class'=>'control-label col-sm-4 col-sm-offset-1']) !!}
                  <div class="input-group col-sm-5">
                    <span class="input-group-addon">$</span>
                    {!! Form::text('MP', null, ['class'=>'form-control']) !!}
                  </div>
              </div>
            {!! Form::close() !!}
            <p class="text-center">The accuracy and applicability of this calculator is not guaranteed.<br>
                Please contact your loan officer for more information</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop