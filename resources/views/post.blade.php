@extends('layouts.main')
@section('container')
{{-- <article> --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{!! $post->title !!}</h1>
                <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{  $post->author->name  }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{  $post->category->name  }}</a>
                </p>

                @if($post->image)
                    <img style="max-height: 350px; overflow:hidden" src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name }}" class="img-fluid">                    
                @else
                    <img src="https://source.unsplash.com/1200x400?{{$post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">                    
                @endif

                <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
                </article>


                <a href="/posts" class="d-block">Back to Post</a>            
            </div>
        </div>
    </div>

    {{-- <h2>{!! $post->title !!}</h2>
    <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{  $post->author->name  }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{  $post->category->name  }}</a></p>
    <p>{!! $post->body !!}</p>
    <a href="/posts" class="d-block">Back to Post</a> --}}
{{-- </article> --}}

@endsection