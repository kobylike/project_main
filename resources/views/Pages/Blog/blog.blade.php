@extends('layout.app')


@section('content')
<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

 @include('inc.header')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('assets/images/background/5.jpg') }})">
    	<div class="auto-container">
        	<h2>Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Blog</li>
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
                	<div class="blog-classic padding-right">



                        @forelse ( $posts as $post )
                		<!-- News Block Three-->
                        @if (Session::has('success'))
                            <p style="color: green">{{ Session::get('success') }}</p>
                        @endif
		                <div class="news-block-three">
		                    <div class="inner-box">
                                @auth
                                @if(Auth::user()->id==$post->user->id)
                            <button  type="button"><a href="{{ route('admin blog.edit',$post) }}"><i class="fa fa-edit"></i></a></button> |
                            <button  type="button" ><a href="{{ route('admin blog.delete',$post) }}"><i class="fa fa-trash"></i></a></button>
                                @endif
                                @endauth

		                        <div class="image-box">
		                            <figure class="image"><a href="{{ route('blog.show',$post) }}"><img src="{{$post->image_path}}" alt=""></a></figure>
		                            <span class="date">{{ $post->created_at->diffForHumans() }}</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            	<ul class="post-info clearfix">
			                                <li><a href="{{ route('blog.show',$post) }}">By: {{ $post->user->name }}</a></li>
			                                <li><a href="{{ route('blog.show',$post) }}">interior, furniture</a></li>
			                                <li><a href="{{ route('blog.show',$post) }}">Comments: {{ $post->comments->count() }}</a></li>
			                            </ul>
			                        </div>
		                            <h3><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h3>
		                            <div class="text">{!! Str::limit( $post->body,300) !!}</div>
			                        <div class="link-box"><a href="{{ route('blog.show',$post) }}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
                        @empty
                        <p style="color: red">No Posts Yet</p>
                        @endforelse







					</div>

					<!--Styled Pagination-->
					{{-- <ul class="styled-pagination">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul> --}}
                    {{ $posts->links('pagination::bootstrap-5') }}
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form  action="">
                                <div class="form-group">

                                    <input type="search" name="search" value="" placeholder="Enter Search Keywords" required>
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
                                @foreach ($categories as $category )


                                <li><a href="{{ route('blog.index',['category'=>$category->name]) }}">{{ $category->name }} <span>({{ $category->posts->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>

						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent News</h2></div>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/images/resource/post-thumb-1.jpg') }}" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Hanging fruit to identify a ballpark value added ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/images/resource/post-thumb-2.jpg') }}" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Organically grow the holistic world view ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/images/resource/post-thumb-3.jpg') }}"alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Bring to the table in the win-win survival ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/images/resource/post-thumb-4.jpg') }}" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Override the digital divide with additional ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

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
