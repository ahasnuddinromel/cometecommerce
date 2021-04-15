<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{ (Route::currentRouteName() == 'admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        {{--<li class="{{ (Route::currentRouteName() == 'admin.register') ? 'ok' : '' }}"><a href="{{ route('admin.register') }}">Add New Users</a></li>--}}
                        <li><a href="register.html"> Role </a></li>
                        <li><a href="forgot-password.html"> Permission</a></li>
                    </ul>
                </li>              
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Product</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{ (Route::currentRouteName() == 'product.index') ? 'ok' : '' }}"><a href="{{ route('product.index') }}"> Product List</a></li>
                        <li class="{{ (Route::currentRouteName() == 'product.create') ? 'ok' : '' }}"><a href="{{ route('product.create') }}">Add New Product</a></li>
                        <li  class="{{ (Route::currentRouteName() == 'cata.index') ? 'ok' : '' }}"><a href="{{ route('cata.index') }}"> Category List</a></li>
                        <li  class="{{ (Route::currentRouteName() == 'subcatagory.index') ? 'ok' : '' }}"><a href="{{ route('subcatagory.index') }}">Sub Catagory</a></li>
                        <li  class="{{ (Route::currentRouteName() == 'brand.index') ? 'ok' : '' }}"><a href="{{ route('brand.index') }}">Brand List</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Orders</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('order.show') }}"> Orders List</a></li>
                        <li><a href="#"> Delivery Status </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Blog Post</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"> Posts </a></li>
                        <li><a href="#"> Category </a></li>
                        <li><a href="#"> Tag</a></li>
                    </ul>
                </li>
                <li>
                    <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Add Offers</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-user-plus"></i> <span>Settings</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{ (Route::currentRouteName() == 'company.index') ? 'ok' : '' }}"><a href="{{ route('company.index') }}"> Company Info</a></li>
                        <li class="{{ (Route::currentRouteName() == 'slider.index') ? 'ok' : '' }}"><a href="{{ route('slider.index') }}"> Slider</a></li>
                        <li class="{{ (Route::currentRouteName() == 'social.index') ? 'ok' : '' }}"><a href="{{ route('social.index') }}">Social</a></li>
                        <li><a href="#">Sent Email</a></li>
                        <li><a href="#">Sent Notification</a></li>
                        <li><a href="#">Sent SMS</a></li>
                    </ul>
                </li>                 
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
