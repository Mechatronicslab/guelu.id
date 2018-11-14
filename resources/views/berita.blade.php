@extends('layouts.master')

@section('title', 'Guelu.id | Berita')

@section('content')

@include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="main_content">
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Semua Berita</div>
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
                                      <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }}"></div>
                                      <div class="card-body">
                                          <div class="card-title card-title-small"><a href="/post/{{ $post_->id }}">{{ $post_->title }}</a></div>
                                          <small class="post_meta"><a href="#">{{ $post_->administrator->first_name }}</a><span>{{ $post_->created_at->toDayDateTimeString() }}</span></small>
                                      </div>
                                  </div>
                                  @endforeach
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
