@extends('frontmodule::layouts.master')

@section('content')

    @include('frontmodule::includes.slider')

    <section class="advantages wow fadeInUp" data-wow-delay="1.5s">
        <div class="container">
            <div class="row">
                <div class="separator_20"></div>
                <div class="col-xs-12">
                    <h1 class="ui-title-block">Welcome to <strong class="font-weight_600">Bio Feed</strong><span class="font-weight-norm color_primary">International</span></h1>
                    <div class="ui-subtitle-block">Our medical specialists care about you & your family’s health</div>
                </div>
                <section class="advantages__inner col-md-4">
                    <i class="icon flaticon-medical51 color_second"></i>
                    <h2 class="ui-title-inner">Company mission</h2>
                    <i class="decor-brand"></i>
                    <p class="ui-text text-center">{!! $config['mission'] !!}</p>

                </section>
                <section class="advantages__inner col-md-4">
                    <i class="icon flaticon-medical109 color_second"></i>
                    <h2 class="ui-title-inner">Company vision</h2>
                    <i class="decor-brand"></i>
                    <p class="ui-text text-center">{!! $config['vision'] !!}</p>
                </section>
                <section class="advantages__inner col-md-4">
                    <i class="icon flaticon-healthcare6 color_second"></i>
                    <h2 class="ui-title-inner">Objectives</h2>
                    <i class="decor-brand"></i>
                    <p class="ui-text text-center">{!! $config['objective'] !!}</p>
                </section>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end advantages -->

    <section class="slider_team bg_transparent bg_9 wow fadeInUp" data-wow-delay="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block">The <strong>Medical Specialists</strong></h2>
                    <div class="ui-subtitle-block">Purus sapien consequat vitae sagittis ut facilisis arcu</div>
                    <ul class="bxslider"
                        data-max-slides="4"
                        data-min-slides="1"
                        data-width-slides="270"
                        data-margin-slides="30"
                        data-auto-slides="true"
                        data-move-slides="1"
                        data-infinite-slides="true"
                        data-pager="true"
                        data-controls="false">
                        @foreach($teams  as $team )
                            <li class="slide">
                                <img src="{{asset('/assets/front')}}/media/slider_team/1.jpg" height="250" width="270" alt="Foto">
                                <span class="name">{{$team->name}}</span>
                                <span class="category">{{$team->job_title}}</span>
{{--                                <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>--}}
                                <ul class="social-links">
                                    <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                    <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                    <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                </ul>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section><!-- end slider_team -->


    <section class="section bg bg_2 bg_transparent text-center">




        <div class="icon-tabs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block color_white">Why <strong>Choose Us</strong></h2>
                        <div class="ui-subtitle-block no-spacing">You have a number of reasons to choose us!</div>
                    </div>
                    <div class="icon-tabs">
                        <div class="col-md-6 wow bounceInLeft">
                            <ul class="list-icons">
                                @foreach($why_us  as $index => $why )
                                    <li class="{{($loop->first ? 'active':'')}}" >
                                        <a href="#icontab{{$index+1}}" aria-controls="icontab1" role="tab" data-toggle="tab"><span class="icon-round bg-color_second helper "><i class="icon fa fa-ambulance"></i></span></a></li>
                                @endforeach


                            </ul>

                        </div>
                        <div class="col-md-6 text-right wow bounceInRight">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($why_us  as $index => $why)
                                    <div role="tabpanel" class="tab-pane {{($loop->first ? 'active':'')}} "   id="icontab{{$index+1}}"><img src="{{asset('/images/why_us/'.$why->photo)}}" height="270" width="530" alt="Foto">

                                        <div class="tab-info">

                                            <p class="title-small">{{$why->title}}</p>
                                            <p class="title-small">{!!  $why->content!!}</p>

                                        </div>

                                    </div>


                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>  </div>


    </section><!-- end bl_2-col_with-fig -->



    <section class="section-large">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block text-center">Services <strong>We offer</strong></h2>
                    <div class="ui-subtitle-block text-center">Purus sapien consequat vitae sagittis facilisis</div>
                </div>
            </div>
            <div class="row">
                <div class="list-services">

                    @foreach($services  as $service )
                        <div class="col-md-4 list-services__item wow bounceInRight" data-wow-delay="2s">
                            <span class="icon-round bg-color_second helper"><i class="icon flaticon-pipette2"></i></span>
                            <div class="list-services__inner border_btm">
                                <h3 class="list-services__title">{{$service->service_category->title}}</h3>
                                <p class="ui-text">{!! $service->description !!}</p>
                            </div>
                        </div>

                    @endforeach


                    <div class="clearfix"></div>
                </div><!-- end list-services -->
            </div>
        </div>
    </section><!-- end section -->


    <section class="slider-reviews slider-reviews_2-col bg_7 bg_transparent wow pulse" data-wow-delay="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block text-center">What Our <strong>Customers Are Saying</strong></h2>
                    <div class="ui-subtitle-block text-center">Purus sapien consequat vitae sagittis ut facilisis arcu</div>
                    <i class="decor-brand"></i>
                </div>
                <div class="col-xs-12">
                    <ul class="bxslider"
                        data-max-slides="2"
                        data-min-slides="1"
                        data-width-slides="570"
                        data-margin-slides="30"
                        data-auto-slides="false"
                        data-move-slides="1"
                        data-infinite-slides="false"
                        data-controls="false" >
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/1.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.
                                </blockquote>
                                <span class="name">Vettle Smith</span>
                                <span class="categories">Kidney Patient</span>
                            </div>
                        </li>
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/2.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    <p>Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.</p>
                                </blockquote>
                                <span class="name">Sandra Barbara</span>
                                <span class="categories">ENT Patient</span>
                            </div>
                        </li>
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/1.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    <p>Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.</p>
                                </blockquote>
                                <span class="name">Vettle Smith</span>
                                <span class="categories">Kidney Patient</span>
                            </div>
                        </li>
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/2.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    <p>Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.</p>
                                </blockquote>
                                <span class="name">Sandra Barbara</span>
                                <span class="categories">ENT Patient</span>
                            </div>
                        </li>
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/1.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    <p>Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.</p>
                                </blockquote>
                                <span class="name">Vettle Smith</span>
                                <span class="categories">Kidney Patient</span>
                            </div>
                        </li>
                        <li class="slide">
                            <img class="avatar" src="{{asset('/assets/front')}}/media/avatar_reviews/2.jpg" height="130" width="130" alt="Avatar">
                            <div class="quote">
                                <blockquote>
                                    <p>Etiam feugiat libero et sapien. Donec rutrum neque ac congue venenatis lorem ipsum pulvinar leo sollicitudin metus massa non velit. Maecenas elementum. In a nulla. Mauris metus turpis iaculis hendrerit vel pretium non, magna. Morbi elit ipsum mattis vitae placerat ut volutpat eget nisi. Aenean vel lectus alc orci elementum tincidunt. Quisque vel ante quis massa tristique iaculis. Aenean auctor lorem a felis. Nunc tempus mauris et lectus. Sed at tortor aenean erat orci sed ipsum mollis quis.</p>
                                </blockquote>
                                <span class="name">Sandra Barbara</span>
                                <span class="categories">ENT Patient</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- end reviews -->

    <section class="section-large">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block text-center">Online <strong> Shop</strong></h2>
                    <div class="ui-subtitle-block text-center">Purus sapien consequat vitae sagittis facilisis</div>
                </div>
            </div>
            <div class="row">
                <div class="list-products text-center">

                    @foreach($products  as $product )
                        <div class="col-lg-3 col-md-6">
                            <div class="products__item wow bounceInRight" data-wow-delay=".5s">
                                <a class="products__foto helper" href="{{route('front.product',$product->id)}}">
                                    <img src="{{asset('/images/products/'.$product->photo)}}" height="226" width="226" alt="Goods">
                                </a>
                                <h4 class="products__name"><a href="{{route('front.product',$product->id)}}">{{$product->title}}</a><i class="icon icon-heart"></i></h4>
{{--                                <div class="products__info ui-text">{!! $product->description !!}</div>--}}
{{--                                <div class="price-block clearfix">--}}
{{--                                    <span class="price-block__discount">-20%</span>--}}
{{--                                    <span class="price-block__price">$149.55</span>--}}
{{--                                </div>--}}
{{--                                <div class="products__btn text-center">--}}
{{--                                    <button class="btn"><i class="icon icon-basket-loaded"></i> Add to cart</button>--}}
{{--                                </div>--}}
{{--                                <span class="products__label">SALE</span>--}}
                            </div>
                        </div>

                    @endforeach

                    <div class="clearfix"></div>
                    <a class="btn btn_small" href="{{route('front.shop')}}">LOAD MORE</a>
                </div><!-- end products -->

            </div>
        </div>
    </section><!-- end section -->
@endsection
