@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>記事詳細</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <h1>投稿完了</h1>
      <div>
        <p>
          記事の投稿が完了しました！
        </p>
        <a href={{ route('articles') }} class='btn btn-outline-dark'>
          一覧に戻る
        </a>
      </div>
    </div>
@endsection
