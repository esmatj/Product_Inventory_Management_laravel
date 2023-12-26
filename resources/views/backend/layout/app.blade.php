<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  @include('backend.layout.partials.style')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    
    @include('backend.layout.partials.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->

      @include('backend.layout.partials.header')
      
      <!--  Header End -->
      <div class="container-fluid">
        
      @yield('body')
      
        @include('backend.layout.partials.footer')
      </div>
      
        
    </div>
  </div>
  
  @include('backend.layout.partials.script')
</body>

</html>