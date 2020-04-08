@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<p class="search-title">検索結果　{{ count($posts) }}件</p>

@if($posts->count())
@foreach ($posts as $post)
    <div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
        <div class="card">
        <div class="card-header align-items-center d-flex">
            <a class="black-color no-text-decoration" title="{{ $post->user->name }}" href="/posts/{{ $post->id }}">
            <strong>{{ $post->name }}</strong>
            </a>
            @if ($post->user->id == Auth::user()->id)
            <a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
                <div class="delete-post-icon">
                </div>
            </a>
            @endif
        </div>
        <a href="/posts/{{ $post->id }}">
            <img src="/storage/post_images/{{ $post->id }}.jpg" class="card-img-top" />
        </a>
        </div>
    </div>
    </div>
    @endforeach
@else
<p class="no-result">一致するレシピはありません</p>
@endif
@endsection