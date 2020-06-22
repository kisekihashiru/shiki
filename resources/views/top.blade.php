@extends('layout')

@section('content')
    <div class="jumbotron">
     <div class="container">
       <h1 class="text-light">Lets Engineering</h1>
       <p class="text-light">
         持っている知識をシェアし, エンジニアリングに役立てる.
       </p>
     </div>
    </div>

    <div class='container'>
      <div class="py-5">
        <h2 class="text-center text-black-50">OUR SERVICES</h2>
      </div>
      <div class="py-1">
        <p class="text-center">
          持っている知識をシェアし, エンジニアリングに役立ててもらうことです.
        </p>
        <p class="text-center">
          機械系, 電気系, 高校生, 大学生, 若手エンジニア, 現場スタッフ, 生産技術者, 設計スタッフ, 製造スタッフ等々.
        </p>
        <p class="text-center">
          ぜひ活用してください.
        </p>
      </div>
    </div>

    <div class='container'>
      <div class="row py-1">
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 1]) }}">
            <img src="/plan_s.png" class="topCategory d-block mx-auto" alt="plan image">
          </a>
          <p class="text-center">
            Planning
          </p>
          <p class="text-center">
            企画, 計画に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 2]) }}">
            <img src="/development_s.png" class="topCategory d-block mx-auto" alt="development image">
          </a>
          <p class="text-center">
            Development
          </p>
          <p class="text-center">
            開発に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 3]) }}">
            <img src="/design_s.png" class="topCategory d-block mx-auto" alt="design image">
          </a>
          <p class="text-center">
            Design
          </p>
          <p class="text-center">
            設計, 製図に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 4]) }}">
            <img src="/production_s.png" class="topCategory d-block mx-auto" alt="production image">
          </a>
          <p class="text-center">
            Production
          </p>
          <p class="text-center">
            製造に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 5]) }}">
            <img src="/quality_s.png" class="topCategory d-block mx-auto" alt="quolity image">
          </a>
          <p class="text-center">
            Quality
          </p>
          <p class="text-center">
            品質に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 6]) }}">
            <img src="technology_s.png" class="topCategory d-block mx-auto" alt="technology image">
          </a>
          <p class="text-center">
            Technology
          </p>
          <p class="text-center">
            技術に関係します.
          </p>
        </div>
        <div class="col-md-3">
          <a href="{{ route('category.index',['id' => 7]) }}">
            <img src="/challenge_s.png" class="topCategory d-block mx-auto" alt="challenge image">
          </a>
          <p class="text-center">
            Challenge
          </p>
          <p class="text-center">
            挑戦に関係します.
          </p>
        </div>
      </div>
    </div>
@endsection
