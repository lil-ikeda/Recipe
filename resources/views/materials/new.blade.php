@extends('layouts.app')
@section('content')
<div class="panel-body">

@include('common.errors')

<div class="d-flex flex-column align-items-center mt-3">
  <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
    <div class="card">
      <div class="card-header">
        投稿画面
      </div>
      <div class="card-body">
        
        <form class="upload-images p-0 border-0" id="new_post" enctype="multipart/form-data" action="{{ url('materials')}}" accept-charset="UTF-8" method="POST">
          {{csrf_field()}} 
            
          <div class="col pl-0">
            <input class="form-control border" placeholder="post_id" type="text" name="post_id" value="{{ old('list_name') }}"/>
          </div>
          <div class="col pl-0">
            <input class="form-control border" placeholder="材料" type="text" name="name" value="{{ old('list_name') }}"/>
          </div>
          <div class="col pl-0">
            <input class="form-control border" placeholder="量" type="text" name="amount" value="{{ old('list_name') }}"/>
          </div>
          <input type="submit" name="commit" value="投稿する" class="btn btn-primary" data-disable-with="投稿する" />
          </form>
                
      </div>
    </div>
  </div>
</div>
@endsection