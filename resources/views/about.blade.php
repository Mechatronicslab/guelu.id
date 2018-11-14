@extends('layouts.master')

@section('title', 'Guelu.id | Tentang Kami')

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
                                <div class="section_title">Tentang Kami</div>
                            </div>
                            <div class="post_body">
                                <figure>
                                    <img src="{{URL::to('/')}}/images/post_image.jpg" alt="">
                                    <figcaption>Tittle Photo</figcaption>
                                </figure>
                                <p class="post_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim
                                    nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis
                                    dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel
                                    venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec,
                                    accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna
                                    pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna
                                    eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit
                                    semper.</p>
                                <p class="post_p">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed
                                    scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec
                                    nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu
                                    nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper
                                    ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula
                                    ornare.</p>
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
