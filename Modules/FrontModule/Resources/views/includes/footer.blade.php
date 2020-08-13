<footer class="footer">
    <div class="footer__inner">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <section class="footer__section">
                        <h2 class="footer__title">About Biofeed international</h2>
                        <i class="decor-brand decor-brand_footer"></i>
                        <p>In 2017 BFI was established in the area of animal health values importing,
                            marketing and technically backing-up the best-in-pharmaceutical and feed
                            additives. This phase allotted to BFI its ingenious end-user orientation and its
                            exceptional rapport with our customers.
                            Today, approaching 2020, BFI represents the national important in Animal
                            Health, and the trusted partner our aspiration is to be the Egyptian leader in
                            Animal Health, conquering traditional animal health problems with innovative
                            solutions in cooperation with our pioneer partners.</p>
                        <address class="footer__contacts"><i class="footer__icon icon-pointer color_primary"></i>{{$config['address']}}</address>
                        <p class="footer__contacts"><i class="footer__icon icon-call-in color_primary"></i>{{$config['phone']}}</p>
                        <p class="footer__contacts"><i class="footer__icon icon-envelope-open color_primary"></i>{{$config['email']}}</p>
                    </section>

                </div>

                <section class="footer__section col-sm-4">

                </section>

                <section class="footer__section col-sm-4">
                    <h2 class="footer__title">Contact Form</h2>
                    <i class="decor-brand decor-brand_footer"></i>
                    <form class="form" role="form" method="post"  action="{{route('front.sendMessage')}}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Full Name" name="name" required>
                            <input class="form-control" type="email" placeholder="Email address" name="email" required>
                            <textarea class="form-control" rows="4" placeholder="Message" name="message" required></textarea>
                            <input class="btn bg-color_primary pull-right" type="submit" value="SEND NOW">
                        </div>
                    </form>
                </section>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer__inner -->

    <div class="footer__menu clearfix">
        <div class="container">
            <a href="index.html" class="logo pull-left">
                <img class="logo__img" src="{{asset('/assets/front')}}/img/bfi_logo-2.png" height="44" width="270" alt="Logo">
            </a>
            <ul class="pull-right">
                <li><a href="{{route('front.index')}}">HOME</a></li>
                <li><a href="{{route('front.about')}}">ABOUT</a></li>




                <li><a href="{{route('front.shop')}}">SHOP</a></li>
                <li><a href="{{route('front.contact')}}">CONTACT</a></li>
            </ul>
        </div><!-- end container -->
    </div><!-- end footer__menu -->

    <div class="footer__bottom">
{{--        <span class="copyright">© Copyrights 2015 Healthcare Agency</span>--}}
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
</footer>
