<div class="blog-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach(\App\Models\Page::where('parent_id',7)->orderBy('created_at','desc')->get() as $blog)
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="/{{app()->getLocale()}}/media/xeberler/{{$blog->slug}}"><img src="/uploads/{{$blog->image}}" alt="{{$blog->title}}" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-box clearfix">
                                <div class="posted-date pull-left">25 Feb. 2019</div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blog->slug}}">{{$blog->title}}</a></h3>
                                <div class="text">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</div>
                                <a href="/{{app()->getLocale()}}/media/xeberler/{{$blog->slug}}" class="theme-btn btn-style-four">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
