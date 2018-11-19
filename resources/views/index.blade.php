@extends('layouts.master')

@section('title', 'Guelu.id')

@section('content')

    <div class="home">
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                @foreach ($slideshow->slice(0, 3) as $slide)
                    <div class="owl-item slider">
                        <div class="home_slider_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $slide->thumbnails }})"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_slider_item_category trans_200"><a href="/berita/{{ $slide->categories->slug }}" class="trans_200">{{ $slide->categories->title }}</a>
                                            </div>
                                            <div class="home_slider_item_title">
                                                <a href="{{ route('post.show', $slide) }}">{{ $slide->title }}</a>
                                            </div>
                                            <div class="home_slider_item_link">
                                                <a href="{{ route('post.show', $slide) }}" class="trans_200">Continue Reading
                                                    <svg version="1.1" id="link_arrow_1"xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="19px" height="13px" viewBox="0 0 19 13"enable-background="new 0 0 19 13" xml:space="preserve">
                                                        <polygon fill="#FFFFFF"points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="similar_posts_container">
                            <div class="container">
                                <div class="row d-flex flex-row align-items-end">
                                    @foreach ($berita->slice(0, 4) as $beritas)
                                        <div class="col-lg-3 col-md-6 similar_post_col">
                                            <div class="similar_post trans_200">
                                                <a href="{{ route('post.show', $beritas) }}">{{ $beritas->title }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="main_content">
                        <!-- Blog Section - Don't Miss -->
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Sedang Hangat</div>
                                <div class="section_tags ml-auto">
                                    <ul>
                                        <li class="active"><a href="#">semua</a></li>
                                        @foreach ($kategoris->slice(0, 4) as $kategori)
                                            <li><a href="/berita/{{ $kategori->slug }}">{{ $kategori->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="section_panel_more">
                                    <ul>
                                        <li>
                                            <ul>
                                                @foreach ($kategoris->slice(4, 10) as $kategori)
                                                    <li>
                                                        <a href="/berita/{{ $kategori->slug }}">{{ $kategori->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    <!-- Small Card With Background -->
                                    @foreach ($berita->slice(0, 12) as $beritas)
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $beritas->thumbnails }})"></div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="{{ route('post.show', $beritas) }}">{{ $beritas->title }}</a>
                                                </div>
                                                <small class="post_meta"><a href="#">{{ $beritas->administrator->first_name }}</a><span>{{ $beritas->created_at->formatLocalized('%a, %b %d %y') }}</span><span>{{ $beritas->created_at->diffForHumans() }}</span>
                                                </small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Blog Section - Videos -->
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Video Populer</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    <!-- Small Card With Background -->
                                    @foreach ($vlog->slice(0, 12) as $vlogs)
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $vlogs->thumbnails }})"></div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="{{ route('vlog.show', $vlogs) }}">{{ $vlogs->title }}</a>
                                                </div>
                                                <small class="post_meta"><a href="#">{{ $vlogs->administrator->first_name }}</a><span>{{ $vlogs->created_at->formatLocalized('%a, %b %d %y') }}</span><span>{{ $beritas->created_at->diffForHumans() }}</span>
                                                </small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Blog Section - Forum -->
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Pembahasan Forum</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    <!-- Future Events Slider Item -->
                                    <div class="card_default grid-item">
                                        <!-- Future Events Post -->
                                        @foreach ($forum->slice(0, 12) as $forums)
                                            <div class="side_post">
                                                <a href="post.html">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">{{ $forums->created_at->formatLocalized('%d') }}</div>
                                                            <div class="event_month">{{ $forums->created_at->formatLocalized('%b') }}</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">{{ $forums->title }}</div>
                                                            <small class="post_meta">{{ $forums->administrator->first_name }}
                                                                <span>{{ $forums->created_at->formatLocalized('%a, %b %d') }}</span><span>{{ $beritas->created_at->diffForHumans() }}</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Section - Calon legislatif -->
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Calon Legislatif</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    <!-- Small Card With Background -->
                                    @foreach ($legislatifs->slice(0, 12) as $legislatif)
                                    <div class="card card_default card_small_with_background grid-item">
                                        <div class="card_background" style="background-image:url(images/post_4.jpg)"></div>
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="post.html">{{ $legislatif->title }}</a></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span>
                                            </small>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="load_more">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
