<section class="history-section">
    <div class="auto-container">
        <div class="row clearfix">

            @if(!empty($block->title))
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>{{$block->title}}</h2>
                    </div>
                </div>
            @endif

            <div class="content-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
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
                        @if(!empty($block->image_1) || !empty($block->image_2))
                            <div class="row clearfix">
                                @if(!empty($block->image_1))
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="/uploads/{{$block->image_1}}" alt="" />
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($block->title))
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="/uploads/{{$block->image_2}}" alt="" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                </div>
            </div>

        </div>
    </div>
</section>
