@extends('layouts.master')

@section('title', 'Guelu.id | Kontak Kami')

@section('content')

@include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Main Content -->

                <div class="col-lg-9">
                    <div class="main_content">

                        <!-- Blog Section - What's Trending -->

                        <div class="blog_section bottom">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Hubungi Kami</div>
                            </div>

                                <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{URL::to('/')}}/images/regular.jpg" data-speed="0.8"></div>
                                <div class="home_content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <!-- Post Comment -->
                                                <div class="post_comment">
                                                    <div class="contact_form_container">
                                                        <form action="#">
                                                            <input type="text" class="contact_input contact_input_name" placeholder="Your Name" required="required">
                                                            <input type="email" class="contact_input contact_input_email" placeholder="Your Email" required="required">
                                                            <textarea class="contact_text" placeholder="Your Message" required="required"></textarea>
                                                            <button type="submit" class="contact_button">Send Message</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
