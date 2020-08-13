<!-- Loader Landing Page -->
<div id="ip-container" class="ip-container">
    <!-- initial header -->
    <header class="ip-header" >
        <div class="ip-loader">
            <div class="text-center">
                <div class="ip-logo"><img  src="{{asset('/assets/front')}}/img/bfi_logo-2.png" height="50" width="294" alt="logo"></div>
            </div>
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg> </div>
    </header>
</div>
<!-- Loader end -->


<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-left">
                <ul class="social-links">


                    <li>
                        <a target="_blank" href="{{$config['linked_in']}}">
                            <i class="social_icons social_linkedin_square"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{$config['youtube']}}">
                            <i class="social_icons social_youtube_square"></i>
                        </a>
                    </li>
                    <li class="li-last">
                        <a target="_blank" href="{{$config['fb_link']}}">
                            <i class="social_icons social_facebook_square"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="top-header__links col-sm-8">
                <div class="btn-group languages">
                    <button type="button" class="btn_languages dropdown-toggle" data-toggle="dropdown">
                        <i class="icon_globe-2"></i>
                        langs
                        <span class="caret color_primary"></span>
                    </button>

{{--                    <ul class="dropdown-menu">--}}
{{--                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                            <li>--}}
{{--                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                    {{ $properties['native'] }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}

                </div>
                <a href="tel:">
                    <i class="icon-header icon-call-in color_primary"></i>
                   {{$config['phone']}}
                </a>
                <a class="border-right" href="#">
                    <i class="icon-header icon-envelope-open color_primary"></i>
                    {{$config['email']}}
                </a>
            </div>
        </div>
    </div>
</div><!-- end top-header -->

<!-- HEADER -->
<div class="header">
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <a href="index.html" class="logo">
                        <img class="logo__img" src="{{asset('/assets/front')}}/img/bfi_logo-2.png"  alt="Logo">
                    </a>
                </div>
                <div class="col-md-8 col-xs-12">
                    <form class="hidden-md hidden-lg text-center" id="search-global-mobile" method="get" action="{{route('front.index')}}">
                        @csrf

                        <input type="search" value="" id="search-mobile" name="search">
                        <button type="submit">
                            <i class="icon fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div><!-- end header-inner-->
    </div><!-- end container-->

    <div class="top-nav ">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-xs-12">
                    <div class="navbar yamm " >
                        <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand">Menu</a>
                        </div>
                        <div id="navbar-collapse-1" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{route('front.index')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('front.about')}}">ABOUT</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">
                                        companies
                                        <b class="caret color_primary"></b>
                                    </a>
                                    <ul role="menu" class="dropdown-menu" style="display: none;">
                                        @foreach($companies  as $company )
                                            <li> <a href="{{route('front.company',$company->id)}}"> {{$company->title}}</a> </li>

                                        @endforeach

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">
                                        SHOP
                                        <b class="caret color_primary"></b>
                                    </a>
                                    <ul role="menu" class="dropdown-menu" style="display: none;">
                                        <li> <a href="{{route('front.shop')}}"> shop </a> </li>
                                        <li class="li-last"> <a href="{{route('front.partners')}}"> partners</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('front.contact')}}">CONTACT</a>
                                </li>
                            </ul>
                            <form id="search-global-menu" class="hidden-xs hidden-sm" method="get">
                                <input type="text" value="" id="search" name="s" >
                                <button type="submit">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end top-nav -->
</div><!-- HEADER END -->
