<!-- HEADER -->
    <header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop">
                <a href="index.html">Home</a>
              </li>
              <li class="dropdown megaDropMenu">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">tour packages</a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages Grid View</li>
                      <li><a href="packages-grid-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-grid-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-grid.html">Packages 3 Columns</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages List View</li>
                      <li><a href="packages-list-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-list-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-list.html">Packages List</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Package</li>
                      <li><a href="single-package-left-sidebar.html">Package Sidebar Left</a></li>
                      <li><a href="single-package-right-sidebar.html">Package Sidebar Right</a></li>
                      <li><a href="single-package-fullwidth.html">Package Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Booking Steps</li>
                      <li><a href="booking-1.html">Step 1 - Personal Info</a></li>
                      <li><a href="booking-2.html">Step 2 - Payment Info</a></li>
                      <li><a href="booking-3.html">Step 3 - Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations</a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="destination-cities.html">Destination Cities</a></li>
                  <li><a href="destination-single-city.html">Single Destination</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery-grid.html">Gallery Grid</a></li>
                      <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                      <li><a href="gallery-photo-slider.html">Photo Slider</a></li>
                    </ul>
                  </li>
                  <li><a href="404.html">404 Not Found</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid-three-col.html">Blog Grid 3 Col</a></li>
                      <li><a href="blog-grid-two-col.html">Blog Grid 2 Col</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">
                             Login
                            </a></li>
                            <li><a href="{{ route('register') }}">
                                Register
                            </a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <li class="dropdown-menu" role="menu">
                                @if (Auth::user()->admin == 1)
                                <li>
                                    <a href="{{url('/admin')}}">
                                        AdminPanel
                                    </a>
                                </li>
                                @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </li>
                            </li>
                        @endif
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!-- Authentication Links -->
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                </ul>
              </li>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog Post <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">shortcodes</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-and-toggles.html">Accordions &amp; Toggles</a></li>
                  <li><a href="tabs-and-dropdown.html">Tabs &amp; Dropdowns</a></li>
                  <li><a href="pricing-table.html">Pricing Tables</a></li>
                </ul>
              </li>
              <li class="dropdown searchBox">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header>