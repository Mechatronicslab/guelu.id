@extends('layouts.master')

@section('title', 'Guelu.id | Pendaftaran')

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
                                <div class="section_title">Pendaftaran</div>
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
                                                  <form action="{{ route('doRegister') }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input name="first_name" id="first_name" type="text" class="contact_input contact_input_name" placeholder="Nama depan" required="required">
                                                    <input name="last_name" id="last_name" type="text" class="contact_input contact_input_name" placeholder="Nama belakang" required="required">
                                                    <input name="full_name" id="full_name" type="text" class="contact_text" placeholder="Nama lengkap" required="required">
                                                    <input name="email" id="email" type="text" class="contact_text" placeholder="Alamat email" required="required">
                                                    <input name="username" id="username" type="text" class="contact_text" placeholder="Username" required="required">
                                                    <input name="password" id="password" type="password" class="contact_text" placeholder="Password" required="required">
                                                    <input name="verifi_password" id="verifi_password" type="password" class="contact_text" placeholder="Konfirmasi password" required="required">
                                                    <label for="photos" class="file" required>Foto profil</label>
                                                    <input type="file" name="photos" id="photos" required>
                                                    <button type="submit" class="contact_button">Daftar Sekarang</button>
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
