<section class="company-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column @if(!empty($block->image)) col-md-8 @else col-md-12 @endif col-sm-12 col-xs-12">
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
                </div>
            </div>
            @if(!empty($block->image))
            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="/uploads/{{$block->image}}" alt="Tecnocon" />
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
