<header class="header header-fixed header-2 stricky">
    <nav class="navbar navbar-default header-navigation ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-bar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="img/PI.png" alt="Awesome Image" style="width: 120px;height: 70px"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li class="current">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu ">
                            <li><a href="index.html">Home Page One</a></li>
                            <li><a href="index-2.html">Home Page Two</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>

                    <li>
                        <a href="services.html">Training</a>
                        <ul class="sub-menu ">
                            <li><a href="lock.html">General Awareness</a></li>
                            <li><a href="fingerprint.html">Security Governance</a></li>

                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="services.html">Service</a>
                        <ul class="sub-menu ">
                            <li><a href="lock.html">Risk Management</a></li>
                            <li><a href="fingerprint.html">Security Assessment</a></li>
                            <li><a href="video.html">Compliance To Standard</a></li>
                            <li><a href="saftes.html">Compliance To Reguratory</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="about.html">Tools $ Software</a>
                    </li>
                    <li>
                        <a href="services.html">Resources</a>
                        <ul class="sub-menu ">
                            <li><a href="{!! route('resource.contact_us') !!}">Contact Us</a></li>
                            <li><a href="{!! route('resource.about_us') !!}">About Us</a></li>
                            <li><a href="video.html">Hel & Support</a></li>
                            {{--<li><a href="saftes.html">Compliance To Reguratory</a></li>--}}
                        </ul><!-- /.sub-menu -->
                    </li>
                    {{--<li>--}}
                        {{--<a href="#">Pages</a>--}}
                        {{--<ul class="sub-menu ">--}}
                            {{--<li><a href="gallery.html">Gallery</a></li>--}}
                            {{--<li><a href="single-gallery.html">Gallery Details</a></li>--}}
                            {{--<li><a href="404.html">Error Page</a></li>--}}
                        {{--</ul><!-- /.sub-menu -->--}}
                    {{--</li>--}}
                    <li>
                        <a href="blog-grid.html">Blog</a>
                        <ul class="sub-menu ">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    {{--<li>--}}
                        {{--<a href="contact-1.html">Contact</a>--}}
                        {{--<ul class="sub-menu ">--}}
                            {{--<li><a href="contact-1.html">Contact One</a></li>--}}
                            {{--<li><a href="contact-2.html">Contact Two</a></li>--}}
                        {{--</ul><!-- /.sub-menu -->--}}
                    {{--</li>--}}
                </ul>
            </div><!-- /.navbar-collapse -->

            {{--<div class="right-button-box">--}}
                {{--<a href="#"  data-toggle="modal" data-target=".search-form-modal" class="search-btn"><i class="icon icon-Search"></i></a>--}}
            {{--</div><!-- /.right-button-box -->--}}
        </div><!-- /.container -->
    </nav>
</header>