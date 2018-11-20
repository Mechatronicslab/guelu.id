@extends('layouts.master')

@section('title', 'Guelu.id | Forum')

@section('content')

    @include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="post_content">
                        <div class="similar_posts">
                            <div class="comments">
                              <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                  <div class="section_title">{{ $stories->title }}</div>
                              </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comments_container">
                                            <ul class="comment_list">
                                                <li class="comment">
                                                    <div class="comment_body">
                                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_author_image">
                                                              <div class="side_post_user">
                                                                  <div><img src="{{URL::to('/')}}/upload/profile/{{ $stories->user->photos }}" alt=""></div>
                                                              </div>
                                                            </div>
                                                            <small class="title_stories">{{ $stories->title }}</small>
                                                            <small class="post_meta"><a href="#">{{ $stories->user->full_name }}</a><span>{{ $stories->created_at->toDayDateTimeString() }}</span><span>{{ $stories->created_at->diffForHumans() }}</span>
                                                            </small>
                                                            <!-- <button type="button" class="reply_button ml-auto">Reply
                                                            </button> -->
                                                        </div>
                                                        <div class="comment_content">
                                                            <p>{{ $stories->content }}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <div class="post_comment_title">Tanggapan</div>

                                                @foreach ($stories->comments()->get() as $comment)
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

                                <div class="similar_posts">
                                    <div class="post_comment">
                                        <div class="post_comment_title">Post Comment</div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="post_comment_form_container">
                                                  <form action="{{ route('stories.comment', $stories) }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                      <textarea name="message" class="comment_text" placeholder="Your Comment" required="required"></textarea>
                                                      <button type="submit" class="comment_button">Post Comment</button>
                                                  </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="load_more">
                        <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                    </div> -->
                </div>

                <!-- sidebar -->
                @include('sidebar')
            </div>
        </div>
    </div>

@endsection
