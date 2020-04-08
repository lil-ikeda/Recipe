@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<form action="{{ route('search') }}" method="post">
    @csrf
    <div class="search_split">
      <div class='row search-row'>
        <input class="search-form" placeholder="レシピ名で検索 ..." name="s_name" />
      </div>
      <div style="text-align: center;">
          <button class='btn-default'>検索</button>
      </div>
    </div>
</form>

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

@endsection