@extends('frontmodule::layouts.master')

@section('title')
    | {{$company->title}}
@endsection


@section('content')

    <main class="main-content">
        <section class="departments">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block text-center">Featured Clinical <strong>Departments</strong></h2>
                        <div class="ui-subtitle-block">Our medical specialists care about you & your Animal's health</div>
                    </div>
                </div>
                <i class="decor-brand"></i>

                <div class="row">
                    <div class="col-xs-12  text-center">

                        @foreach($company->products as $product )
                            <div class="departments-item wow bounceInLeft" data-wow-delay="1s">
                                <span class="icon-round bg-color_second helper"><img src="{{asset('images/products/'.$product->photo)}}"></span>
                                <h3 class="ui-title-inner">{{$product->title}}</h3>
{{--                                <p class="ui-text">{!! $product->description !!}</p>--}}
                                <a class="btn btn_small" href="{{route('front.product',$product->id)}}">READ MORE</a>
                            </div>
                        @endforeach


                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end departments -->
    </main><!-- end main-content -->


@endsection
