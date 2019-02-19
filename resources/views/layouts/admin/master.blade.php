<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME')}}</title>
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 @include('layouts.admin.partials.styles')
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('layouts.admin.partials.header')
  
@include('layouts.admin.partials.sidebar')
 
  <div class="content-wrapper">
    @yield('content')
  </div>
 @include('layouts.admin.partials.footer')
</body>
</html>
