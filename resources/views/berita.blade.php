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
                                            <li><a href="/berita/{{ $kategori_->slug }}">{{ $kategori_->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="section_panel_more">
                                    <ul>
                                        <li>more
                                            <ul>
                                                @foreach ($kategori_list->slice(4, 10) as $kategori_)
                                                    <li>
                                                        <a href="/berita/{{ $kategori_->slug }}">{{ $kategori_->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    @foreach ($berita as $post_)
                                        <div class="card card_default card_small_with_background grid-item">
                                            <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $post_->thumbnails }}"></div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a href="{{ route('post.show', $post_) }}">{{ $post_->title }}</a></div>
                                                <small class="post_meta"><a href="#">{{ $post_->administrator->first_name }}</a><span>{{ $post_->created_at->toDayDateTimeString() }}</span>
                                                </small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paging">
                      {{ $berita->links("pagination::bootstrap-4") }}
                    </div>

                </div>

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
