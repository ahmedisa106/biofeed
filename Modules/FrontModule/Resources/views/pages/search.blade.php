@extends('frontmodule::layouts.master')

@section('title')
    | shop
@endsection

@section('content')
    <div class="ui-title-page bg_title bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>@lang('frontmodule::site.search') -> {{Request()->search}} ({{$products->count()}})</h1>
                    {{--                    <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>--}}
                </div>
            </div>
        </div>
    </div><!-- end ui-title-page -->


    <div class="border_btm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="icon icon-home color_primary"></i></a></li>
                        <li class="active">@lang('frontmodule::site.search') -> {{Request()->search}} ({{$products->count()}})</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- end breadcrumb -->

    <div class="container">
        <div class="row">

            @include('frontmodule::includes.sidebar')


            <div class="col-md-9">
                <main class="main-content">
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-md-12">--}}
                    {{--                            <div class="sorting-title">--}}
                    {{--                                Sort By:--}}
                    {{--                                <div role="select" class="jelect">--}}
                    {{--                                    <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">--}}
                    {{--                                    <div tabindex="0" role="button" class="jelect-current">Select Your Department</div>--}}
                    {{--                                    <ul class="jelect-options">--}}
                    {{--                                        <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Department 1</li>--}}
                    {{--                                        <li data-val='1' tabindex="0" role="option" class="jelect-option">Department 2</li>--}}
                    {{--                                        <li data-val='2' tabindex="0" role="option" class="jelect-option">Department 3</li>--}}
                    {{--                                    </ul>--}}
                    {{--                                </div>--}}
                    {{--                            </div><!-- end sorting-title -->--}}
                    {{--                        </div><!-- end col -->--}}
                    {{--                    </div><!-- end row -->--}}


                    @isset($products)

                        <ul class="products">
                            @foreach($products as $product )
                                <div class="departments-item wow bounceInLeft" data-wow-delay="1s" style="min-height: 400px; ">
                                    <span class=" bg-color_second helper"><img src="{{asset('images/products/'.$product->photo)}}" style="min-height: 200px; max-height: 200px;"></span>
                                    <h3 class="ui-title-inner">{{$product->title}}</h3>
                                    {{--                                <p class="ui-text">{!! $product->description !!}</p>--}}
                                    <a class="btn btn_small" href="{{route('front.product',$product->id)}}">@lang('frontmodule::site.load_more')</a>
                                </div>
                            @endforeach



                        </ul><!-- end products -->


                        <div class="text-center">

                        </div>


                    @endisset

                    @if(!$products->count() >0 )
                        <div class="alert alert-danger text-center">@lang('frontmodule::site.there_is_no_Products')</div>
                    @endif



                    {{$products->links()}}
                </main>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->


    {{--    <section class="subscribe bg bg_3 bg_transparent color_white wow zoomIn" data-wow-delay="1s">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-xs-12">--}}
    {{--                    <div class="subscribe__inner clearfix">--}}
    {{--                        <div class="pull-left">--}}
    {{--                            <h2 class="subscribe__title">Subscribe to Newsletter</h2>--}}
    {{--                            <p class="subscribe__text">Get healthy news and solutions to your problems from our experts!</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="pull-right">--}}
    {{--                            <form class="form-inline" role="form">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input class="form-control" type="email" placeholder="Your email address here ...">--}}
    {{--                                    <input class="btn bg-color_primary" type="submit" value="SIGN UP">--}}
    {{--                                </div>--}}
    {{--                            </form>--}}
    {{--                            <p class="subscribe__note">* We respect your privacy</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section><!-- end subscribe -->--}}

@endsection
