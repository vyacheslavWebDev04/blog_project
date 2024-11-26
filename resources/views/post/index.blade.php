@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Добро пожаловать!</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                            <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                            </a>
                        </div>
                        {{--                                    лайк контейнер конец--}}
                        <div class="d-flex justify-content-between">
                            <a style="text-decoration: none" href="{{route('category.post.index', $post->category->id)}}"><p class="blog-post-category">{{$post->category->title}}</p></a>
{{--                        <p class="blog-post-category">{{$post->category->title}}</p>--}}
                            @auth()
                            <form action="{{route('post.like.store', $post->id)}}" method="POST">
                                @csrf
                                @if($post->liked_users_count !== 0)
                                    <span>{{$post->liked_users_count}}</span>
                                @endif
                                <button type="submit" class=" border-0 bg-transparent">
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="fas fa-heart"> </i>
                                        @else
                                    <i class="far fa-heart"> </i>
                                    @endif
                                </button>
                            </form>
                                    @endauth
                            @guest()
                            <div>
                                @if($post->liked_users_count !== 0)
                                <span>{{$post->liked_users_count}}</span>
                                @endif
                                <i class="far fa-heart"> </i>
                            </div>
                            @endguest
                        </div>
                        {{--                                    лайк контейнер конец--}}
                        <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -100px;">
                        {{$posts->Links()}}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $post)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                    <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                                    </a>
                                </div>
                                {{--                                    лайк контейнер старт--}}
                                <div class="d-flex justify-content-between">
                                    <a style="text-decoration: none" href="{{route('category.post.index', $post->category->id)}}"><p class="blog-post-category">{{$post->category->title}}</p></a>
                                    @auth()
                                        <form action="{{route('post.like.store', $post->id)}}" method="POST">
                                            @csrf
                                            @if($post->liked_users_count !== 0)
                                                <span>{{$post->liked_users_count}}</span>
                                            @endif
                                            <button type="submit" class=" border-0 bg-transparent">
                                                @if(auth()->user()->likedPosts->contains($post->id))
                                                    <i class="fas fa-heart"> </i>
                                                @else
                                                    <i class="far fa-heart"> </i>
                                                @endif
                                            </button>
                                        </form>
                                    @endauth
                                    @guest()
                                        <div>
                                            @if($post->liked_users_count !== 0)
                                                <span>{{$post->liked_users_count}}</span>
                                            @endif
                                            <i class="far fa-heart"> </i>
                                        </div>
                                    @endguest
                                </div>
                                {{--                                    лайк контейнер конец--}}
                                <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$post->title}}
                                        </h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                            <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                                        </a>
                                    </div>
{{--                                    лайк контейнер старт--}}
                                    <div class="d-flex justify-content-between">
                                        <a style="text-decoration: none" href="{{route('category.post.index', $post->category->id)}}"><p class="blog-post-category">{{$post->category->title}}</p></a>
                                        @auth()
                                            <form action="{{route('post.like.store', $post->id)}}" method="POST">
                                                @csrf
                                                @if($post->liked_users_count !== 0)
                                                    <span>{{$post->liked_users_count}}</span>
                                                @endif
                                                <button type="submit" class=" border-0 bg-transparent">
                                                    @if(auth()->user()->likedPosts->contains($post->id))
                                                        <i class="fas fa-heart"> </i>
                                                    @else
                                                        <i class="far fa-heart"> </i>
                                                    @endif
                                                </button>
                                            </form>
                                        @endauth
                                        @guest()
                                            <div>
                                                @if($post->liked_users_count !== 0)
                                                    <span>{{$post->liked_users_count}}</span>
                                                @endif
                                                <i class="far fa-heart"> </i>
                                            </div>
                                        @endguest
                                    </div>
                                    {{--                                    лайк контейнер конец--}}
                                    <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{$post->title}}
                                            </h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </section>
                </div>
                <div class="col-md-4 sidebar"  data-aos="fade-left">
{{--                    <div class="widget widget-post-carousel" style="background-color: #fff3ee" >--}}
{{--                        <h5 class="widget-title">Post Lists</h5>--}}
{{--                        <div class="post-carousel">--}}
{{--                            <div id="carouselId" class="carousel slide" data-ride="carousel">--}}
{{--                                <ol class="carousel-indicators">--}}
{{--                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>--}}
{{--                                    <li data-target="#carouselId" data-slide-to="1"></li>--}}
{{--                                    <li data-target="#carouselId" data-slide-to="2"></li>--}}
{{--                                </ol>--}}
{{--                                <div class="carousel-inner" role="listbox">--}}
{{--                                    <figure class="carousel-item active">--}}
{{--                                        <img src="assets/images/blog_widget_carousel.jpg" alt="First slide">--}}
{{--                                        <figcaption class="post-title">--}}
{{--                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                    <figure class="carousel-item">--}}
{{--                                        <img src="assets/images/blog_7.jpg" alt="First slide">--}}
{{--                                        <figcaption class="post-title">--}}
{{--                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                    <div class="carousel-item">--}}
{{--                                        <img src="assets/images/blog_5.jpg" alt="First slide">--}}
{{--                                        <figcaption class="post-title">--}}
{{--                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                        </figcaption>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="widget widget-post-list" style="background-color: #fff3ee">
                        <h5 class="widget-title">Популярные посты</h5>
                        <ul class="post-list">
                            @foreach($likedPosts as $post)
                            <li class="post">
                                <a href="{{route('post.show', $post->id)}}" class="post-permalink media">
                                    <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$post->title}}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5  class="widget-title"><a style="text-decoration:none; color: black" href="{{route('category.index')}}">Категории</a></h5>
                        <a href="{{route('category.index')}}" class="blog-post-permalink">
                        <img src="assets/images/blog_widget_categories.jpg" alt="categories" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
