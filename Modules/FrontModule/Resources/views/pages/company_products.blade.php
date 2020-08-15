@extends('frontmodule::layouts.master')

@section('title')
    | {{$company->title}}
@endsection


@section('content')
    <div class="ui-title-page bg_title bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">@lang('frontmodule::site.company') {{$company->title}}</h1>
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
                        <li class="active">@lang('frontmodule::site.company') {{$company->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- end breadcrumb -->


    <main class="main-content">
        <section class="departments">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block text-center"><strong>@lang('frontmodule::site.company_product')</strong></h2>
                        <div class="ui-subtitle-block">@lang('frontmodule::site.Our_medical_specialists_care_about_your_animal’s_health')</div>
                    </div>
                </div>
                <i class="decor-brand"></i>

                <div class="row">
                    <div class="col-xs-12  text-center">

                        @foreach($company->products as $product )
                            <div class="departments-item wow bounceInLeft" data-wow-delay="1s" style="min-height: 400px; ">
                                <span class=" bg-color_second helper"><img src="{{asset('images/products/'.$product->photo)}}" style="min-height: 200px; max-height: 200px;"></span>
                                <h3 class="ui-title-inner">{{$product->title}}</h3>
{{--                                <p class="ui-text">{!! $product->description !!}</p>--}}
                                <a class="btn btn_small" href="{{route('front.product',$product->id)}}">@lang('frontmodule::site.load_more')</a>
                            </div>
                        @endforeach


                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end departments -->
    </main><!-- end main-content -->


@endsection
