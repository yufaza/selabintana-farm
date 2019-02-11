@extends('frontend.layout')
@section('scripts')

@endsection

@section('content')
    <!--Header -->
    <header>
      <div class="container">

        <!-- Sidebar toggler -->
        <a class="nav-link nav-icon ml-ni nav-toggler mr-3 d-flex d-lg-none" href="#" data-toggle="modal" data-target="#menuModal"><i data-feather="menu"></i></a>

        <!-- Logo -->
        <a class="nav-link nav-logo" href="index.html"><img src="../img/logo.svg" alt="Mimity"> <strong>Mimity</strong></a>

        <!-- Main navigation -->
        <ul class="nav nav-main ml-auto d-none d-lg-flex"> <!-- hidden on md -->
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="shop-categories.html" role="button" aria-haspopup="true" aria-expanded="false">
              Shop <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
              <a class="dropdown-item" href="shop-grid.html">Shop Grid</a>
              <a class="dropdown-item" href="shop-list.html">Shop List</a>
              <a class="dropdown-item" href="shop-single.html">Single Product</a>
              <a class="dropdown-item" href="shop-single2.html">Single Product v2</a>
              <a class="dropdown-item" href="cart.html">Cart</a>
              <a class="dropdown-item" href="shipping.html">Checkout</a>
              <div class="dropdown-submenu">
                <a class="dropdown-item" href="#">Submenu</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">item #1</a>
                  <a class="dropdown-item" href="javascript:void(0)">item #2</a>
                  <a class="dropdown-item" href="javascript:void(0)">item #3</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover dropdown-mega">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Mega Menu <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu">
              <div class="row">
                <div class="col-lg-3">
                  <div class="list-group list-group-flush list-group-no-border list-group-sm">
                    <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>CLOTHING</strong></a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Polos &amp; Tees</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shirts</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Jeans</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Trousers</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shirts</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Trousers</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Suits &amp; Blazers</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Shorts &amp; 3/4ths</a>
                  </div>
                </div>
                <div class="col-lg-3 border-left">
                  <div class="list-group list-group-flush list-group-no-border list-group-sm">
                    <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>FOOTWEAR</strong></a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Sports Shoes</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Sneakers</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shoes</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Loafers</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shoes</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Boots</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Outdoor &amp; Hiking</a>
                    <a href="shop-grid.html" class="list-group-item list-group-item-action">Floaters</a>
                  </div>
                </div>
                <div class="col-lg-3 border-left roboto-condensed">
                  <div class="card text-white zoom-hover">
                    <div data-cover="../img/categories/1.jpeg" data-height="260px"></div>
                    <div class="card-img-overlay card-img-overlay-transparent d-flex justify-content-center align-items-center flex-column">
                      <h2 class="card-title text-center">New Men's Fashion</h2>
                      <h5>See what's new</h5>
                      <a href="shop-grid.html" class="btn btn-primary rounded-pill">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 border-left roboto-condensed">
                  <div class="card text-white zoom-hover">
                    <div data-cover="../img/categories/6.jpeg" data-height="260px"></div>
                    <div class="card-img-overlay card-img-overlay-transparent d-flex justify-content-center align-items-center flex-column">
                      <h2 class="card-title text-center">New Women's Fashion</h2>
                      <h5>See what's new</h5>
                      <a href="shop-grid.html" class="btn btn-danger rounded-pill">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="account-profile.html" role="button" aria-haspopup="true" aria-expanded="false">
              Account <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="account-login.html">Login / Register</a>
              <a class="dropdown-item" href="account-profile.html">Profile Page</a>
              <a class="dropdown-item" href="account-orders.html">Orders List</a>
              <a class="dropdown-item" href="account-order-detail.html">Order Detail</a>
              <a class="dropdown-item" href="account-wishlist.html">Wishlist</a>
              <a class="dropdown-item" href="account-address.html">Address</a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="blog-grid.html" role="button" aria-haspopup="true" aria-expanded="false">
              Blog <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="blog-grid.html">Post Grid</a>
              <a class="dropdown-item" href="blog-list.html">Post List</a>
              <a class="dropdown-item" href="blog-single.html">Single Post</a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Pages <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about.html">About Us</a>
              <a class="dropdown-item active" href="contact.html">Contact Us</a>
              <a class="dropdown-item" href="compare.html">Compare</a>
              <a class="dropdown-item" href="faq.html">Help / FAQ</a>
              <a class="dropdown-item" href="404.html">404 Not Found</a>
            </div>
          </li>
        </ul>
        <!-- /Main navigation -->

        <!-- Search form -->
        <form class="form-inline form-search ml-auto mr-0 mr-sm-1 d-none d-sm-flex">
          <div class="input-group input-group-search">
            <div class="input-group-prepend">
              <button class="btn btn-light d-flex d-sm-none search-toggle" type="button"><i data-feather="chevron-left"></i></button>
            </div>
            <input type="text" class="form-control border-0 bg-light input-search" placeholder="Search...">
            <div class="input-group-append">
              <button class="btn btn-light" type="submit"><i data-feather="search"></i></button>
            </div>
          </div>
        </form>
        <!-- /Search form -->

        <ul class="nav ml-auto ml-sm-0">
          <!-- Search form toggler -->
          <li class="nav-item d-block d-sm-none ml-2 ml-lg-0"><a class="nav-link nav-icon search-toggle" href="#"><i data-feather="search"></i></a></li>

          <!-- Cart dropdown -->
          <li class="nav-item dropdown dropdown-hover dropdown-cart">
            <a class="nav-link nav-icon mr-nis dropdown-toggle forwardable ml-2" data-toggle="dropdown" href="cart.html" role="button" aria-haspopup="true" aria-expanded="false">
              <i data-feather="shopping-cart"></i>
              <span class="badge badge-primary">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                            <div class="media">
                <a href="shop-single.html"><img src="../img/products/1_small.jpg" width="50" height="50" alt="Hanes Hooded Sweatshirt"></a>
                <div class="media-body">
                  <a href="shop-single.html" title="Hanes Hooded Sweatshirt">Hanes Hooded Sweatshirt</a>
                  <span class="qty">1</span> x <span class="price">$18.56</span>
                  <button type="button" class="close" aria-label="Close"><i data-feather="x-circle"></i></button>
                </div>
              </div>
                            <div class="media">
                <a href="shop-single.html"><img src="../img/products/2_small.jpg" width="50" height="50" alt="The Flash Logo T-Shirt"></a>
                <div class="media-body">
                  <a href="shop-single.html" title="The Flash Logo T-Shirt">The Flash Logo T-Shirt</a>
                  <span class="qty">1</span> x <span class="price">$16.64</span>
                  <button type="button" class="close" aria-label="Close"><i data-feather="x-circle"></i></button>
                </div>
              </div>
                            <div class="media">
                <a href="shop-single.html"><img src="../img/products/3_small.jpg" width="50" height="50" alt="Open Front Cropped Cardigans"></a>
                <div class="media-body">
                  <a href="shop-single.html" title="Open Front Cropped Cardigans">Open Front Cropped Cardigans</a>
                  <span class="qty">1</span> x <span class="price">$15.20</span>
                  <button type="button" class="close" aria-label="Close"><i data-feather="x-circle"></i></button>
                </div>
              </div>
                            <div class="media">
                <a href="shop-single.html"><img src="../img/products/4_small.jpg" width="50" height="50" alt="Cotton Fleece Long Hoodie"></a>
                <div class="media-body">
                  <a href="shop-single.html" title="Cotton Fleece Long Hoodie">Cotton Fleece Long Hoodie</a>
                  <span class="qty">1</span> x <span class="price">$85.00</span>
                  <button type="button" class="close" aria-label="Close"><i data-feather="x-circle"></i></button>
                </div>
              </div>
                            <div class="d-flex justify-content-between pb-3 pt-2">
                <span>Total</span>
                <strong>$135.40</strong>
              </div>
              <div class="d-flex justify-content-between pb-2">
                <div class="w-100 mr-1">
                  <a href="cart.html" class="btn btn-block rounded-pill btn-secondary">View Cart</a>
                </div>
                <div class="w-100 ml-1">
                  <a href="shipping.html" class="btn btn-block rounded-pill btn-primary">Checkout</a>
                </div>
              </div>
            </div>
          </li>
          <!-- /Cart dropdown -->
        </ul>

      </div><!-- /.container -->
    </header>
    <!-- /Header -->


    <!-- Main Content -->
    <div class="container my-3">
      <div class="card">
        <div class="card-body">
          <div class="row">

            <!-- Map -->
            <div class="col-md-6">
              <div class="img-thumbnail">
                <div class="embed-responsive embed-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.9264094650316!2d-73.97488578459351!3d40.763643279326224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f00eb25f59%3A0x75ddbee78904e799!2s767+5th+Ave%2C+New+York%2C+NY+10153%2C+USA!5e0!3m2!1sen!2sid!4v1532319134271" width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <!-- Contact Us Form -->
            <div class="col-md-6 mt-3 mt-md-0">
              <h3 class="bold">Contact Us</h3>
              <form class="mt-3 form-style-1">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="media">
                      <span><i class="fa fa-map-marker fa-fw text-info"></i></span>
                      <div class="media-body ml-1">
                        <div>767 Fifth Avenue</div>
                        <div>New York</div>
                        <div>NY 10153</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <div class="media mb-3 mb-md-0">
                      <span><i class="fa fa-phone fa-fw text-info"></i></span>
                      <div class="media-body ml-1">212 123 456 789</div>
                    </div>
                    <div class="media">
                      <span><i class="fa fa-envelope fa-fw text-info"></i></span>
                      <div class="media-body ml-1">support@mimity.com</div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <span class="input-icon">
                    <i data-feather="user"></i>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </span>
                </div>
                <div class="form-group">
                  <span class="input-icon">
                    <i data-feather="mail"></i>
                    <input type="email" class="form-control" placeholder="Email">
                  </span>
                </div>
                <div class="form-group">
                  <span class="input-icon">
                    <i data-feather="message-square"></i>
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                  </span>
                </div>
                <button type="button" class="btn btn-primary">Send</button>
              </form>
            </div>
            <!-- /Contact Us Form -->

          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->
@endsection