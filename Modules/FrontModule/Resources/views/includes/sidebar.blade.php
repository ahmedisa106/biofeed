<div class="col-md-3">

    <aside class="sidebar">
        <div class="widget widget-search">
            <form method="get" class="form-search clearfix" id="search-global-form" action="{{route('front.search')}}">
                @csrf
                <input class="form-search__input" type="text" name="search" value="{{Request()->search}}" id="search2" placeholder="@lang('frontmodule::site.search_product')">
                <button class="form-search__submit" type="submit"><i class="icon icon-magnifier"></i></button>
            </form>
        </div><!-- end widget-search -->

        <div class="widget widget-category">
            <h3 class="widget-title">@lang('frontmodule::site.companies')</h3>
            <div class="block_content">
                <ul class="list-categories list-categories_widget">
                    @foreach($companies   as $company )
                        <li><a href="{{route('front.company',$company->id)}}"><span class="list-categories__name"> {{$company->title}} </span><span class="list-categories__amout color_primary">{{$company->products->count()}}</span></a></li>

                    @endforeach

                </ul>
            </div>
        </div><!-- end widget-category -->


{{--        <div class="widget widget-price">--}}
{{--            <h3 class="widget-title">Filter by price</h3>--}}
{{--            <div id="slider-price"></div>--}}
{{--            <div class="widget-price__title">--}}
{{--                <strong>Price From:</strong>--}}
{{--                <input class="widget-price__input" id="slider-price_min">--}}
{{--                to--}}
{{--                <input class="widget-price__input" id="slider-price_max">--}}
{{--            </div>--}}
{{--        </div><!-- end widget-price -->--}}


{{--        <div class="widget widget-top">--}}
{{--            <h3 class="widget-title">TOP rated Products</h3>--}}
{{--            <ul class="list-top unstyled">--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/1.jpg" height="68" width="53" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/2.jpg" height="61" width="63" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/3.jpg" height="67" width="48" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div><!-- end widget-top -->--}}


{{--        <div class="widget widget-cloud clearfix">--}}
{{--            <h3 class="widget-title">TAGS CLOUD</h3>--}}
{{--            <div class="block_content">--}}
{{--                <div class="tagcloud">--}}
{{--                    <ul class="wp-tag-cloud unstyled">--}}
{{--                        <li><a href="/">HealthCare</a></li>--}}
{{--                        <li><a href="/">Fitness</a></li>--}}
{{--                        <li><a href="/">Food</a></li>--}}
{{--                        <li><a href="/">Weight Loss</a></li>--}}
{{--                        <li><a href="/">Medical Clinic</a></li>--}}
{{--                        <li><a href="/">Popular Doctors</a></li>--}}
{{--                        <li><a href="/">Dental</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!-- end widget-cloud -->--}}


{{--        <div class="widget widget-last">--}}
{{--            <h3 class="widget-title">Last viewed</h3>--}}
{{--            <ul class="list-top unstyled">--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/4.jpg" height="66" width="39" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/5.jpg" height="61" width="54" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-top__item">--}}
{{--                    <div class="list-top__foto helper">--}}
{{--                        <img src="{{asset('/assets/front')}}/media/top-products/6.jpg" height="72" width="67" alt="Product">--}}
{{--                    </div>--}}
{{--                    <div class="list-top__inner">--}}
{{--                        <span class="list-top__info">Curabitur id lectus mae enas non diam</span>--}}
{{--                        <div class="product-rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div><!-- end widget-last -->--}}

    </aside><!-- end sidebar -->
</div><!-- end col -->
