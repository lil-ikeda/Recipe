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
        
        <form class="upload-images p-0 border-0" id="new_post" enctype="multipart/form-data" action="{{ url('posts')}}" accept-charset="UTF-8" method="POST">
          {{csrf_field()}} 
            
          <div class="col pl-0">
            <input class="form-control border" placeholder="料理名" type="text" name="name" value="{{ old('list_name') }}"/>
          </div>
          <div class="mb-3">
            <input type="file" name="photo" accept="image/jpeg,image/gif,image/png" />
          </div>
            <div class="col pl-0">
              <!-- <input class="form-control border" placeholder="レシピを書く" type="text" name="caption" value="{{ old('list_name') }}"/> -->
              <textarea name="caption" class="form-control border" cols="30" rows="10" placeholder="レシピをここに書く"></textarea>
            </div>
            <input type="submit" name="commit" value="投稿する" class="btn btn-primary" data-disable-with="投稿する" />
          </form>

          <!-- <form action="{{ url('material')}}">
            <input class="form-control border-0" placeholder="材料" type="text" name="material" value="{{ old('list_name') }}"/>
            <input class="form-control border-0" placeholder="分量" type="text" name="amount" value="{{ old('list_name') }}"/>
            <input type="submit" name="commit" value="投稿する" class="btn btn-primary" data-disable-with="投稿する" />
          </form> -->
                
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#post_image').bind('change', function() {
    var size_in_megabytes = this.files[0].size/1024/1024;
    if (size_in_megabytes > 1) {
      alert('ファイルサイズの最大は1MBまでです。違う画像を選んでください。');
    }
  });
</script>
@endsection