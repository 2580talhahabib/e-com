  <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ url('admin/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub" style="list-style:none;">
                            <a class="js-arrow  {{ request()->routeIs('Dashboard') ? 'text-success ' : '' }}" href="#" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Dashboard</a>
                        </li>
                         <li class="active has-sub" style="list-style:none;">
                            <a class="js-arrow  {{ request()->routeIs('category.index') ? 'text-success ' : '' }}" href="{{ route('category.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Category</a>
                        </li>
                        <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('Coupon.index') ? 'text-success ' : '' }}" href="{{ route('Coupon.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Coupon</a>
                        </li>
                         <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('size.index') ? 'text-success ' : '' }}" href="{{ route('size.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Size</a>
                        </li>
                           <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('color.index') ? 'text-success ' : '' }}" href="{{ route('color.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Color</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>