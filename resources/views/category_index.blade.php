@extends('layout')

@section('content')
    <div class="jumbotron {{ $category->category_name }}">
     <div class="container">
       <h1 class="text-light">
         {{ $category->category_name }}
       </h1>
       <p class="text-light">
         技術的な知識をシェアしよう
       </p>
     </div>
    </div>
    <div class='container'>
      <div class='row my-3'>
        @foreach ($articles as $article)
        <div class="col-md-4 my-3 text-center">
          <a href={{ route('article.show', ['id' => $article->id]) }}>
            @if (empty($article->img_path_1))
              <img src="/img/no_image.jpg" class="img img-thumbnail" alt="plan image">
            @else
              <img src={{ $article->img_path_1 }} class="img img-thumbnail" alt="plan image">
            @endif
          </a>
          <p></p>
          <a href={{ route('article.show', ['id' => $article->id]) }} class="text-dark">
            {{ $article->article_name }}
          </a>
        </div>
        @endforeach
      </div>
    </div>
    <div class="d-flex justify-content-center">
      {{ $articles->links() }}
    </div>
@endsection
