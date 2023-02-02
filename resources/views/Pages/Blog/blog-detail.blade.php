@extends('layout.app')


@section('content')

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('inc.header')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('assets/images/background/5.jpg') }})">
    	<div class="auto-container">
        	<h2>Blog Details</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single padding-right">
						<div class="inner-box">
							<div class="image-box">
                                <figure class="image"><img src="{{ asset($post->image_path) }}" alt=""></figure>
                                <span class="date">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="lower-content">
                                <div class="post-meta">
                                    <ul class="post-info clearfix">
                                        <li><a href="blog-detail.html">By : {{ $post->user->name }}</a></li>
                                        <li><a href="{{ route('blog.index',['category'=>$post->category->name]) }}">{{ $post->category->name}}</a></li>
                                        <li><a href="blog-detail.html">Comments:{{ $post->comments->count() }}</a></li>
                                    </ul>
                                </div>
								<div class="lower-box">
									<h3>{{ $post->title }}</h3>
									<div class="text">
										<p>{{ $post->body }} </p>

									</div>
								</div>
							</div>
						</div>


                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments ({{ $post->comments->count() }})</h2></div>
                                <div class="inner-box">


                                <!--Comment Box-->
                                @forelse ($post->comments as $comment )
                                <div class="comment-box">
                                    <div class="comment">
                                        @auth
                                        @if (Auth()->user()->id==$comment->user_id)

                                        <button  type="button"><a href="{{ route('comment.edit',$comment) }}"><i class="fa fa-edit"></i></a></button> |
                                        <button  type="button"><a href="{{ route('comment.delete',$comment)}}"><i class="fa fa-trash"></i></a></button>
                                            @endif
                                            @endauth
                                        <div class="author-thumb"><img src="{{asset('storage/UserImages/'. $comment->user->image) }}" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>{{ $comment->user->name}}</strong></div>
                                            <div class="text">{{ $comment->body }}</div>
                                            <ul class="post-info">
                                                <li>{{ $comment->created_at->diffForHumans() }}</li>
                                                <li><a href="javascript::void(0);" onclick="reply(this)">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="comment reply-comment">
                                        <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix"><strong>Robert john</strong></div>
                                            <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            <ul class="post-info">
                                                <li>08 Feb, 2019</li>
                                                <li><a href="">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                @empty
                                <p>No Comments Yet</p>
                                 @endforelse

                            </div>
                        </div>

                        
                        <!-- Comment Form -->
                        <div class="comment-form">

                            <div class="group-title"><h2>Leave a Comment</h2></div>
                            <div class="form-inner">
                                @if (Session::has('failed'))
                                <p style="color: red">{{ Session::get('failed') }}</p>

                                @elseif (Session::has('success'))
                                <p style="color: green">{{ Session::get('success') }}</p>
                                @endif
                                <!--Comment Form-->
                                <form method="post" action="{{ route('comment.store') }}">
                                    @csrf
                                    <div class="row clearfix">
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" >
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="comment_body" placeholder="Write message"></textarea>
                                        </div>
                                        @error('comment_body')
                                        <p style="color: red">{{ $message}}</p>
                                        @enderror

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Post Comment</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Comment Form -->

                         <!--Reply Form-->
                         <div class="reply-form" style="display: none">

                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" id="post_id" value="" />
                              <div class="row">
                                <div class="col form-group">
                                  <textarea name="comment_body" class="form-control"  placeholder="Your Comment*" >
                                  </textarea>
                                  
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Reply</button>

                            </form>

                          </div>


                         <!--End Reply Form -->

                    </div>
				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>

						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                @foreach ($categories as $cat )


                                <li><a href="{{ route('blog.index',['category'=> $cat->name]) }}">{{ $cat->name }}<span> ({{ $cat->posts->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>

						<!-- Popular Posts -->

                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Related News</h2></div>
                            @foreach ($relatedPosts as $relatedPost)
                            <article class="post">

                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset($relatedPost->image_path) }}"alt=""></a></figure>
                                <div class="text"><a href="{{ route('blog.show',$relatedPost) }}">{{ $relatedPost->title }}</a></div>
                                <div class="post-info">{{ $relatedPost->created_at->diffForHumans() }}</div>

                            </article>
                            @endforeach


                        </div>

						<!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="#">Interior Tips</a>
                            <a href="#">Lighting</a>
                            <a href="#">Designs</a>
                            <a href="#">Vintage Look</a>
                            <a href="#">Kitchens</a>
                            <a href="#">Kitchens</a>
                        </div>

					</aside>
				</div>

			</div>
		</div>
	</div>

    @endsection
