<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div><!-- Main Menu -->
<nav class="navbar navbar-expand-lg">
    <div class="navbar-collapse">	
        <div class="nav-inner">	
            <ul class="nav main-menu menu navbar-nav">
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('products.index') }}">Product</a></li>												
                <li><a href="#">Service</a></li>
                <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                    <ul class="dropdown">
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="{{ route('order.index') }}">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a></li>									
                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ End Main Menu -->	