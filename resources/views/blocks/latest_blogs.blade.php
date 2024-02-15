<section class="news-section">
    <div class="auto-container">
        @php
            $blogs = \App\Models\Page::where('parent_id',7)->orderBy('created_at','desc')->paginate(5);
        @endphp
        <div class="sec-title">
            <h2>{{$block->title}}</h2>
            <div class="title">{{$block->sub_title}}</div>
        </div>

        <div class="row clearfix">

            <!--Column-->
            <div class="column col-md-8 col-sm-12 col-xs-12">
                <div class="row clearfix">

                    <!--News Block-->
                    <div class="news-block col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[0]->slug}}">
                                    <img src="/uploads/{{$blogs[0]->image}}" alt="{{$blogs[0]->title}}" />
                                </a>
                            </div>
                            <div class="lower-box">
                                <div class="post-info">18 Jan 2019</div>
                                <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[0]->slug}}">{{$blogs[0]->title}}</a></h3>
                                <a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[0]->slug}}" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!--News Block-->
                    <div class="news-block col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[1]->slug}}">
                                    <img src="/uploads/{{$blogs[1]->image}}" alt="{{$blogs[1]->title}}" />
                                </a>
                            </div>
                            <div class="lower-box">
                                <div class="post-info">18 Jan 2019</div>
                                <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[1]->slug}}">{{$blogs[1]->title}}</a></h3>
                                <a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[1]->slug}}" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Column-->
            <div class="column col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-news">

                    <!--News Block Two-->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[2]->slug}}">{{$blogs[2]->title}}</a></h3>
                            <div class="post-info">18 Jan 2019</div>
                        </div>
                    </div>

                    <!--News Block Two-->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[3]->slug}}">{{$blogs[3]->title}}</a></h3>
                            <div class="post-info">18 Jan 2019</div>
                        </div>
                    </div>

                    <!--News Block Two-->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <h3><a href="/{{app()->getLocale()}}/media/xeberler/{{$blogs[4]->slug}}">{{$blogs[4]->title}}</a></h3>
                            <div class="post-info">18 Jan 2019</div>
                        </div>
                    </div>

                    <a href="/{{app()->getLocale()}}/media/xeberler" class="read-more">Xeberler</a>

                </div>
            </div>

        </div>

    </div>
</section>
