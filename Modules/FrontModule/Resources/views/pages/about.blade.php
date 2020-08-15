@extends('frontmodule::layouts.master')

@section('title')
    | About
@endsection
@section('content')
    <div class="ui-title-page bg_title bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>@lang('frontmodule::site.about')</h1>
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
                        <li class="active">@lang('frontmodule::site.about')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- end breadcrumb -->

    <main class="main-content">
        <div class="container ">
            <section class="section-large bg " style="background-image: url('../public/images/pages/{{$about->photo}}') ; background-repeat: no-repeat">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 pull-right">
                        <div class="padd_left_70">
{{--                            <h2 class="title-steps">We Offer--}}
{{--                                <span class="step-1">Fast & Reliable</span>--}}
{{--                                <span class="step-2 color_primary">Medical & HealthCare Solutions to Our Patients</span>--}}
{{--                            </h2>--}}
                            <p class="ui-text">{!! $about->content !!}</p>
{{--                            <ul class="list-mark">--}}
{{--                                <li><a class="icon icon-login" href="javascript:void(0);">Ut vulputate aliquam risus.--}}
{{--                                        Aenean et diam.</a></li>--}}
{{--                                <li><a class="icon icon-login" href="javascript:void(0);">Donec sollicitudin est a orci.--}}
{{--                                        Ut suscipit pede eu</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </section><!-- end section -->
        </div><!-- end container -->

        <br>
        <br>

        <section class="advantages bg bg_2 bg_transparent color_white wow fadeInUp" data-wow-delay="1.5s">
            <div class="container">
                <div class="row">
                    <div class="separator_30"></div>
                    <div class="col-sm-4">
                        <section class="advantages__inner">
                            <i class="icon flaticon-medical51"></i>
                            <h2 class="ui-title-inner color_white">@lang('frontmodule::site.company_mission')</h2>
                            <i class="decor-brand"></i>
                            <p class="ui-text text-center color_white">{{$config['mission']}}</p>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="advantages__inner">
                            <i class="icon flaticon-medical109"></i>
                            <h2 class="ui-title-inner color_white">@lang('frontmodule::site.company_vision')</h2>
                            <i class="decor-brand"></i>
                            <p class="ui-text text-center color_white">{{$config['vision']}}</p>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="advantages__inner">
                            <i class="icon flaticon-healthcare6"></i>
                            <h2 class="ui-title-inner color_white">@lang('frontmodule::site.objective')</h2>
                            <i class="decor-brand"></i>
                            <p class="ui-text text-center color_white">{{$config['objective']}}</p>
                        </section>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end advantages -->


        {{--        <div class="block-hourse block-hourse_full bg bg_1 bg_transparent wow zoomIn" data-wow-delay="1s">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-6">--}}
        {{--                        <div class="block-hourse__inner block-hourse__inner_first">--}}
        {{--                            <p class="block-hourse__text"><i class="icon icon-note"></i>Need a Doctor for Check-up?</p>--}}
        {{--                            <p class="block-hourse__title">JUST MAKE AN APPOINTMENT</p>--}}
        {{--                            <a class="btn bg-color_primary" href="javascript:void(0);">GET AN APPOINTMENT</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <section class="col-md-6">--}}
        {{--                        <div class="block-hourse__inner block-hourse__inner_second">--}}
        {{--                            <div class="block-hourse__title-table"><i class="icon icon-clock"></i>OPENING HOURS</div>--}}
        {{--                            <table>--}}
        {{--                                <tbody>--}}
        {{--                                <tr>--}}
        {{--                                    <td>Monday - Friday</td>--}}
        {{--                                    <td><span class="line-bottom"></span></td>--}}
        {{--                                    <td>08:00am - 10:00pm</td>--}}
        {{--                                </tr>--}}
        {{--                                <tr>--}}
        {{--                                    <td>Saturday - Sunday</td>--}}
        {{--                                    <td><span class="line-bottom"></span></td>--}}
        {{--                                    <td>09:00am - 06:00pm</td>--}}
        {{--                                </tr>--}}
        {{--                                <tr>--}}
        {{--                                    <td>Emergency Services</td>--}}
        {{--                                    <td><span class="line-bottom"></span></td>--}}
        {{--                                    <td>24 hours Open</td>--}}
        {{--                                </tr>--}}
        {{--                                </tbody>--}}
        {{--                            </table>--}}
        {{--                        </div>--}}
        {{--                    </section>--}}
        {{--                </div><!-- end row -->--}}
        {{--            </div><!-- end container -->--}}
        {{--        </div><!-- end bl_2-col_with-table -->--}}


{{--        <section class="section-large">--}}
{{--            <div class="container">--}}
{{--                <div class="rom">--}}
{{--                    <div class="separator_10"></div>--}}
{{--                    <div class="col-md-6 wow bounceInLeft" data-wow-delay="1s">--}}

{{--                        <ul class="nav nav-tabs">--}}
{{--                            <li class="active"><a href="#tab1" data-toggle="tab">Vision & Mission</a></li>--}}
{{--                            <li><a href="#tab2" data-toggle="tab">Comfort & Quality</a></li>--}}
{{--                            <li><a href="#tab3" data-toggle="tab">Healthcare Solutions</a></li>--}}
{{--                        </ul>--}}

{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane active" id="tab1">--}}
{{--                                <img src="{{asset('/assets/front')}}/media/570x200/1.jpg" height="200" width="570"--}}
{{--                                     alt="Foto">--}}
{{--                                <h2 class="ui-title-inner">We Offer Great Comfort And Quality - 1</h2>--}}
{{--                                <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere. Praesent--}}
{{--                                    jus laoreet dignisim lectus etiam ipsum habitant tristique cras to augue ipsum--}}
{{--                                    pharetra scelerisq ueac mollis vel metus sed ipsum donec. Nunc pharetra tellus.</p>--}}
{{--                                <ul class="list-mark">--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Ut vulputate aliquam--}}
{{--                                            risus. Aenean et diam.</a></li>--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Fusce id dui sit amet nibh--}}
{{--                                            congue congue venenatis erat</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane" id="tab2">--}}
{{--                                <img src="{{asset('/assets/front')}}/media/570x200/1.jpg" height="200" width="570"--}}
{{--                                     alt="Foto">--}}
{{--                                <h2 class="ui-title-inner">We Offer Great Comfort And Quality - 2</h2>--}}
{{--                                <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere. Praesent--}}
{{--                                    jus laoreet dignisim lectus etiam ipsum habitant tristique cras to augue ipsum--}}
{{--                                    pharetra scelerisq ueac mollis vel metus sed ipsum donec. Nunc pharetra tellus.</p>--}}
{{--                                <ul class="list-mark">--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Ut vulputate aliquam--}}
{{--                                            risus. Aenean et diam.</a></li>--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Fusce id dui sit amet nibh--}}
{{--                                            congue congue venenatis erat</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane" id="tab3">--}}
{{--                                <img src="{{asset('/assets/front')}}/media/570x200/1.jpg" height="200" width="570"--}}
{{--                                     alt="Foto">--}}
{{--                                <h2 class="ui-title-inner">We Offer Great Comfort And Quality - 3</h2>--}}
{{--                                <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere. Praesent--}}
{{--                                    jus laoreet dignisim lectus etiam ipsum habitant tristique cras to augue ipsum--}}
{{--                                    pharetra scelerisq ueac mollis vel metus sed ipsum donec. Nunc pharetra tellus.</p>--}}
{{--                                <ul class="list-mark">--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Ut vulputate aliquam--}}
{{--                                            risus. Aenean et diam.</a></li>--}}
{{--                                    <li><a class="icon icon-login" href="javascript:void(0);">Fusce id dui sit amet nibh--}}
{{--                                            congue congue venenatis erat</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end tab-content -->--}}
{{--                    </div><!-- end col -->--}}

{{--                    <div class="col-md-6">--}}
{{--                        <div class=" padd_left_20">--}}
{{--                            <div class="ui-text wow bounceInRight" data-wow-delay="1s">Sed posuere nunc libero--}}
{{--                                pellentesque vitae ultrices posuere. Praesent jus laoreet dignisim lectus etiam ipsum--}}
{{--                                habitant tristique cras to augue ipsum pharetra scelerisq ueac mollis vel metus sed--}}
{{--                                ipsum donec. Nunc pharetra tellus.--}}
{{--                            </div>--}}

{{--                            <div class="list-services list-services_vert">--}}
{{--                                <div class="list-services__item wow bounceInRight" data-wow-delay="1.2s">--}}
{{--                                    <span class="icon-round icon-round_grey helper"><i class="icon fa fa-ambulance"></i></span>--}}
{{--                                    <div class="list-services__inner">--}}
{{--                                        <h3 class="list-services__title">24 /7 Emergency Services</h3>--}}
{{--                                        <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere.--}}
{{--                                            Praesent justo laoreet dignissim lectus etiam ipsum habitant tristique</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-services__item wow bounceInRight" data-wow-delay="1.4s">--}}
{{--                                    <span class="icon-round icon-round_grey helper"><i class="icon fa fa-heartbeat"></i></span>--}}
{{--                                    <div class="list-services__inner">--}}
{{--                                        <h3 class="list-services__title">Modern Technologies</h3>--}}
{{--                                        <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere.--}}
{{--                                            Praesent justo laoreet dignissim lectus etiam ipsum habitant tristique</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-services__item wow bounceInRight" data-wow-delay="1.6s">--}}
{{--                                    <span class="icon-round icon-round_grey helper"><i--}}
{{--                                            class="icon fa fa-user-md"></i></span>--}}
{{--                                    <div class="list-services__inner">--}}
{{--                                        <h3 class="list-services__title">Passionate Doctors & Nurses</h3>--}}
{{--                                        <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere.--}}
{{--                                            Praesent justo laoreet dignissim lectus etiam ipsum habitant tristique</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-services__item wow bounceInRight" data-wow-delay="1.8s">--}}
{{--                                    <span class="icon-round icon-round_grey helper"><i--}}
{{--                                            class="icon fa fa-shield"></i></span>--}}
{{--                                    <div class="list-services__inner">--}}
{{--                                        <h3 class="list-services__title">Protection Against Diseases</h3>--}}
{{--                                        <p class="ui-text">Sed posuere nunc libero pellentesque vitae ultrices posuere.--}}
{{--                                            Praesent justo laoreet dignissim lectus etiam ipsum habitant tristique</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- end list-service -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- end row -->--}}
{{--            </div><!-- end container -->--}}
{{--        </section><!-- end section -->--}}
    </main><!-- end main-content -->

@endsection
