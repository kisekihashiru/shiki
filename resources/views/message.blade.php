@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>メール送信</h1>
       メールを送信しよう
     </div>
    </div>
    <div class='container'>
      <div class='row'>
        <h1>
          メール送信フォーム
        </h1>
      </div>
      <div class='row'>
        @if (Session::has('success'))
        <div id="sample">
            <p>{{ Session::get('success') }}</p>
        </div>
        @endif

        <form action="{{ url('message') }}" method="POST">
            @csrf

            <p>名前：<input type="text" name="name" value="{{old('name')}}"></p>
            <p>メールアドレス：<input type="text" name="email" value="{{old('email')}}"></p>
            <p>メッセージ：
                <textarea name="message">{{ old('message') }}</textarea></p>
            <input type="submit" value="送信する">
        </form>
      </div>
    </div>
@endsection
