@extends('layouts.master')

@section('title', 'Guelu.id')

<<<<<<< HEAD
=======
@section('content')
>>>>>>> a728e3bc6d39bc0a4d24de6135f72bd1541d33fe
<div class="home">

    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            @foreach ($slideshow->slice(0, 3) as $slide)
            <div class="owl-item slider">
                <div class="home_slider_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $slide->thumbnails }})"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_slider_item_category trans_200"><a href="/berita/{{ $slide->categories->slug }}" class="trans_200">Category</a></div>
                                    <div class="home_slider_item_title">
                                        <a href="/post/{{ $slide->id }}">{{ $slide->title }}</a>
<<<<<<< HEAD
=======
                                    </div>
                                    <div class="home_slider_item_link">
                                        <a href="/post/{{ $slide->id }}" class="trans_200">Continue Reading
                                            <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                      <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="similar_posts_container">
                    <div class="container">
                        <div class="row d-flex flex-row align-items-end">
                            @foreach ($berita->slice(0, 4) as $beritas)
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="/post/{{ $beritas->id }}">{{ $beritas->title }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="custom_nav_container home_slider_nav_container">
            <div class="custom_prev custom_prev_home_slider">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                <polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                </svg>
            </div>
            <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
                <li class="custom_dot custom_dot_home_slider active"><span></span></li>
                <li class="custom_dot custom_dot_home_slider"><span></span></li>
                <li class="custom_dot custom_dot_home_slider"><span></span></li>
            </ul>
            <div class="custom_next custom_next_home_slider">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                <polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                </svg>
            </div>
        </div>

    </div>
</div>
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="main_content">
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Sedang Hangat</div>
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
                                  @foreach ($berita->slice(0, 12) as $beritas)
                                  <div class="card card_default card_small_with_background grid-item">
                                      <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $beritas->thumbnails }})"></div>
                                      <div class="card-body">
                                          <div class="card-title card-title-small"><a href="{{ route('post.show', $beritas) }}">{{ $beritas->title }}</a></div>
                                          <small class="post_meta"><a href="#">{{ $beritas->administrator->first_name }}</a><span>{{ $beritas->created_at->toDayDateTimeString() }}</span></small>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="blog_section">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Video Populer</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                  @foreach ($vlog->slice(0, 12) as $vlogs)
                                  <div class="card card_default card_small_with_background grid-item">
                                      <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $vlogs->thumbnails }})"></div>
                                      <div class="card-body">
                                          <div class="card-title card-title-small"><a href="{{ route('vlog.show', $vlogs) }}">{{ $vlogs->title }}</a></div>
                                          <small class="post_meta"><a href="#">{{ $vlogs->administrator->first_name }}</a><span>{{ $vlogs->created_at->toDayDateTimeString() }}</span></small>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section future_events">
                            <div class="sidebar_title_container">
                                <div class="section_title">Pembahasan Forum</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_events">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												                    <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											                      </svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_events">
                                            <li class="custom_dot custom_dot_events active"><span></span></li>
                                            <li class="custom_dot custom_dot_events"><span></span></li>
                                            <li class="custom_dot custom_dot_events"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_events">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												                    <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											                      </svg>
                                        </div>
>>>>>>> a728e3bc6d39bc0a4d24de6135f72bd1541d33fe
                                    </div>
                                    <div class="home_slider_item_link">
                                        <a href="/post/{{ $slide->id }}" class="trans_200">Continue Reading
                                            <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                      <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="similar_posts_container">
                    <div class="container">
                        <div class="row d-flex flex-row align-items-end">
                            @foreach ($berita->slice(0, 4) as $beritas)
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="/post/{{ $beritas->id }}">{{ $beritas->title }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@section('content')

  <div class="page_content">
    <div class="container">
      <div class="row row-lg-eq-height">
        <!-- Main Content -->
        <div class="col-lg-9">
          <div class="main_content">
            <!-- Blog Section - Don't Miss -->
            <div class="blog_section">
              <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                <div class="section_title">Sedang Hangat</div>
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
                  <!-- Small Card With Background -->
                  @foreach ($berita->slice(0, 12) as $beritas)
                  <div class="card card_default card_small_with_background grid-item">
                    <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $beritas->thumbnails }})"></div>
                    <div class="card-body">
                      <div class="card-title card-title-small"><a href="{{ route('post.show', $beritas) }}">{{ $beritas->title }}</a></div>
                      <small class="post_meta"><a href="#">{{ $beritas->administrator->first_name }}</a><span>{{ $beritas->created_at->toDayDateTimeString() }}</span></small>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- Blog Section - Videos -->
            <div class="blog_section">
              <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                <div class="section_title">Video Populer</div>
              </div>
              <div class="section_content">
                <div class="grid clearfix">
                  <!-- Small Card With Background -->
                  @foreach ($vlog->slice(0, 12) as $vlogs)
                  <div class="card card_default card_small_with_background grid-item">
                    <div class="card_background" style="background-image:url({{URL::to('/')}}/upload/posts/{{ $vlogs->thumbnails }})"></div>
                    <div class="card-body">
                      <div class="card-title card-title-small"><a href="{{ route('vlog.show', $vlogs) }}">{{ $vlogs->title }}</a></div>
                      <small class="post_meta"><a href="#">{{ $vlogs->administrator->first_name }}</a><span>{{ $vlogs->created_at->toDayDateTimeString() }}</span></small>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- Blog Section - Forum -->
            <div class="blog_section">
              <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                <div class="section_title">Pembahasan Forum</div>
              </div>
              <div class="section_content">
                <div class="grid clearfix">
                  <!-- Future Events Slider Item -->
                  <div class="card_default grid-item">
                    <!-- Future Events Post -->
                    @foreach ($forum->slice(0, 12) as $forums)
                    <div class="side_post">
                      <a href="#">
                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                          <div class="event_date d-flex flex-column align-items-center justify-content-center">
                            <div class="event_day">{{ $forums->created_at->formatLocalized('%d') }}</div>
                            <div class="event_month">{{ $forums->created_at->formatLocalized('%b') }}</div>
                          </div>
                          <div class="side_post_content">
                            <div class="side_post_title">{{ $forums->title }}</div>
                            <small class="post_meta">{{ $forums->administrator->first_name }}<span>{{ $forums->created_at->formatLocalized('%a, %b %d') }}</span></small>
                          </div>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <!-- Blog Section - Calon legislatif -->
						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Calon Legislatif</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">

									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
										<div class="card_background" style="background-image:url(images/post_4.jpg)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

								</div>
							</div>
							<div class="load_more">

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
