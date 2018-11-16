@extends('layouts.master')

@section('title', 'Guelu.id | Post')

@section('content')

    @include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="post_content">
                        <div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
                            <div class="author_image">
                                <div><img src="{{URL::to('/')}}/images/author.jpg" alt=""></div>
                            </div>
                            <div class="post_meta"><a href="#">{{ $post->user->first_name }}</a><span>{{ $post->created_at->toDayDateTimeString() }}</span>
                            </div>
                            <div class="post_share ml-sm-auto">
                                <span>share</span>
                                <ul class="post_share_list">
                                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post_body">
                            <div class="post_title">{{ $post->title }}</div>
                            <hr>
                            {!! htmlspecialchars_decode($post->content) !!}
                            <div class="post_tags">
                                <ul>
                                    <li class="post_tag"><a href="#">{{ $post->categories->title }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="author_image">
                                <div><img src="{{URL::to('/')}}/images/author.jpg" alt=""></div>
                            </div>
                            <div class="post_meta"><a href="#">{{ $post->administrator->first_name }}</a><span>{{ $post->created_at->toDayDateTimeString() }}</span>
                            </div>
                            <div class="post_share ml-sm-auto">
                                <span>share</span>
                                <ul class="post_share_list">
                                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
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
                                                <input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
                                                <input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
                                                <textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
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
                                                                    <img src="{{URL::to('/')}}/images/comment_author_1.jpg" alt=""></div>
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
                                                                            <img src="{{URL::to('/')}}/images/comment_author_2.jpg" alt=""></div>
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
                                                                    <img src="{{URL::to('/')}}/images/comment_author_1.jpg" alt=""></div>
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
                    <div class="load_more">
                        <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                    </div>
                </div>
                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
