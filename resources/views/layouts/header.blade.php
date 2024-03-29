<header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('frontend/image/Logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/accomodation')}}">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/blog_details')}}">Blog Details</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="{{url('/services')}}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>