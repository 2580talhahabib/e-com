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
                                <i class="fas fa-tachometer-alt "></i>Categories</a>
                        </li>
                        <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('Coupon.index') ? 'text-success ' : '' }}" href="{{ route('Coupon.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Coupons</a>
                        </li>
                         <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('size.index') ? 'text-success ' : '' }}" href="{{ route('size.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Sizes</a>
                        </li>
                           <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('color.index') ? 'text-success ' : '' }}" href="{{ route('color.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Colors</a>
                        </li>
                             <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('product.index') ? 'text-success ' : '' }}" href="{{ route('product.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Products</a>
                        </li>
                          </li>
                             <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('customer.index') ? 'text-success ' : '' }}" href="{{ route('customer.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Customers</a>
                        </li>
                              <li class="active has-sub" style="list-style:none;"   >
                            <a class="js-arrow  {{ request()->routeIs('brand.index') ? 'text-success ' : '' }}" href="{{ route('brand.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Brands</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>