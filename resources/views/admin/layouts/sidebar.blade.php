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
                            <a class="js-arrow" href="#" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Dashboard</a>
                        </li>
                         <li class="active has-sub" style="list-style:none;">
                            <a class="js-arrow" href="{{ route('category.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Category</a>
                        </li>
                        <li class="active has-sub" style="list-style:none;">
                            <a class="js-arrow" href="{{ route('Coupon.index') }}" style="text-decoration: none;color:gray">
                                <i class="fas fa-tachometer-alt "></i>Coupon</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>