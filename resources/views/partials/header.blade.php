    <div class="mobile-display"></div>
    <div class="mobile-menu-panel">
        <span class="mclose">
            <i class="fa fa-times"></i>
        </span>
        <div class="mobilelogo">
            <a href="index.php">Menu</a>
        </div>
        <h4><a href="#">Organic</a></h4>
        <ul>
            <li><a href="/products/organic-suits">Organic Suits</a></li>
            <li><a href="/products/organic-shirts">Organic Shirts</a></li>
            <li><a href="organic-products.php">Organic Pants</a></li>
            <li><a href="organic-products.php">Organic Vests</a></li>
            <li><a href="all-products.php">3 Piece Suits</a></li>
        </ul>


        <h4><a href="#">Suits</a></h4>
        <ul>
            <li><a href="all-products.php">Premium Suits</a></li>
            <li><a href="all-products.php">Business Suits</a></li>
            <li><a href="all-products.php">Seasonal Suits</a></li>
            <li><a href="all-products.php">Vests</a></li>
            <li><a href="tuxedo.php">Tuxedos</a></li>
            <li><a href="all-products.php">3 Piece Suits</a></li>

        </ul>

        <h4><a href="#">Shirts</a></h4>
        <ul>
            <li><a href="all-products.php">Premium Shirts</a></li>
            <li><a href="all-products.php">Business Shirts</a></li>
            <li><a href="all-products.php">Casual Shirts</a></li>
            <li><a href="all-products.php">Seasonal Shirts</a></li>
        </ul>



        <h4><a href="#">Blazers</a></h4>
        <ul>
            <li><a href="all-products.php">Premium Blazer</a></li>
            <li><a href="all-products.php">Business Blazer</a></li>
            <li><a href="all-products.php">Casual Blazer</a></li>
            <li><a href="all-products.php">Party Blazer</a></li>
            <li><a href="all-products.php">Seasonal Blazer</a></li>
        </ul>


        <h4><a href="#">Pants</a></h4>
        <ul>
            <li><a href="all-products.php">Premium Pants</a></li>
            <li><a href="all-products.php">Business Pants</a></li>
            <li><a href="all-products.php">Casual Pants</a></li>
            <li><a href="all-products.php">Chino Pants</a></li>
            <li><a href="all-products.php">Seasonal</a></li>
        </ul>


        <h4><a href="#">Chinos</a></h4>
        <ul>
            <li><a href="all-products.php">Chino Suits</a></li>
            <li><a href="all-products.php">Chino Pants</a></li>
            <li><a href="all-products.php">Chino Vest</a></li>
        </ul>

        <h4><a href="#">Kids Suits</a></h4>
        <ul>
            <li><a href="all-products.php">Kids Suits</a></li>
            <li><a href="all-products.php">Kids Shirts</a></li>
            <li><a href="all-products.php">Kids Pants</a></li>
            <li><a href="all-products.php">Kids Vests</a></li>
            <li><a href="all-products.php">Kids 3 Piece Suits</a></li>
        </ul>

        <h4><a href="#">Collections</a></h4>
        <ul>
            <li><a href="tuxedo.php">Dinner Tuxedos</a></li>
            <li><a href="all-products.php">Seasonal Shirts</a></li>
            <li><a href="all-products.php">Other type</a></li>
        </ul>

        <h4><a href="#">Accessories</a></h4>
        <ul>
            <li><a href="all-products.php">All</a></li>
            <li><a href="all-products.php">Ties</a></li>
            <li><a href="all-products.php">Tie Clips</a></li>
            <li><a href="all-products.php">Cufflinks</a></li>
            <li><a href="all-products.php">Pocket Square</a></li>
            <li><a href="all-products.php">Suspenders</a></li>
        </ul>

        <h4><a href="#">Weddings</a></h4>
        
         <h4><a href="#">My Account</a></h4>
        <ul>
            <li><a href="all-products.php">Register</a></li>
            <li><a href="all-products.php">Login</a></li>
        </ul>

    </div>
    <div class="headertomenu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-9 text-center">
                    <div class="headerlogo"> <a href="/"> <img src="{{ asset('assets/img/Northsmen-Logo-Final.jpg') }}" alt="blue knot"></a></div>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><a href="#">Personal Stylist</a></li>
                        <li><a href="#">Help</a>
                            <ul>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="contact.php">How it Works</a></li>
                                <li><a href="contact.php">Chat</a></li>
                                <li><a href="contact.php">Personal Stylist</a></li>
                                <li><a href="#">Shipping/ Delivery</a></li>
                                <li><a href="#">Altertions/ Returns</a></li>
                                <li><a href="#">Gift Card</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="#">Payment Inquiry</a></li>
                                <li><a href="#">Tailor's Kit</a></li>
                                <li><a href="#">Fabric Samples</a></li>
                            </ul>
                        </li>
                        <li> <div id="google_translate_element"></div>

                            <!-- Right Side Of Navbar -->
