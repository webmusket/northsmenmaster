<!--start Footer area -->
<div style="height: 30px;">
    @if (\Session::has('success'))
              <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
              </div><br />
             @endif
             @if (\Session::has('failure'))
              <div class="alert alert-danger">
                <p>{{ \Session::get('failure') }}</p>
              </div><br />
             @endif
</div>
<div class="footer-area">
   <div class="mobile-footer">
                   <div class="col-sm-12 bigpc-none">
                <p class="footeracrodion">
                    <a class="footeracrodion-text" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Footer Menu
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="row">
                        <div class="col-xs-6 col-lg-4">
                            <h4>Customize</h4>
                            <ul>
                                <li><a href="#">Suits</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Vests</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Tuxedos</a></li>
                                <li><a href="#">Kids Suits</a></li>
                                <li><a href="#">Weddings </a></li>
                                <li><a href="#">Collections</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Blueknot</a></li>
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#">Why Custom</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Measurement</a></li>
                                <li><a href="contact.php">Wedding</a></li>
                                <li><a href="blog.php">Blogs</a></li>
                                <li><a href="#">Current Promotion</a></li>
                                <li><a href="#">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <h4>Help Center</h4>
                            <ul>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#">Shipping/ Delivery</a></li>
                                <li><a href="#">Altertions/ Returns</a></li>
                                <li><a href="#">Gift Card</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="#">Payment Inquiry</a></li>
                                <li><a href="#">Tailor's Kit</a></li>
                                <li><a href="#">Fabric Samples</a></li>
                                <li><a href="#">Security and Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
   </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mobile-none">
                <div class="row">
                        <div class="col-lg-4">
                            <h4 style="margin-left: 18px;">Customize</h4>
                            
                                {!!menu_builder('customize') !!}
                            
                        </div>
                        <div class="col-lg-4">
                            <h4 style="margin-left: 18px;">Information</h4>
                            
                                {!! menu_builder('information') !!}
                          
                        </div>
                        <div class="col-lg-4">
                            <h4 style="margin-left: 18px;">Help Center</h4>
                           
                            {!! menu_builder('help-canter') !!}
                        
                        </div>
                    </div>
            </div>
            
            <div class="col-lg-4">
                <div class="footer-widgets">
                    <h4>Join our mailing list to receive $25 off your first suit</h4>
                    <div class="email-subscription-form">
                        <form method="post" action="{{url('newsletter')}}">@csrf
                            <input type="email"  name="email" placeholder="Email Address">
                            <input type="submit" value="Sign Up">
                        </form>
                    </div>
                </div>
                <div class="footer-widgets">
                    <h4>Follow us</h4>
<ul class="social-links">



<?php 
$html = menu_builder('social-menu');


// Create a new DOM Document
$xml = new DOMDocument();

// Load the html contents into the DOM
if ($html) {
    $xml->loadHTML($html);

    // Empty array to hold all links to return
    $result = array();

    //Loop through each <li> tag in the dom
    foreach($xml->getElementsByTagName('li') as $li) {

        //Loop through each <a> tag within the li, then extract the node value
        foreach($li->getElementsByTagName('a') as $links){
            $link = $links->getAttribute( 'href' );
            echo "<li><a href='$link'><i class='fa fa-$links->nodeValue'></i> $li->nodeValue </a></li>";
            //echo $links->nodeValue; die;
            //echo $links->getAttribute( 'href' ); die;

        }
    }
}


?>

</ul>
                </div>
                <div class="footer-widgets">
                    <h4>Give 10% and Get 10% off</h4>
                    <div class="email-subscription-form">
                        <form action="index.html">
                            <input type="email" placeholder="Email Address">
                            <input type="submit" value="Refer Now">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                Copyright &copy; Designed by MakeHub, Developed by MakeHub 2019
            </div>
        </div>
    </div>
</div>
<!--end Footer area -->