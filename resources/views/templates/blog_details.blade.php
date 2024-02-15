@extends('layouts.web')

@section('content')
    <section class="page-title" style="background-image:url(images/background/4.jpg);">
        <div class="auto-container">
            <h1>{{$blog->title}}</h1>
        </div>
    </section>

    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="/{{app()->getLocale()}}">Home</a></li>
                    <li><a href="/{{app()->getLocale()}}/media/xeberler">{{$page->title}}</a></li>
                    <li>{{$blog->title}}</li>
                </ul>
                <div class="text pull-right">Engineering Tomorrow</div>
            </div>
        </div>
    </div>

    <div class="sidebar-page-container">
        <div class="auto-container narrow">
            <div class="row clearfix">

                <!--Content Side / Our Blog-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-single padding-right">

                        <!--News Block Three-->
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="/uploads/{{$blog->image}}" alt="{{$blog->title}}" />
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box clearfix">
                                        <div class="posted-date pull-left">25 Feb. 2019</div>
                                        <ul class="post-meta pull-right">
                                            <li>By :  Admin</li>
                                            <li>industrial, mechanical</li>
                                            <li>Comments: 7</li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3>Metal Forming Reaches Veterans At Job Fair.</h3>
                                        <div class="text">
                                            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables. Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual. Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables. </p>
                                            <h4>Two Column Text Sample</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                                </div>
                                            </div>
                                            <p>Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#">here is link</a> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
