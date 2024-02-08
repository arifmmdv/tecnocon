@php
    $languages = [
        "az" => __('azerbaijani'),
        "en" => __('english'),
        "ru" => __('russian'),
    ]
@endphp
<!-- Main Header-->
<header class="main-header">
{{--    <li><a href="#">{{ $languages[app()->getLocale()] }}</a>--}}
{{--        <ul class="switcher-dropdown">--}}
{{--            @foreach($languages as $locale => $language)--}}
{{--                @if($locale !== app()->getLocale())--}}
{{--                    @php--}}
{{--                        $pathParts = explode("/", request()->path());--}}
{{--                        $pathParts[0] = $locale;--}}
{{--                        $newPath = implode("/", $pathParts);--}}
{{--                    @endphp--}}
{{--                    <li>--}}
{{--                        <a href="/{{ $newPath }}">{{ $language }}</a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </li>--}}

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li><a href="#">+1800 456 7890</a></li>
                        <li><a href="#"><span class="icon flaticon-note-1"></span>info@nortech.com</a></li>
                        <li><a href="#"><span class="icon flaticon-pin"></span>56, suit 799, melborne, Australia</a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right clearfix">
                    <!--social-icon-->
                    <div class="social-icon">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Header Top End -->

    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @foreach(\App\Models\Menu::find(1)->items as $menu)
                                    <li @if(isset($menu->children) && count($menu->children) > 0) class="dropdown" @endif>
                                        <a href="/{{app()->getLocale()}}{{$menu->slug}}">{{$menu->title}}</a>
                                        @if(isset($menu->children) && count($menu->children) > 0)
                                        <ul>
                                            @foreach($menu->children as $child)
                                                <li><a href="/{{app()->getLocale()}}{{$menu->slug}}{{$child->slug}}">{{$child->title}}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Nav Outer End-->

            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="sticky-inner-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @foreach(\App\Models\Menu::find(1)->items as $menu)
                                    <li @if(isset($menu->children) && count($menu->children) > 0) class="dropdown" @endif>
                                        <a href="/{{app()->getLocale()}}{{$menu->slug}}">{{$menu->title}}</a>
                                        @if(isset($menu->children) && count($menu->children) > 0)
                                            <ul>
                                                @foreach($menu->children as $child)
                                                    <li><a href="/{{app()->getLocale()}}">{{$child->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
