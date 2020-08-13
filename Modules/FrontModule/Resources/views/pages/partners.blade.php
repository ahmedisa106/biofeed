@extends('frontmodule::layouts.master')
@section('title')
   | Partners
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main class="main-content">
                    @foreach($partners as $partner )
                        <article class="post wow bounceInUp" data-wow-delay=".5s">
                            <div class="entry-main">

                                <div class="hover__figure">   <img src="{{asset('/images/partners/'.$partner->photo)}}" height="320" width="770" alt="Foto" style="max-height: 300px;"></div>

                                <h2 class="entry-title">{{$partner->link}}</h2>


                            </div><!-- end entry-main -->
                        </article><!-- end post -->
                    @endforeach




                    <div class="text-center">
                        <ul class="pagination">

                            {{$partners->links()}}

                        </ul>
                    </div>
                </main><!-- end main-content -->
            </div>


            <div class="col-md-3">
                <aside class="sidebar">

                    <div class="widget widget-search">
                        <form method="get" class="form-search clearfix" id="search-global-form">
                            <input class="form-search__input" type="text" name="" id="search2" placeholder="Search Blog ...">
                            <button class="form-search__submit" type="submit"><i class="icon icon-magnifier"></i></button>
                        </form>
                    </div>

                    <div class="widget widget-category">
                        <h3 class="widget-title color_second">Companies</h3>
                        <div class="block_content">
                            <ul class="list-categories list-categories_widget">
                                @foreach($companies  as $company )
                                    <li><a href="{{route('front.company',$company->id)}}"><span class="list-categories__name">{{$company->title}}</span><span class="list-categories__amout color_primary">{{$company->products->count()}}</span></a></li>

                                @endforeach

                            </ul>
                        </div>
                    </div>


                </aside>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
@endsection

