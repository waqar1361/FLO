<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="find your lost ones">
    <meta name="author" content="Muhammad Waqar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.title', 'FLO') .' | '.  config('app.name')}}</title>
    
    
    {{--    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/sb-admin.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body id="page-top">

@include('admin.nav')

<div id="wrapper">
    
    @include('admin.sidebar')
    
    <div id="content-wrapper">
        
        <main class="container-fluid">
            
            @yield('content')
        
        </main>
        
        <footer class="p-4 bg-light mt-4">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © {{config('app.name')}} {{date('Y')}}</span>
                </div>
            </div>
        </footer>
    
    </div>


</div>

<!-- Scroll to Top Button-->
<a id="to-top" style="display: none">
    <i class="fas fa-chevron-circle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}


<script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/sb-admin.min.js") }}"></script>
<script src="{{ asset("js/notify.min.js") }}"></script>
<script src="{{ asset("js/datepicker.min.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>
@include('layouts.alert')

</body>
</html>
