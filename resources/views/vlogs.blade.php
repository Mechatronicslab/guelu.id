@extends('layouts.master')

@section('title', 'Guelu.id | Vlog')

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
                            <div class="blog_section">
                                <div class="videos">
                                    <div class="player_container">
                                        <iframe width="100%" height="100%" src="{{ $post->content }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
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
                        <div class="similar_posts">
                            <div class="post_comment">
                                <div class="post_comment_title">Post Comment</div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="post_comment_form_container">
                                          <form action="{{ route('vlog.comment', $post) }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                              <textarea name="message" class="comment_text" placeholder="Your Comment" required="required"></textarea>
                                              <button type="submit" class="comment_button">Post Comment</button>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comments_container">
                                            <ul class="comment_list">
                                              @foreach ($post->comments()->get() as $comment)
                                              <li class="comment">
                                                  <div class="comment_body">
                                                      <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                          <div class="comment_author_image">
                                                            <div class="side_post_user">
                                                                <div><img src="{{URL::to('/')}}/upload/profile/{{ $comment->user->photos }}" alt=""></div>
                                                            </div>
                                                          </div>
                                                          <small class="post_meta"><a href="#">{{ $comment->user->full_name }}</a><span>{{ $comment->created_at->toDayDateTimeString() }}</span><span>{{ $comment->created_at->diffForHumans() }}</span>
                                                          </small>
                                                          <!-- <button type="button" class="reply_button ml-auto">Reply
                                                          </button> -->
                                                      </div>
                                                      <div class="comment_content">
                                                          <p>{{ $comment->message }}</p>
                                                      </div>
                                                  </div>
                                              </li>
                                                @endforeach
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
