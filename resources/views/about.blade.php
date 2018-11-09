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
                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Berita Teratas</div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">
                                        <div class="owl-item">
                                          @foreach ($berita->slice(0, 4) as $beritas)
                                            <div class="side_post">
                                                <a href="/post/{{ $beritas->id }}">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{URL::to('/')}}/upload/posts/{{ $beritas->thumbnails }}" alt=""></div></div>
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
                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Video Terbaru</div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">
                                        <div class="owl-item">
                                          @foreach ($vlog->slice(0, 4) as $vlogs)
                                            <div class="side_post">
                                                <a href="/post/{{ $vlogs->id }}">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{URL::to('/')}}/upload/posts/{{ $vlogs->thumbnails }}" alt=""></div></div>
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

            </div>
        </div>
    </div>

@endsection
