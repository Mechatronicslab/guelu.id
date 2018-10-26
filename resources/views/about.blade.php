@extends('layouts.master')

@section('title', 'Guelu.id | Tentang Kami')

@section('content')

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Main Content -->

                <div class="col-lg-9">
                    <div class="main_content">

                        <!-- Blog Section - What's Trending -->

                        <div class="blog_section bottom">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Tentang Kami</div>
                            </div>

                            <div class="post_body">
                                <figure>
                                    <img src="{{URL::to('/')}}/images/post_image.jpg" alt="">
                                    <figcaption>Tittle Photo</figcaption>
                                </figure>
                                <p class="post_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim
                                    nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis
                                    dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel
                                    venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec,
                                    accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna
                                    pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna
                                    eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit
                                    semper.</p>
                                <p class="post_p">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed
                                    scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec
                                    nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu
                                    nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper
                                    ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula
                                    ornare.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Sidebar -->

                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>

                        <!-- Top Stories -->

                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Berita Teratas</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_top">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_top">
                                            <li class="custom_dot custom_dot_top active"><span></span></li>
                                            <li class="custom_dot custom_dot_top"><span></span></li>
                                            <li class="custom_dot custom_dot_top"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_top">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">

                                <!-- Top Stories Slider -->
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Sidebar Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
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

                        <!-- Newest Videos -->

                        <div class="sidebar_section newest_videos">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Video Terbaru</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_vid">
                                            <li class="custom_dot custom_dot_vid active"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">

                                <!-- Sidebar Slider -->
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_vid">

                                        <!-- Newest Videos Slider Item -->
                                        <div class="owl-item">

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <!-- Newest Videos Slider Item -->
                                        <div class="owl-item">

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <!-- Newest Videos Slider Item -->
                                        <div class="owl-item">

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Newest Videos Post -->
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
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

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection