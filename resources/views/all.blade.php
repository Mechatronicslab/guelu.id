@extends('layouts.master')

@section('title', 'Guelu.id | Semua cerita')

@section('content')

    @include('header')
    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="post_content">
                        <div class="similar_posts">
                            <div class="comments">
                              <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                  <div class="section_title">Semua cerita anda</div>
                              </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comments_container">
                                            <ul class="comment_list">
                                              @foreach ($cerita as $storie)
                                                <li class="comment">
                                                    <div class="comment_body">
                                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                            <div class="comment_author_image">
                                                              <div class="side_post_user">
                                                                  <div><img src="{{URL::to('/')}}/upload/profile/{{ $storie->user->photos }}" alt=""></div>
                                                              </div>
                                                            </div>
                                                            <small class="title_stories">{{ $storie->title }}</small>
                                                            <small class="post_meta"><a href="#">{{ $storie->user->full_name }}</a><span>{{ $storie->created_at->toDayDateTimeString() }}</span><span>{{ $storie->created_at->diffForHumans() }}</span>
                                                            </small>
                                                            <!-- <button type="button" class="reply_button ml-auto">Reply
                                                            </button> -->
                                                        </div>
                                                        <div class="comment_content">
                                                            <p>{{ $storie->content }}</p>
                                                        </div>
                                                    </div>
                                                    <?php if ($storie->status == 1): ?>
                                                    <div class="icon_status_draft" > Draft |
                                                      <span class="footer_social_pinterest"><a href="{{ route('stories.deletestories', $storie) }}"><i class="fa fa-trash icon_status_action"></i></a></span>
                                                    </div>
                                                    <?php else: ?>
                                                    <div class="icon_status_published" > Published |
                                                      <span class="footer_social_pinterest"><a href="{{ route('stories.deletestories', $storie) }}"><i class="fa fa-trash icon_status_action"></i></a></span>
                                                    </div>
                                                    <?php endif; ?>
                                                </li>
                                                @endforeach
                                            </ul>
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
