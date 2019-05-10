<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{url('/')}}"><img src="{{url('/img/core-img/logo.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="{{url('/Shop')}}">Dresses</a></li>
                                        <li><a href="{{url('/Shop')}}">Blouses &amp; Shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">T-shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">Rompers</a></li>
                                        <li><a href="{{url('/Shop')}}">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="{{url('/Shop')}}">T-Shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">Polo</a></li>
                                        <li><a href="{{url('/Shop')}}">Shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">Jackets</a></li>
                                        <li><a href="{{url('/Shop')}}">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="{{url('/Shop')}}">Dresses</a></li>
                                        <li><a href="{{url('/Shop')}}">Shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">T-shirts</a></li>
                                        <li><a href="{{url('/Shop')}}">Jackets</a></li>
                                        <li><a href="{{url('/Shop')}}">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="{{url('/img/bg-img/bg-6.jpg')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/Shop')}}">Shop</a></li>
                                    <li><a href="{{url('/SingleProduct')}}">Product Details</a></li>
                                    <li><a href="{{url('/Checkout')}}">Checkout</a></li>
                                    <li><a href="{{url('/Blog')}}">Blog</a></li>
                                    <li><a href="{{url('/Contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/Blog')}}">Blog</a></li>
                            <li><a href="{{url('/Contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{url('/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="{{url('/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{url('/img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>