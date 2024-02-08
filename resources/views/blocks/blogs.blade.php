<div class="blog-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            @for($i = 0; $i < $block->limit; $i++)
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="/assets/images/resource/news-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box clearfix">
                                <div class="posted-date pull-left">25 Feb. 2019</div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="blog-detail.html">Metal Forming Reaches Veterans At Job Fair.</a></h3>
                                <div class="text">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</div>
                                <a href="blog-detail.html" class="theme-btn btn-style-four">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        @if($block->pagination)
        <ul class="styled-pagination text-center">
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>
        @endif

    </div>
</div>
