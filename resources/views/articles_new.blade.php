@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>新規投稿</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row'>
        <h1>
          新規投稿フォーム
        </h1>
      </div>
      <div class='row my-5'>
        {{ Form::open(['route' => 'article.confirm']) }}
          <div class='form-group'>
              {{ Form::label('article_name', 'Title:') }}
              {{ Form::text('article_name', null, ['size' => '140']) }}
            <br>
            @if($errors->has('article_name'))
              <span class='text-danger'>
                {{ $errors->first('article_name') }}
              </span>
            @endif
          </div>
          <div class='form-group'>
              {{ Form::label('content', 'Content:') }}
              {{ Form::textarea('content', null,['rows' => 30, 'cols' => 140]) }}
            <br>
            @if($errors->has('content'))
              <span class='text-danger'>
                {{ $errors->first('content') }}
              </span>
            @endif
          </div>
          <div class='form-group'>
              {{ Form::label('category_id', 'Category_id:') }}
              {{ Form::select('category_id', $categories) }}
          </div>
          <div class="form-group">
              <a href={{ route('articles') }} class='btn btn-outline-dark'>
                戻る
              </a>
              {{ Form::submit('投稿する', ['class' => 'btn btn-outline-dark']) }}
          </div>
        {{ Form::close() }}
      </div>
    </div>
@endsection
