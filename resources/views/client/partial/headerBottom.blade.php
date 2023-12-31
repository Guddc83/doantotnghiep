<div class="header-bottom sticky-header">
    <div class="container">
        <div class="header-left">
            <div class="dropdown category-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" data-display="static" title="Browse Categories">
                    Browse Categories <i class="icon-angle-down"></i>
                </a>

                <div class="dropdown-menu">
                    <nav class="side-nav">
                        <ul class="menu-vertical sf-arrows">
                            <li class="item-lead"><a href="#">Daily offers</a></li>
                            <li class="item-lead"><a href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .menu-vertical -->
                    </nav><!-- End .side-nav -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .category-dropdown -->
        </div><!-- End .header-left -->

        <div class="header-center">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="{{ route('homepage') }}" class="sf-with-ul">Home</a>
                        {{-- <div class="megamenu demo">
                            <div class="menu-col">
                                <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                <div class="demo-list">
                                    <div class="demo-item">
                                        <a href="index-1.html">
                                            <span class="demo-bg"
                                                style="background-image: url({{ asset('assets/images/menu/demos/1.jpg') }});"></span>
                                            <span class="demo-title">01 - furniture store</span>
                                        </a>
                                    </div><!-- End .demo-item -->

                                    <div class="demo-item">
                                        <a href="index-2.html">
                                            <span class="demo-bg"
                                                style="background-image: url({{ asset('assets/images/menu/demos/2.jpg') }});"></span>
                                            <span class="demo-title">02 - furniture store</span>
                                        </a>
                                    </div><!-- End .demo-item -->

                                    <div class="demo-item">
                                        <a href="index-3.html">
                                            <span class="demo-bg"
                                                style="background-image: url({{ asset('assets/images/menu/demos/3.jpg') }});"></span>
                                            <span class="demo-title">03 - electronic store</span>
                                        </a>
                                    </div><!-- End .demo-item -->

                                    <!-- End .demo-item -->

                                </div><!-- End .demo-list -->

                                <div class="megamenu-action text-center">
                                    <a href="#"
                                        class="btn btn-outline-primary-2 view-all-demos"><span>View All
                                            Demos</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .text-center -->
                            </div><!-- End .menu-col -->
                        </div><!-- End .megamenu --> --}}
                    </li>
                    <li>
                        <a href="{{ route('category') }}" class="sf-with-ul">Shop</a>

                        <div class="megamenu megamenu-md">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="menu-col">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="menu-title">Shop with sidebar</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-list.html">Shop List</a></li>
                                                    <li><a href="category-2cols.html">Shop Grid 2
                                                            Columns</a></li>
                                                    <li><a href="category.html">Shop Grid 3 Columns</a>
                                                    </li>
                                                    <li><a href="category-4cols.html">Shop Grid 4
                                                            Columns</a></li>
                                                    <li><a href="category-market.html"><span>Shop
                                                                Market<span class="tip tip-new">New</span></span></a>
                                                    </li>
                                                </ul>

                                                <div class="menu-title">Shop no sidebar</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-boxed.html"><span>Shop Boxed No
                                                                Sidebar<span class="tip tip-hot">Hot</span></span></a>
                                                    </li>
                                                    <li><a href="category-fullwidth.html">Shop Fullwidth No
                                                            Sidebar</a></li>
                                                </ul>
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="menu-title">Product Category</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product-category-boxed.html">Product
                                                            Category Boxed</a></li>
                                                    <li><a href="product-category-fullwidth.html"><span>Product
                                                                Category Fullwidth<span
                                                                    class="tip tip-new">New</span></span></a>
                                                    </li>
                                                </ul>
                                                <div class="menu-title">Shop Pages</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="dashboard.html">My Account</a></li>
                                                    <li><a href="#">Lookbook</a></li>
                                                </ul>
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .col-md-8 -->

                                <div class="col-md-4">
                                    <div class="banner banner-overlay">
                                        <a href="category.html" class="banner banner-menu">
                                            <img src="{{ asset('client/assets/images/menu/banner-1.jpg') }}"
                                                alt="Banner">

                                            <div class="banner-content banner-content-top">
                                                <div class="banner-title text-white">Last
                                                    <br>Chance<br><span><strong>Sale</strong></span>
                                                </div>
                                                <!-- End .banner-title -->
                                            </div><!-- End .banner-content -->
                                        </a>
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu megamenu-md -->
                    </li>
                    <li>
                        <a href="{{ route('product') }}" class="sf-with-ul">Product</a>

                        <div class="megamenu megamenu-sm">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="menu-col">
                                        <div class="menu-title">Product Details</div>
                                        <!-- End .menu-title -->
                                        <ul>
                                            <li><a href="product.html">Default</a></li>
                                            <li><a href="product-centered.html">Centered</a></li>
                                            <li><a href="product-extended.html"><span>Extended Info<span
                                                            class="tip tip-new">New</span></span></a></li>
                                            <li><a href="product-gallery.html">Gallery</a></li>
                                            <li><a href="product-sticky.html">Sticky Info</a></li>
                                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                            <li><a href="product-fullwidth.html">Full Width</a></li>
                                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                        </ul>
                                    </div><!-- End .menu-col -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="category.html">
                                            <img src="{{ asset('client/assets/images/menu/banner-2.jpg') }}"
                                                alt="Banner">

                                            <div class="banner-content banner-content-bottom">
                                                <div class="banner-title text-white">New
                                                    Trends<br><span><strong>spring 2019</strong></span>
                                                </div><!-- End .banner-title -->
                                            </div><!-- End .banner-content -->
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu megamenu-sm -->
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Pages</a>

                        <ul>
                            <li>
                                <a href="about.html" class="sf-with-ul">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="sf-with-ul">Contact</a>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html" class="sf-with-ul">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html" class="sf-with-ul">Elements</a>

                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->
        </div><!-- End .header-center -->

        {{-- <div class="header-right">
            <i class="la la-lightbulb-o"></i>
            <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
        </div> --}}
    </div><!-- End .container -->
</div><!-- End .header-bottom -->
