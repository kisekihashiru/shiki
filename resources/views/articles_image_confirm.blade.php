@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>記事詳細</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row'>
        <h1>{{ $article->article_name }}</h1>
      </div>
      <div class='row'>
        <p>
          {!! nl2br(e($article->content)) !!}
        </p>
      </div>
      <div class='row'>
        <div class='col-xl-4'>
          <img class="img" src={{ $thum_1 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.1</p>
        </div>
        <div class='col-xl-4'>
          <img class="img" src={{ $thum_2 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.2</p>
        </div>
        <div class='col-xl-4'>
          <img class="img" src={{ $thum_3 }} alt="Thumbnail image">
          <p class='text-lg-center'>figure.3</p>
        </div>
      </div>
      <div class='row my-5'>
        <form method="POST" action="{{ route('article.image_insert') }}">
          {{ csrf_field() }}
          <input type="hidden" value={{ $article->id }} name="id">
          <input type="hidden" value={{ $thum_1 }} name="no1">
          <input type="hidden" value={{ $thum_2 }} name="no2">
          <input type="hidden" value={{ $thum_3 }} name="no3">
          <button type="submit" name="action" value="back" class="btn btn-outline-dark">
            一覧に戻る
          </button>
          <button type="submit" name="action" value="submit" class="btn btn-dark">
            投稿する
          </button>
        </form>
      </div>
    </div>
@endsection
