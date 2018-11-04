@extends('layouts.master')

@section('title', 'Guelu.id | Post')

@section('content')

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                  @foreach ($isi as $id)
                    <div class="post_content">
                        <div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
                            <div class="author_image">
                                <div><img src="{{URL::to('/')}}/images/author.jpg" alt=""></div>
                            </div>
                            <div class="post_meta"><a href="#">admin</a><span>{{ $id->created_at->toDayDateTimeString() }}</span></div>
                            <div class="post_share ml-sm-auto">
                                <span>share</span>
                                <ul class="post_share_list">
                                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook"
                                                                               aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter"
                                                                               aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-google"
                                                                               aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post_body">
                            {!! htmlspecialchars_decode($id->content) !!}
                            <div class="post_tags">
                                <ul>
                                    <li class="post_tag"><a href="#">Liberty</a></li>
                                    <li class="post_tag"><a href="#">Manual</a></li>
                                    <li class="post_tag"><a href="#">Interpretation</a></li>
                                    <li class="post_tag"><a href="#">Recommendation</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="author_image">
                                <div><img src="{{URL::to('/')}}/images/author.jpg" alt=""></div>
                            </div>
                            <div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
                            <div class="post_share ml-sm-auto">
                                <span>share</span>
                                <ul class="post_share_list">
                                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook"
                                                                               aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter"
                                                                               aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-google"
                                                                               aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="similar_posts">
                            <div class="post_comment">
                                <div class="post_comment_title">Post Comment</div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="post_comment_form_container">
                                            <form action="#">
                                                <input type="text" class="comment_input comment_input_name"
                                                       placeholder="Your Name" required="required">
                                                <input type="email" class="comment_input comment_input_email"
                                                       placeholder="Your Email" required="required">
                                                <textarea class="comment_text" placeholder="Your Comment"
                                                          required="required"></textarea>
                                                <button type="submit" class="comment_button">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="comments_title">Comments <span>(12)</span></div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comments_container">
                                            <ul class="comment_list">
                                                <li class="comment">
                                                    <div class="comment_body">
                                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_author_image">
                                                                <div>
                                                                    <img src="{{URL::to('/')}}/images/comment_author_1.jpg"
                                                                         alt=""></div>
                                                            </div>
                                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span>
                                                            </small>
                                                            <button type="button" class="reply_button ml-auto">Reply
                                                            </button>
                                                        </div>
                                                        <div class="comment_content">
                                                            <p>Pick the yellow peach that looks like a sunset with its
                                                                red, orange, and pink coat skin, peel it off with your
                                                                teeth. Sink them into unripened.</p>
                                                        </div>
                                                    </div>
                                                    <ul class="comment_list">
                                                        <li class="comment">
                                                            <div class="comment_body">
                                                                <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                                    <div class="comment_author_image">
                                                                        <div>
                                                                            <img src="{{URL::to('/')}}/images/comment_author_2.jpg"
                                                                                 alt=""></div>
                                                                    </div>
                                                                    <small class="post_meta"><a href="#">Katy
                                                                            Liu</a><span>Sep 29, 2017 at 9:48 am</span>
                                                                    </small>
                                                                    <button type="button" class="reply_button ml-auto">
                                                                        Reply
                                                                    </button>
                                                                </div>
                                                                <div class="comment_content">
                                                                    <p>Nulla facilisi. Aenean porttitor quis tortor id
                                                                        tempus. Interdum et malesuada fames ac ante
                                                                        ipsum primis in faucibus. Vivamus molestie
                                                                        varius tincidunt. Vestibulum congue sed libero
                                                                        ac sodales.</p>
                                                                </div>
                                                            </div>
                                                            <ul class="comment_list">
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment_body">
                                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_author_image">
                                                                <div>
                                                                    <img src="{{URL::to('/')}}/images/comment_author_1.jpg"
                                                                         alt=""></div>
                                                            </div>
                                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span>
                                                            </small>
                                                            <button type="button" class="reply_button ml-auto">Reply
                                                            </button>
                                                        </div>
                                                        <div class="comment_content">
                                                            <p>Pick the yellow peach that looks like a sunset with its
                                                                red, orange, and pink coat skin, peel it off with your
                                                                teeth. Sink them into unripened.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="load_more">
                        <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>
                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Berita Teratas</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_top">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_top">
                                            <li class="custom_dot custom_dot_top active"><span></span></li>
                                            <li class="custom_dot custom_dot_top"><span></span></li>
                                            <li class="custom_dot custom_dot_top"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_top">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/top_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section newest_videos">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Video Terbaru</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_vid">
                                            <li class="custom_dot custom_dot_vid active"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12"
                                                 enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe"
                                                          points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_vid">
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="side_post">
                                                <a href="/post">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div><img src="{{URL::to('/')}}/images/vid_4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">How Did van Gogh’s Turbulent
                                                                Mind
                                                            </div>
                                                            <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
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
    </div>

@endsection
