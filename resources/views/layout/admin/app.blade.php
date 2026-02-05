<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.include.head')
    @stack('css')
  </head>
  <body>
      @yield('content')
      <!-- partial:partials/_navbar.html -->
      @include('admin.include.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.include.sidebar')
        <!-- partial -->
      @include('admin.include.panel')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.include.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.include.script')
    @stack('js')
    <!-- End custom js for this page -->
  </body>
</html>