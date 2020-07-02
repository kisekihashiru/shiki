<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <script src='{{ asset("js/app.js") }}' defer></script>

        @yield('seo')
        <title>Lets Engineering ものづくりに必要な様々な知識をシェアし,業務に役立てよう</title>


        <style>
          body {
            padding-top: 50px;
          }
          .jumbotron {
            padding-top: 425px;
            padding-bottom: 425px;
            background:url(/entrance2.jpg) center no-repeat;
            background-size: cover;
           }
           .articles{
            background:url(/articles.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Planning{
            background:url(/planning2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Development{
            background:url(/development2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Design{
            background:url(/design2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Production{
            background:url(/production2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Quality{
            background:url(/quality2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Technology{
            background:url(/technology2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }
           .Challenge{
            background:url(/challenge2.jpg) center no-repeat;
            padding-top: 200px;
            padding-bottom: 200px;
           }

           .img{
            width: 375px;
            height: 375px;
            object-fit: contain;
            margin-bottom: 10px;
           }
           .topCategory{
             width: 100px;
             height: 100px;
             object-fit: contain;
             margin-bottom: 10px;
           }
           #wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
           }

          footer {
            margin-top: auto;
            padding-top: 20px;
            width: 100%;
            height: 200px;
            color: #ffffff;
            background-color: #222222;
          }
        </style>
    </head>
    <body>
      <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
          <a href={{ route('top') }} class='navbar-brand'>Lets Engineering</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href={{ route('top') }}>Top</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 1]) }}">Planning</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 2]) }}">Development</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 3]) }}">Design</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 4]) }}">Production</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 5]) }}">Quality</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 6]) }}">Technology</a>
                  <a class="dropdown-item" href="{{ route('category.index',['id' => 7]) }}">Challenge</a>

                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{ route('articles') }}>Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Groups</a>
              </li>
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ml-auto">
           <!-- Authentication Links -->
             @guest
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 @if (Route::has('register'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif
                 @else
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }} <span class="caret"></span>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </div>
                 </li>
             @endguest
            </ul>
          </div>
      </nav>
      <div id="wrapper">
            @yield('content')
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p>ABOUT US</p>
                <p>
                  技術シェアでエンジニアを応援します
                </p>
              </div>
              <div class="col-md-4">
                <a href={{ route('disclaim') }} class="text-light">
                  注意事項
                </a>
              </div>
              <div class="col-md-4">
                <p>お問合せ</p>
                <p>kiseki.hashiru@gmail.com</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </body>
</html>
