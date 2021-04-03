<!DOCTYPE html>
<!--This is a starter template page. Use this page to start your new project fromscratch. This page gets rid of all links and provides the needed markup only.-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>{{config('app.name', 'Laravel')}}</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    </head>
    <body class="hold-transition sidebar-mini">
        
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a class="brand-link" href="{{route('home')}}">{{config('app.name', 'Laravel')}}</a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{route('shops.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Shops</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('customers.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Customers</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="content-wrapper"><div class="content"> 
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @yield('content')</div></div>
            <aside class="control-sidebar control-sidebar-dark">
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <footer class="main-footer"></footer>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
