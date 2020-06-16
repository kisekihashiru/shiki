@extends('layout')

@section('content')
    <div class="jumbotron articles">
     <div class="container">
       <h1>注意事項など</h1>
       技術的な知識をシェアしよう
     </div>
    </div>
    <div class='container'>
      <div class='row my-3'>
        <div>
          <h1>注意事項や免責事項など</h1>
        </div>
      </div>

      <div class='row my-3'>
        <h2 class="text-warning">注意事項</h2>
      </div>
      <div class='row my-3 alert alert-warning' role="alert">
        <p>
          以下のような内容を含む記事は当サイトの管理の裁量によって承認せず、
          削除することがございます。
        </p>
        <ul class="list-group">
          <li class="list-group-item">
            特定の個人または法人を誹謗し、中傷するもの
          </li>
          <li class="list-group-item">
            極度にわいせつな内容を含むもの
          </li>
          <li class="list-group-item">
            法律によって禁止されている物品、行為の依頼やあっせんなどに関するもの
          </li>
          <li class="list-group-item">
            その他、公序良俗に反し、または管理によって承認すべきでないと認められるもの
          </li>
        </ul>
      </div>

      <div class='row my-3'>
        <h2 class="text-warning">免責事項</h2>
      </div>
      <div class='row my-3 alert alert-warning' role="alert">
        <p>
          当サイトにコンテンツを掲載するにあたって、その内容、機能等について
          細心の注意を払っておりますが、コンテンツの内容が正確であるかどうか、
          最新のものであるかどうか、安全なものであるか等について保証をするものではなく、
          何らの責任を負うものではありません。
        </p>
        <p>
          また、当社は通知することなく
          当サイトに掲載した情報の訂正、修正、追加、中断、削除等をいつでも行うことが
          できるものとします。当サイト、またはコンテンツのご利用により、万一、
          ご利用者様に何らかの不都合や損害が発生したとしても、
          当社は何らの責任を負うものではありません。
        </p>
      </div>

      <div class='row my-3'>
        <h2 class="text-info">サイトへのリンクについて</h2>
      </div>
      <div class='row my-3 alert alert-info' role="alert">
        <p>
          当サイトはリンクフリーです。但し、公序良俗に反したサイトからのリンクはお断り致します。
        </p>
        <p>
          当サイトから第三者のサイトにリンクを張っている場合や、
          第三者のサイトから当サイトにリンクを張っている場合、いずれの場合に於いても、
          第三者のサイトの内容は、第三者の責任で管理・運営されているものであり、
          それらを利用されたことによって生ずる如何なる不都合や損害についても、
          当方は責任を負いかねます。
        </p>
      </div>

      <div class='row my-3'>
        <div>
          <a href={{ route('top') }} class='btn btn-outline-dark my-5'>
            トップに戻る
          </a>
        </div>
      </div>
    </div>
@endsection
