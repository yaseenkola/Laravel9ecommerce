@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ url('admin/dashboard') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
                        <h3><b>Easy</b> Admin</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ $route == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ $prefix == '/product' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'add-product' ? 'active' : '' }}"><a
                            href="{{ route('add-product') }}"><i class="ti-more"></i>Add Products</a></li>
                </ul>
            </li>

            <li class="treeview {{ $prefix == '/orders' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Orders </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'pending-orders' ? 'active' : '' }}">
                        <a href="{{ route('pending-orders') }}"><i class="ti-more"></i>Pending Orders</a>
                    </li>

                    <li class="{{ $route == 'accepted-orders' ? 'active' : '' }}">
                        <a href="{{ route('accepted-orders') }}"><i class="ti-more"></i>Accepted Orders</a>
                    </li>

                    <li class="{{ $route == 'outfordelivery-orders' ? 'active' : '' }}">
                        <a href="{{ route('outfordelivery-orders') }}"><i class="ti-more"></i>Out For Delivery
                            Orders</a>
                    </li>

                    <li class="{{ $route == 'delivered-orders' ? 'active' : '' }}">
                        <a href="{{ route('delivered-orders') }}"><i class="ti-more"></i>Delivered Orders</a>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
</aside>
