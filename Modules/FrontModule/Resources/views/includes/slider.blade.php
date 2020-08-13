<div id="iview" class="main-slider">

    @foreach($sliders as $slider )
        <div data-iview:thumbnail="{{asset('/images/sliders/'.$slider->photo)}}" data-iview:image="{{asset('/images/sliders/'.$slider->photo)}}" data-iview:transition="block-drop-random" >
            <div class="container">
                <div class="iview-caption  bg-no-caption" data-x="260" data-y="293" data-transition="expandLeft">
                    <div class="custom-caption">
                        <p class="slide-title bg-color_second">
                           {{$slider->title}}
                        </p>
                        <p class="slide-title_second">
                            {!! $slider->title_2 !!}

                        </p>
                        <p class="slide-text">
                            {!! $slider->title_3 !!}
                        </p>
{{--                        <p class="slide-text">--}}
{{--                            Vestibulum tincidunt ante ipsum--}}
{{--                        </p>--}}
{{--                        <a href="javascript:void(0);" class="btn bg-color_primary">--}}
{{--                            VIEW SERVICES--}}
{{--                            <span class="btn-plus">+</span>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>

    @endforeach



</div><!-- end iview -->
