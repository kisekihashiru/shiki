@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>記事詳細</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row my-3'>
        <h1 class='text-secondary'>{{ $article->article_name }}</h1>
      </div>
      <div class='row my-5'>
        <div class='col-lg-12 text-break'>
          <p>
            {!! nl2br(e($article->content)) !!}
          </p>
        </div>
      </div>
      <div class='row my-3'>
        <div class='col-lg-4'>
          <img class="img img-thumbnail" src={{ $article->img_path_1 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.1</p>
        </div>
        <div class='col-lg-4'>
          <img class="img img-thumbnail" src={{ $article->img_path_2 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.2</p>
        </div>
        <div class='col-lg-4'>
          <img class="img img-thumbnail" src={{ $article->img_path_3 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.3</p>
        </div>
      </div>
      <div class='row mx-1'>
        @auth
          @if ($article->user_id == $login_user_id)
            <form method="POST" action="{{ route('article.image_confirm') }}" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <input type="hidden" value={{ $article->id }} name="id">
              <p>記事に画像を追加する場合はコチラから ↓ ↓ ↓</p>
              figure.1：<input type="file" name="photo_1">
              <p></p>
              figure.2：<input type="file" name="photo_2">
              <p></p>
              figure.3：<input type="file" name="photo_3">
              <p></p>
              <input type="submit" name="action" value="画像入替" class="btn btn-outline-dark">
            </form>
          @endif
        @endauth
      </div>
      <div class='row my-5 mx-1'>
        <div>
          <a href={{ route('articles') }} class='btn btn-outline-dark'>
            一覧に戻る
          </a>
        </div>
        @auth
          @if ($article->user_id == $login_user_id)
            <div class='mx-1'>
              <a href={{ route('article.edit', ["id" => $article->id]) }} class='btn btn-outline-dark'>
                記事の編集
              </a>
            </div>
            <div class='mx-2'>
               {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
               {{ Form::submit('削除', ['class' => 'btn btn-dark']) }}
               {{ Form::close() }}
            </div>
          @endif
        @endauth
      </div>
    </div>
@endsection
