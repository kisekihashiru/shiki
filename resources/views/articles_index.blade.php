@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>記事一覧</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row'>
        <div class="col-sm-4" style="padding:20px ; padding-left:0px;">
          <form class="form-inline" action={{route('articles')}}>
            <div class="form-group mx-2">
            <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="タイトル検索">
            </div>
            <input type="submit" value="検索" class="btn btn-info">
          </form>
        </div>
      </div>

      <div class='row'>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Category</th>
              <th>Contributor</th>
              <th>Last updated</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $article)
            <tr>
              <th scope="row">{{ $article->id }}</th>
              <td>
                <a href={{ route('article.show', ['id' => $article->id]) }} class="text-dark">
                  {{ $article->article_name }}
                </a>
              </td>
              <td>
                {{ $article->category->category_name }}
              </td>
              <td>
                {{ $article->user->name }}
              </td>
              <td>
                {{ $article->updated_at }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class='row my-5'>
        @auth
        <a href={{ route('article.new') }} class='btn btn-outline-dark'>
          新規投稿
        </a>
        @endauth
      </div>
    </div>
    <div class="d-flex justify-content-center">
      {{ $articles->links() }}
    </div>
@endsection
