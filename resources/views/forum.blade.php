@extends('layouts.master')

@section('title', 'Guelu.id | Forum')

@section('content')

    @include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="main_content bottom">
                        <!-- Blog Section - What's Trending -->
                        <div class="sidebar_section future_events">
                            <div class="sidebar_title_container">
                                <div class="section_title">Pembahasan Hangat</div>
                            </div>
                            <div class="sidebar_section_content">
                                <!-- Sidebar Slider -->
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_events">
                                        <!-- Future Events Slider Item -->
                                        <div class="owl-item">
                                            <!-- Future Events Post -->
                                            @foreach ($forum->slice(0, 12) as $forums)
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">{{ $forums->created_at->formatLocalized('%d') }}</div>
                                                            <div class="event_month">{{ $forums->created_at->formatLocalized('%b') }}</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">{{ $forums->title }}
                                                            </div>
                                                            <small class="post_meta">{{ $forums->administrator->first_name }}
                                                                <span>{{ $forums->created_at->formatLocalized('%a, %b %d') }}</span>
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
                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
