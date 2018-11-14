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

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
