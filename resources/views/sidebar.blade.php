<div class="col-lg-3">
    <div class="sidebar">
        <div class="sidebar_background"></div>
        <!-- Top Stories -->
        <div class="sidebar_section">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Berita Teratas</div>
            </div>
            <div class="sidebar_section_content">
                <!-- Top Stories Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_top">
                        <!-- Top Stories Slider Item -->
                        <div class="owl-item">
                            <!-- Sidebar Post -->
                            @foreach ($berita->slice(0, 4) as $beritas)
                            <div class="side_post">
                                <a href="/post/{{ $beritas->id }}">
                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{URL::to('/')}}/upload/posts/{{ $beritas->thumbnails }}" alt=""></div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">{{ $beritas->title }}</div>
                                            <small class="post_meta">{{ $beritas->administrator->first_name }}<span>{{ $beritas->created_at->formatLocalized('%a, %b %d') }}</span></small>
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

        <!-- Newest Videos -->
        <div class="sidebar_section newest_videos">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Video Terbaru</div>
            </div>
            <div class="sidebar_section_content">
                <!-- Sidebar Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_vid">
                        <!-- Newest Videos Slider Item -->
                        <div class="owl-item">
                            <!-- Newest Videos Post -->
                            @foreach ($vlog->slice(0, 4) as $vlogs)
                            <div class="side_post">
                                <a href="/post/{{ $vlogs->id }}">
                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image">
                                            <div><img src="{{URL::to('/')}}/upload/posts/{{ $vlogs->thumbnails }}" alt=""></div>
                                        </div>
                                        <div class="side_post_content">
                                            <div class="side_post_title">{{ $vlogs->title }}</div>
                                            <small class="post_meta">{{ $vlogs->administrator->first_name }}<span>{{ $vlogs->created_at->formatLocalized('%a, %b %d') }}</span></small>
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
