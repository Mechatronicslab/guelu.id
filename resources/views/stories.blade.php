@extends('layouts.master')

@section('title', 'Guelu.id | Cerita Baru')

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
                                <div class="section_title">Buat Cerita Baru</div>
                            </div>
                            <div class="home_contents">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <!-- Post Comment -->
                                            <div class="post_comment">
                                                <div class="contact_form_container">
                                                  @if ($errors->any())
                                                  <div class="alert alert-danger">
                                                    <ul>
                                                      @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                      @endforeach
                                                    </ul>
                                                  </div>
                                                  @endif
                                                  <form action="{{ route('stories.insertinsert') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input name="title" id="title" type="text" class="contact_text" placeholder="Judul..." required="required">
                                                    <textarea name="content" id="content" type="text" class="contact_text" required="required" placeholder="Masukan teks disini..."></textarea>
                                                    <button type="submit" class="contact_button">Kirim</button>
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

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
