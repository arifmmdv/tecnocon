<div class="intro11-slider-wrap section-2">
    <div class="intro11-slider swiper-container">
        <div class="swiper-wrapper">
            @foreach($block->slide as $slide)
                <div class="intro11-section swiper-slide slide-5 slide-bg-1 bg-position">
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">{{$slide->title}}</h1>
                        <h2 class="title text-white">{{$slide->sub_title}}</h2>
                        <a href="/{{app()->getLocale()}}{{$slide->button_link}}" class="btn flosun-button  secondary-btn theme-color rounded-0">{{$slide->button_text}}</a>
                    </div>
                </div>
            @endforeach
        </div>
{{--        @if(count($block->slide) > 1)--}}
{{--            <!-- Slider Navigation -->--}}
{{--            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>--}}
{{--            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>--}}
{{--            <!-- Slider pagination -->--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        @endif--}}
    </div>
</div>
