

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title') || Inventory Management System </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      @include('frontend.layout.partials.style')

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('/')}}frontend/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->

      @include('frontend.layout.partials.header')
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      @yield('body')
      
      <!--  footer -->

      @include('frontend.layout.partials.footer')

      <!-- end footer -->
      <!-- Javascript files-->
      @include('frontend.layout.partials.script')
    
      
   </body>
</html>

