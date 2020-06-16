@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>投稿</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row'>
        <h1>
          投稿編集フォーム
        </h1>
      </div>
      <!-- <p>
        {{ $message }}
      </p> -->
      <div class='row my-5'>
        {{ Form::model($article, ['route' => ['article.update', $article->id]]) }}
            <div class='form-group'>
                {{ Form::label('article_name', 'Title:') }}
                {{ Form::text('article_name', null, ['size' => '140']) }}
            </div>
            <div class='form-group'>
                {{ Form::label('content', 'Content:') }}
                {{ Form::textarea('content', null,['rows' => 30, 'cols' => 140]) }}
            </div>
            <div class='form-group'>
                {{ Form::label('category_id', 'カテゴリー：') }}
                {{ Form::select('category_id', $categories) }}
            </div>
            <div class="form-group">
                <a href={{ route('article.show', ["id" => $article->id]) }} class='btn btn-outline-dark'>
                  戻る
                </a>
                {{ Form::submit('保存する', ['class' => 'btn btn-outline-dark']) }}
            </div>
        {{ Form::close() }}
      </div>
    </div>
@endsection
