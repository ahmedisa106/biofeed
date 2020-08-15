@extends('frontmodule::layouts.master')


@section('content')
    <div class="ui-title-page bg_title bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>ONLINE shop</h1>
                    <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>
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
                        <li class="">Shop</li>
                        <li class="active">{{$product->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- end breadcrumb -->
    <div class="container">
        <div class="row">

            @include('frontmodule::includes.sidebar')


            <div class="col-md-9">
                <div class="padd_left_20">
                    <main class="main-content">
                        <section class="product-card animated" data-animation="bounceInUp">
                            <div class="product-card__slider clearfix" id="image-block">
                                <div class="slider-product" class="flexslider">
                                    <ul class="slides">
                                        @foreach($product->product_photo as $photo )
                                            <li>
                                                <a href="{{asset('images/products/'.$photo->photo)}}" rel="prettyPhoto[gallery1]">
                                                    <img src="{{asset('images/products/'.$photo->photo)}}" height="276" width="158" />
                                                    <span class="products__label">SALE</span>
                                                    <i class="icon icon-heart"></i>
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                                <div class="carousel-product" class="flexslider">
                                    <ul class="slides">
                                        @foreach($product->product_photo as $photo )
                                        <li>
                                            <img src="{{asset('images/products/'.$photo->photo)}}" height="276" width="158" />
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <br>

                            </div><!-- end product-card__slider -->





                            <div class="product-card__options">
                                <h2 class="product-card__title">{{$product->title}}</h2>
                                <div class="product-card__subtitle">{!! $product->description !!}</div>
{{--                                <div class="price-block">--}}
{{--                                    <span class="price-block__name color_second">In Stock</span>--}}
{{--                                    <div class="price-block__inner">--}}
{{--                                        <span class="price-block__discount">-15%</span>--}}
{{--                                        <span class="price-block__price">${{$product->price}}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__group">--}}
{{--                                    <span class="product-card__label">Color</span>--}}
{{--                                    <div role="select" class="jelect">--}}
{{--                                        <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">--}}
{{--                                        <div tabindex="0" role="button" class="jelect-current">Select Color</div>--}}
{{--                                        <ul class="jelect-options">--}}
{{--                                            <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Silver</li>--}}
{{--                                            <li data-val='1' tabindex="0" role="option" class="jelect-option">White</li>--}}
{{--                                            <li data-val='2' tabindex="0" role="option" class="jelect-option">Green</li>--}}
{{--                                        </ul>--}}
{{--                                    </div><!-- end jelect -->--}}
{{--                                </div>--}}
{{--                                <div class="product-card__group">--}}
{{--                                    <span class="product-card__label">Size</span>--}}
{{--                                    <div role="select" class="jelect">--}}
{{--                                        <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">--}}
{{--                                        <div tabindex="0" role="button" class="jelect-current">Select Size</div>--}}
{{--                                        <ul class="jelect-options">--}}
{{--                                            <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Medium</li>--}}
{{--                                            <li data-val='1' tabindex="0" role="option" class="jelect-option">Large</li>--}}
{{--                                        </ul>--}}
{{--                                    </div><!-- end jelect -->--}}
{{--                                </div>--}}
{{--                                <div class="product-card__group">--}}
{{--                                    <span class="product-card__label">Quantity</span>--}}
{{--                                    <div class="enumerator">--}}
{{--                                        <a class="minus_btn"><i class="fa fa-minus"></i> </a>--}}
{{--                                        <input type="text" placeholder="1">--}}
{{--                                        <a class="plus_btn"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__group">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <button class="btn"><i class="icon icon-basket-loaded"></i> Add to cart</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                            </div><!-- end product-card__options -->
                            <div>

                                <video width="700" height="350" controls>
                                    <source src="{{asset('images/products/video/'.$product->video)}}" type="video/mp4">

                                </video>


                            </div>
                            <div class="clearfix"></div>
                            <span class="product-card__label">{{$product->title}}</span>
{{--                            <div class="ui-text">{!! $product->description !!}</div>--}}


{{--                            <ul class="nav nav-tabs wow bounceInUp" data-wow-delay=".5s">--}}
{{--                                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>--}}
{{--                                <li><a href="#specifications" data-toggle="tab">Specifications</a></li>--}}
{{--                                <li><a href="#reviews" data-toggle="tab">Reviews</a></li>--}}
{{--                                <li><a href="#policy" data-toggle="tab">Shipping Policy</a></li>--}}
{{--                            </ul>--}}

{{--                            <div class="tab-content wow bounceInUp" data-wow-delay=".5s">--}}
{{--                                <div class="tab-pane active" id="description">--}}
{{--                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis neque, eligendi. Sapiente, beatae voluptatum assumenda vitae impedit qui ex dolorem, harum, ducimus suscipit nisi quia necessitatibus. Qui libero sed quasi.</div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" id="specifications">--}}
{{--                                    <ul class="list-mark list-mark_small">--}}
{{--                                        <li><span class="icon icon-login"></span>Quick, 5-second results</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Small 0.6 microliter sample size</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Contoured, ergonomic design with easy-to-hold rubber grips</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Multiple test sites on the body2</li>--}}
{{--                                        <li><span class="icon icon-login"></span>4 customizable test reminders</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Downloadable 500-value memory with 7-, 14- and 30-day averaging</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Uses 1 readily available 3-volt lithium coin cell battery</li>--}}
{{--                                        <li><span class="icon icon-login"></span>2,000-test battery life</li>--}}
{{--                                        <li><span class="icon icon-login"></span>3.7" H x 2.1" W x 0.9" D; 2.1 oz. with battery</li>--}}
{{--                                        <li><span class="icon icon-login"></span>The ACCU-CHEK Aviva blood glucose meter is compatible with ACCU-CHEK data management tools</li>--}}
{{--                                        <li><span class="icon icon-login"></span>Covered on most healthcare plans and Medicare3 to help you save money on test strips</li>--}}
{{--                                        <li><span class="icon icon-login">Manufactured in the U.S.A.4</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" id="reviews">--}}
{{--                                    <div class="rew_blk">--}}
{{--                                        <h5>Excellent </h5>--}}
{{--                                        <div class="top_row">--}}
{{--                                            <div class="date"><span class="fa fa-calendar"></span>1/3/2020</div>--}}
{{--                                            <a class="user" href="#"><span class="fa fa-user"></span>Sheldon</a>--}}
{{--                                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>--}}
{{--                                        </div>--}}
{{--                                        <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="rew_blk clearfix">--}}
{{--                                        <h5>Awesome!</h5>--}}
{{--                                        <div class="top_row clearfix">--}}
{{--                                            <div class="date"><span class="fa fa-calendar"></span>3/12/2020</div>--}}
{{--                                            <a class="user" href="#"><span class="fa fa-user"></span>Sasha</a>--}}
{{--                                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> </div>--}}
{{--                                        </div>--}}
{{--                                        <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in.</p>--}}
{{--                                    </div>--}}
{{--                                    <form class="ui-form" accept-charset="UTF-8" action="action.php" method="post">--}}
{{--                                        <input id="ratings-hidden" name="rating" type="hidden">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <textarea class="form-control animated animation-done" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="text-right btn-add-review">--}}
{{--                                            <button class="btn bg-color_primary"> Add Review  </button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" id="policy">--}}
{{--                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis neque, eligendi. Sapiente, beatae voluptatum assumenda vitae impedit qui ex dolorem, harum, ducimus suscipit nisi quia necessitatibus. Qui libero sed quasi.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </section><!-- end product-card -->
                    </main><!-- end main-content -->

                    <section>
                        @if($products->count()>0)
                            <h2 class="ui-title-block_small text-center wow bounceInUp" data-wow-delay=".5s">Similar <span>Products</span></h2>
                            <ul class="products">
                                @isset($products)
                                    @foreach($products  as $product )
                                        <li class="products__item wow bounceInRight" data-wow-delay="1s">
                                            <a class="products__foto helper" href="{{route('front.product',$product->id)}}">
                                                <img src="{{asset('images/products/'.$product->photo)}}"  alt="Goods" style=" min-height: 200px; max-height: 200px; ">
                                            </a>
                                            <h4 class="products__name"><a href="{{route('front.product',$product->id)}}">{{$product->title}}</a><i class="icon icon-heart"></i></h4>
{{--                                            <div class="products__info ui-text">{!! $product->description !!}</div>--}}
                                            {{--                                        <div class="price-block clearfix">--}}
                                            {{--                                            <span class="price-block__discount">-50%</span>--}}
                                            {{--                                            <span class="price-block__price">${{$product->price}}</span>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="products__btn text-center">--}}
                                            {{--                                            <button class="btn"><i class="icon icon-basket-loaded"></i> Add to cart</button>--}}
                                            {{--                                        </div>--}}
                                        </li>
                                    @endforeach
                                @endisset
                        @endif




                        </ul><!-- end products -->
                    </section>
                </div><!-- end padd_left_20 -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="separator_100"></div>

@endsection
