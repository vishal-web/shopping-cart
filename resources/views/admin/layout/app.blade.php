<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title') | ShopAdmin</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('shop/images/favicon.ico') }}" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="{{ asset('shop/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('shop/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('shop/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('shop/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('shop/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('shop/css/app-style.css')}}" rel="stylesheet"/>
  </head>
  <body>
    <!-- Start wrapper-->
    <div id="wrapper">
      <!--Start sidebar-wrapper-->
      
      @include('admin.common.sidebar')
 
      @include('admin.common.header')

      <!--End topbar header-->
      <div class="clearfix"></div>
      <div class="content-wrapper">
        @if (isset($show_bc) && $show_bc === TRUE && (isset($breadcrumbs) || isset($bc_headline)))
        <div class="container-fluid">
          <!-- Breadcrumb-->
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              @if (isset($bc_headline))
              <h4 class="page-title">{{ $bc_headline }}</h4>
              @endif

              @if (isset($breadcrumbs) && !empty($breadcrumbs))
              <ol class="breadcrumb">
                @foreach ($breadcrumbs as $row)
                  @php
                    $current_url = URL::current();
                    $segment_count = count(Request::segments());
                    $last_segment = Request::segment($segment_count);
                    $breadcrumb_url = (isset($row['url']) && !empty($row['url'])) ? url($row['url']) : "javaScript:void();";
                    $breadcrumb_title = $row['title'];
                    $breadcrumb_active = ($current_url == $breadcrumb_url) ? 'active' : '';
                  @endphp
 
                <li class="breadcrumb-item {{ $breadcrumb_active }}" aria-current="page">
                @if ($breadcrumb_active != 'active')
                	<a href="{{ $breadcrumb_url }}">{{ $breadcrumb_title }}</a>
                @else
                	{{ $breadcrumb_title }}
                @endif
                </li>
                @endforeach
              </ol>
              @endif
            </div>
          </div>
          @endif
          @yield('content')
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      <!--Start footer-->
      {{-- <footer class="footer">
        <div class="container">
          <div class="text-center">
            Copyright © 2019 Admin
          </div>
        </div>
      </footer> --}}
      <!--End footer-->
    </div>
    <!--End wrapper-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('shop/js/jquery.min.js') }}"></script>
    <script src="{{ asset('shop/js/popper.min.js') }}"></script>
    <script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
    <!-- simplebar js -->
    <script src="{{ asset('shop/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- waves effect js -->
    <script src="{{ asset('shop/js/waves.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('shop/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('shop/js/app-script.js') }}"></script>
  </body>
</html>