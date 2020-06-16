@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>記事詳細</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <form method="POST" action="{{ route('article.store') }}">
        <div class='row my-5'>
          @csrf
          <h1>{{ $article_name }}</h1>
          <input
            name="article_name"
            value="{{ $article_name }}"
            type="hidden">
        </div>
        <div class='row my-5'>
            {!! nl2br(e($content)) !!}
          <input
            name="content"
            value="{{ $content }}"
            type="hidden">
        </div>
        <div class='row my-2'>
            カテゴリ：
            {{ $category[$category_id] }}
            <input
              name="category_id"
              value="{{ $category_id }}"
              type="hidden">
        </div>
        <div class='row my-3'>
          <button type="submit" name="action" value="back" class="btn btn-outline-dark">
            書き直す
          </button>
          <button type="submit" name="action" value="submit" class="btn btn-dark">
            投稿する
          </button>
        </div>
      </form>
    </div>
@endsection
