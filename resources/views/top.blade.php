@extends('layout')

@section('seo')
<meta name="keywords" content="エンジニア,生産技術,製造,機械,">
<meta name="description" content="ものづくりに必要な知識をシェアし,業務に役立てよう.初歩的な知識から専門的な知識まで皆で共有して業務をスムーズに.上司は忙しくてなかなか教えてくれない様々な現場知識,専門性のある知識をここで見つけよう.">
@endsection

@section('content')
    <div class="jumbotron">
     <div class="container">
       <h1 class="text-light">Lets Engineering</h1>
       <p class="text-light">
         ものづくりに必要な様々な知識をシェアしよう<br>
         初歩的な知識から専門的な知識.共有してスムーズに.<br>
         忙しくて上司はなかなか教えてくれない様々な現場知識や専門性のある知識をここで見つけよう.
       </p>
     </div>
    </div>

    <div class='container'>
      <div class="py-5">
        <h2 class="text-center text-black-50">OUR SERVICES</h2>
      </div>
      <div class="py-1">
        <p class="text-center">
          ものづくりの知識をシェアし, 役立ててもらうこと.
        </p>
        <p class="text-center">
          機械系, 電気系, 高校生, 大学生, 若手エンジニア, 現場スタッフ, 生産技術者, 設計スタッフ, 製造スタッフ等々.
        </p>
        <p class="text-center">
          ぜひ利用して活用してください.
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
            企画, 計画に関係します.<br>
            生産計画やコスト計算などもこちら.
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
            開発に関係します.<br>
            製品や工程開発に必要な知識はこちら.
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
            設計, 製図に関係します.<br>
            部品設計に必要な知識はこちら.
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
            製造に関係します.<br>
            現場の知識や製造技術に必要な知識はこちら.
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
            品質に関係します.<br>
            品質に関する知識もこちら.
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
            技術に関係します.<br>
            専門的な最先端の技術はこちら.
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
            挑戦に関係します.<br>
            新しいことにチャレンジ.
          </p>
        </div>
      </div>
    </div>
@endsection
