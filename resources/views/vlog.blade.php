@extends('layouts.master')

@section('title', 'Guelu.id | Video Blog')

@section('content')

    @include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="main_content">
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Semua Vlog</div>
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
                                        <li>more
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
                                    @foreach ($vlogs as $vlog)
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $vlog->thumbnails }})"></div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="{{ route('vlog.show', $vlog) }}">{{ $vlog->title }}</a></div>
                                                <small class="post_meta"><a href="#">{{ $vlog->user->first_name }}</a><span>{{ $vlog->created_at->toDayDateTimeString() }}</span></small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paging">
                      {{ $vlogs->links("pagination::bootstrap-4") }}
                    </div>
                </div>

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
