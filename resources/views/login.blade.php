@extends('layouts.master')

@section('title', 'Guelu.id | Login')

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
                                <div class="section_title">Login</div>
                            </div>

                              <div class="home_contents">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <!-- Post Comment -->
                                            <div class="post_comment">
                                                <div class="contact_form_container">
                                                  @if(\Session::has('alert'))
                                                      <div class="alert alert-danger">
                                                          <div>{{Session::get('alert')}}</div>
                                                      </div>
                                                  @endif
                                                  @if(\Session::has('alert-success'))
                                                      <div class="alert alert-success">
                                                          <div>{{Session::get('alert-success')}}</div>
                                                      </div>
                                                  @endif
                                                    <form action="{{ url('/doLogin') }}" method="post">
                                                      {{ csrf_field() }}
                                                        <input id="email" name="email" type="text" class="contact_text" placeholder="Username / Email" required="required">
                                                        <input id="password" name="password" type="password" class="contact_text" placeholder="Password" required="required">
                                                        <button type="submit" class="contact_button">Login</button>
                                                    </form>
                                                    <a href="{{ route('register') }}" type="submit" class="registrasi">Belum memiliki akun ? silahkan daftar sekarang !</a>
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
