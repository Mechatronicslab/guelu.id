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
                            <div class="home_background parallax-window" data-parallax="scroll"
                                 data-image-src="{{URL::to('/')}}/images/regular.jpg" data-speed="0.8"></div>
                            <div class="home_contents">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <!-- Post Comment -->
                                            <div class="post_comment">
                                                <div class="contact_form_container">
                                                    <form action="{{ route('contact.message', 'message') }}" method="post" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                        <input type="text" name="fullname" class="contact_input contact_input_name" placeholder="Your Name" required="required">
                                                        <input type="email" name="email" class="contact_input contact_input_email" placeholder="Your Email" required="required">
                                                        <textarea class="contact_text" name="messager" placeholder="Your Message" required="required"></textarea>
                                                        <button type="submit" class="contact_button">Send Message
                                                        </button>
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
