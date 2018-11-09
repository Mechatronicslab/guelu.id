@extends('layouts.master')

@section('title', 'Guelu.id')

@section('content')

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="main_content">
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Sedang Hangat</div>
                                <div class="section_tags ml-auto">
                                    <ul>
                                        <li class="active"><a href="#">semua</a></li>
                                        @foreach ($kategori_list->slice(0, 4) as $kategori_)
                                        <li><a href="/berita/{{ $kategori_->slug }}">{{ $kategori_->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="section_panel_more">
                                    <ul>
                                        <li>more
                                            <ul>
                                                @foreach ($kategori_list->slice(4, 10) as $kategori_)
                                                <li><a href="/berita/{{ $kategori_->slug }}">{{ $kategori_->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                  @foreach ($post_list->slice(0, 12) as $post_)
                                  <div class="card card_default card_small_with_background grid-item">
                                      <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }})"></div>
                                      <div class="card-body">
                                          <div class="card-title card-title-small"><a href="/post/{{ $post_->id }}">{{ $post_->title }}</a></div>
                                          <small class="post_meta"><a href="#">{{ $post_->administrator->first_name }}</a><span>{{ $post_->created_at->toDayDateTimeString() }}</span></small>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Video Populer</div>
                            </div>
                            <div class="section_content">
                                <div class="row">
                                    <div class="col">
                                        <div class="videos">
                                            <div class="player_container">
                                                <div id="P1" class="player"data-property="{videoURL:'UjYemgbhJF0',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}"></div>
                                            </div>
                                            <div class="playlist">
                                                <div class="playlist_background"></div>
                                                @foreach ($post_list->slice(0, 4) as $post_)
                                                <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'UjYemgbhJF0', mute:false, addRaster:true})">
                                                    <div class="video d-flex flex-row align-items-center justify-content-start">
                                                        <div class="video_image"><div><img src="{{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }}" alt=""></div><img class="play_img" src="{{URL::to('/')}}/images/play.png" alt=""></div>
                                                        <div class="video_content">
                                                            <div class="video_title">{{ $post_->title }}</div>
                                                            <div class="video_info"><span>{{ $post_->created_at->formatLocalized('%a, %b %d') }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section future_events">
                            <div class="sidebar_title_container">
                                <div class="section_title">Pembahasan Forum</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_events">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												                    <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											                      </svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_events">
                                            <li class="custom_dot custom_dot_events active"><span></span></li>
                                            <li class="custom_dot custom_dot_events"><span></span></li>
                                            <li class="custom_dot custom_dot_events"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_events">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												                    <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											                      </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_events">
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">13</div>
                                                            <div class="event_month">apr</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">13</div>
                                                            <div class="event_month">apr</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">13</div>
                                                            <div class="event_month">apr</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog_section bottom">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Calon Legislatif</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    <div class="card card_default card_small_with_background grid-item">
                                        <div class="card_background" style="background-image:url({{URL::to('/')}}/images/sample_caleg.jpg)"></div>
                                        <div class="card-body">
                                            <div class="card-title card-title-small"><a href="/post">Nama Calon Legislatif</a></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Berita Teratas</div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">
                                        <div class="owl-item">
                                          @foreach ($post_list->slice(0, 4) as $post_)
                                            <div class="side_post">
                                                <a href="/post/{{ $post_->id }}">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">{{ $post_->title }}</div>
                                                            <small class="post_meta">{{ $post_->administrator->first_name }}<span>{{ $post_->created_at->formatLocalized('%a, %b %d') }}</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Video Terbaru</div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">
                                        <div class="owl-item">
                                          @foreach ($post_list->slice(0, 4) as $post_)
                                            <div class="side_post">
                                                <a href="/post/{{ $post_->id }}">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">{{ $post_->title }}</div>
                                                            <small class="post_meta">{{ $post_->administrator->first_name }}<span>{{ $post_->created_at->formatLocalized('%a, %b %d') }}</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
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
