<section class="ceo-section">
    <div class="auto-container">
        <div class="row clearfix">

            @if(!empty($block->image))
            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="/uploads/{{$block->image}}" alt="Tecnocon" />
                </div>
            </div>
            @endif
            <!--Content Column-->
            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                <div class="inner-column">
                    @if(!empty($block->title))
                        <h2>{{$block->title}}</h2>
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

        </div>
    </div>
</section>
