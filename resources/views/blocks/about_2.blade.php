<section class="about-section-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    @if(!empty($block->title))
                        <div class="sec-title">
                            <h2>{{$block->title}}</h2>
                        </div>
                    @endif
                    @if(!empty($block->bold_content))
                        <div class="bold-text">
                            {!! $block->bold_content !!}
                        </div>
                    @endif
                    @if(!empty($block->content))
                        <div class="text">
                            {!! $block->content !!}
                        </div>
                    @endif
                    @if(!empty($block->button_text))
                        <a href="{{$block->button_link}}" class="theme-btn btn-style-one">{{$block->button_text}}</a>
                    @endif
                </div>
            </div>
            @if(!empty($block->image))
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image">
                                <img src="/uploads/{{$block->image}}" alt="Tecnocon">
                                <a href="/uploads/{{$block->image}}" class="lightbox-image overlay-box">
                                    <span class="flaticon-arrow"></span>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