<!--                     <ul class="navbar-nav ml-auto">
                        @php $locale = session()->get('locale'); @endphp
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Language <span class="caret"></span>
                            </a>
                            @switch($locale)
                                @case('fr')
                                <img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French
                                @break
                                @case('es')
                                <img src="{{asset('img/jp.png')}}" width="30px" height="20x"> Spain
                                @break
                                @case('jp')
                                <img src="{{asset('img/jp.png')}}" width="30px" height="20x"> Japanese
                                @break
                                @default
                                <img src="{{asset('img/us.png')}}" width="30px" height="20x"> English
                            @endswitch
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}" width="30px" height="20x"> English</a>
                                <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French</a>
                                <a class="dropdown-item" href="lang/es"><img src="{{asset('img/es.png')}}" width="30px" height="20x"> Spanish</a>
                                <a class="dropdown-item" href="lang/jp"><img src="{{asset('img/jp.png')}}" width="30px" height="20x"> Japanese</a>
                            </div>
                        </li>
                    </ul> -->

                        </li>
                        <li><a href="#">{{ currency()->getUserCurrency() }}</a>

                            <ul>
                                
                                <li><a href="/currency/USD">$USD</a></li>
                                <li><a href="/currency/AUD">$AUD</a></li>
                                <li><a href="/currency/CAD">$Can</a></li>
                                <li><a href="/currency/EUR">€Euro</a></li>
                                <li><a href="/currency/GBP">£Pound</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header top menu-->

    <div class="mobile-menu">
        <div class="container">
            <div class="row text-center">
                <div class="col-4">
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="col-4">
                    <div class="logo-text"><a href="index.php">Northmen</a></div>
                </div>
                <div class="col-4">
                    <div class="mobile-shopping-icon">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start Header main menu -->
    <div class="headermenu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 text-center">
                    <div class="mainmneu">
                        <ul id="main_menu">
                            {!! menu_builder('main-menu') !!}
                            <!-- <li><a href="#">Organic</a>
                                <ul>
                                    <li><a href="/virtual-products/organic-suits">Organic Suits</a></li>
                                    <li><a href="/virtual-products/organic-shirts">Organic Shirts</a></li>
                                    <li><a href="organic-products.php">Organic Pants</a></li>
                                    <li><a href="organic-products.php">Organic Vests</a></li>
                                    <li><a href="all-products.php">3 Piece Suits</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Suits</a>
                                <ul>
                                    <li><a href="all-products.php">Premium Suits</a></li>
                                    <li><a href="all-products.php">Business Suits</a></li>
                                    <li><a href="all-products.php">Seasonal Suits</a></li>
                                    <li><a href="all-products.php">Vests</a></li>
                                    <li><a href="tuxedo.php">Tuxedos</a></li>
                                    <li><a href="all-products.php">3 Piece Suits</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Shirts</a>
                                <ul>
                                    <li><a href="all-products.php">Premium Shirts</a></li>
                                    <li><a href="all-products.php">Business Shirts</a></li>
                                    <li><a href="all-products.php">Casual Shirts</a></li>
                                    <li><a href="all-products.php">Seasonal Shirts</a></li>
                                </ul>
                            </li>


                            <li><a href="#">Blazers</a>
                                <ul>
                                    <li><a href="all-products.php">Premium Blazer</a></li>
                                    <li><a href="all-products.php">Business Blazer</a></li>
                                    <li><a href="all-products.php">Casual Blazer</a></li>
                                    <li><a href="all-products.php">Party Blazer</a></li>
                                    <li><a href="all-products.php">Seasonal Blazer</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pants</a>
                                <ul>
                                    <li><a href="all-products.php">Premium Pants</a></li>
                                    <li><a href="all-products.php">Business Pants</a></li>
                                    <li><a href="all-products.php">Casual Pants</a></li>
                                    <li><a href="all-products.php">Chino Pants</a></li>
                                    <li><a href="all-products.php">Seasonal</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Chinos</a>
                                <ul>
                                    <li><a href="all-products.php">Chino Suits</a></li>
                                    <li><a href="all-products.php">Chino Pants</a></li>
                                    <li><a href="all-products.php">Chino Vest</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Kids Suits</a>
                                <ul>
                                    <li><a href="all-products.php">Kids Suits</a></li>
                                    <li><a href="all-products.php">Kids Shirts</a></li>
                                    <li><a href="all-products.php">Kids Pants</a></li>
                                    <li><a href="all-products.php">Kids Vests</a></li>
                                    <li><a href="all-products.php">Kids 3 Piece Suits</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Collections</a>
                                <ul>
                                    <li><a href="tuxedo.php">Dinner Tuxedos</a></li>
                                    <li><a href="all-products.php">Seasonal Shirts</a></li>
                                    <li><a href="all-products.php">Other type</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Accessories</a>
                                <ul>
                                    <li><a href="all-products.php">All</a></li>
                                    <li><a href="/readymade-products/ties">Ties</a></li>
                                    <li><a href="all-products.php">Tie Clips</a></li>
                                    <li><a href="all-products.php">Cufflinks</a></li>
                                    <li><a href="all-products.php">Pocket Square</a></li>
                                    <li><a href="all-products.php">Suspenders</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Weddings</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 text-right">

                    
                    <ul class="cartmenu">

                        @guest
                            <li><a href="{{ url('/login-register') }}"><i class="fa fa-lock"></i> Login</a></li>

                        @else

                        <li><a href="{{ url('/home') }}">
                            @if(auth()->user()->avatar)
                                <img src="{{ auth()->user()->avatar }}" alt="avatar" width="32" height="32" style="margin-right: 8px;">
                            @endif
                            <i class="fa fa-user"></i>  {{ auth()->user()->name }}</a></li>
                            <li><a href="{{ url('/user-logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>

                        @endguest
                        <li> <a href="/gotocart"><!-- <i class="fa fa-shopping-bag"> -->
<?php 
if(Auth::check()){
    $user_email = Auth::user()->email;
    $userCart = DB::table('cart')->where(['user_email' => $user_email])->get()->count();     
}else{
    $session_id = Session::get('session_id');
    $userCart = DB::table('cart')->where(['session_id' => $session_id])->get()->count();    
}

 ?>
                            <!-- <span style="background: yellow; border-radius: 50%; margin-bottom: 10px;" class="badge">{{$userCart}}</span></i>-->
                            <i class="fa" style="font-size:24px">&#xf07a;</i>
<span class='badge badge-warning' id='lblCartCount'> {{$userCart}} </span>
                            </a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end Header main menu -->


