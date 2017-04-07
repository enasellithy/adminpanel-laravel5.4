<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(!empty($title)) {{$title}} @endif</title>
 <!-- Include Stylesheets -->
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/rs-plugin/css/settings.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/selectbox/select_option1.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/datepicker/datepicker.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/isotope/jquery.fancybox.css" />
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/plugins/isotope/isotope.css" />
  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/css/style.css">
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/options/animate.css">
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/options/optionswitch.css">
  <link rel="stylesheet" href="{{secure_asset('public/front')}}/css/colors/default.css" id="option_color">

  @if((LaravelLocalization::setLocale()) == 'ar') 
<link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css" />
@endif
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('css')
</head>
<body class="changeHeader">
    <!--=== option Switcher ===-->
  <i class="option-switcher-btn fa fa-gear hidden-xs"></i>
  <div class="option-switcher animated">
    <div class="option-swticher-header">
      <div class="option-switcher-heading">Template Options</div>            
      <div class="theme-close"><i class="fa fa-close"></i></div>
    </div>
    <div class="option-swticher-body">
      <!-- Theme Colors -->
      <ul class="list-unstyled">
        <li class="theme-default theme-active" data-color="default"></li>
        <li class="theme-green" data-color="green"></li>
        <li class="theme-blue" data-color="blue"></li>
        <li class="theme-purple last" data-color="purple"></li>
      </ul>
      <!-- Layout Styles -->
      <div class="row no-col-space layoutStyle">
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a>                
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a>
        </div>                
      </div> 
      <!-- Header Styles -->
      <div class="row no-col-space headerStyle">
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header-light">Default header</a>
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block fixed-header-dark">Fixed dark</a>
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u  btn-block static-header-light">Static light</a>
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u  btn-block static-header-dark">Static dark</a>
        </div>               
      </div>              
    </div>
  </div>
  <!--/option-switcher-->
    <div class="main-wrapper">
