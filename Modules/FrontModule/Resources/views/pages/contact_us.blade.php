@extends('frontmodule::layouts.master')

@section('title')
   | Contact Us
@endsection

@section('content')
    <div class="ui-title-page bg_title bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>@lang('frontmodule::site.contact')</h1>
                </div>
            </div>
        </div>
    </div><!-- end ui-title-page -->


    <div class="border_btm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('front.index')}}"><i class="icon icon-home color_primary"></i></a></li>
                        <li class="active">@lang('frontmodule::site.contact')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- end breadcrumb -->


    <main class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
{{--                        <div class="map">--}}
{{--                            <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com">ip</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:80%;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:120%;}</style></div>--}}
{{--                        </div>--}}
                        <i class="decor-brand"></i>
                        <ul class="list-contacts unstyled wow bounceInUp" data-wow-delay=".5s">
                            <li>
                                <i class="icon icon-pointer"></i>
                               {{$config['address']}}
                            </li>
                            <li>
                                <i class="icon icon-call-in"></i>
                                <a href="tel:">{{$config['phone']}}</a><br>
{{--                                <a href="tel:">0 (800) 126  58740</a>--}}
                            </li>
                            <li>
                                <i class="icon icon-envelope-open"></i>
                                <a href="mailto:info@healthcare-agency.org">{{$config['email']}}</a> <br>
{{--                                <a href="mailto:care@domain.com">care@domain.com</a>--}}
                            </li>
                        </ul>
                    </div>
                </div><!-- end row -->

                <div class="row wow bounceInUp" data-wow-delay=".5s">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block text-center"><strong>@lang('frontmodule::site.Drop_us_a_Message')</strong></h2>
{{--                        <div class="ui-subtitle-block text-center">Purus sapien consequat vitae sagittis facilisis</div>--}}
                    </div>
                </div><!-- end row -->




                <form  id="contactForm" class="ui-form wow bounceInUp " data-animation="bounceInUp" name="sentMessage animated" method="post" action="{{route('front.sendMessage')}}">

                    @csrf
                    @method('post')

                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">

                                    <input type="text" data-validation-required-message="Please enter" required="required"  placeholder="@lang('frontmodule::site.name')" id="name" name="name"  class="form-control">
                                    <i class="icon icon-user"></i>
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">    <div class="input-group">

                                    <input type="email" data-validation-required-message="Please enter" required  id="email" name="email"  placeholder="@lang('frontmodule::site.email')" class="form-control">
                                    <i class="icon icon-envelope-open"></i>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>

                                    @enderror
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group"><div class="input-group">

                                    <input type="tel" data-validation-required-message="Please enter" required  id="phone" name="phone" placeholder="@lang('frontmodule::site.phone')" class="form-control">
                                    <i class="icon icon-call-end"></i>
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>

                                    @enderror
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-12">
                            <div class="form-group form-group-text">   <div class="input-group">
                                    <textarea data-validation-required-message="Please enter a message." required id="message" name="message" placeholder="@lang('frontmodule::site.message')" class="form-control" rows="9"></textarea>
                                    <i class="icon icon-bubbles"></i>
                                    @error('message')
                                    <span class="text-danger">{{$message}}</span>

                                    @enderror
                                </div></div>

                            <p class="help-block text-danger"></p>
                            <div id="success"></div>


                            <div class="text-right">
                                <button class="btn bg-color_primary">@lang('frontmodule::site.send')</button>
                            </div>
                        </div>
                    </div><!-- end row -->
                </form>

                <!--Contact form-->
                <script src="{{asset('assets/front')}}/plugins/contact/jqBootstrapValidation.js"></script>
                <script src="{{asset('assets/front')}}/plugins/contact/contact_me.js"></script>


            </div><!-- end container -->
        </section><!-- end section -->


    </main><!-- end main-content -->

@endsection
