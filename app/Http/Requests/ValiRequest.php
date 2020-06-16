<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      $not_regex = 'not_regex:
        /(青姦)|(淫売)|(うんこ)|(穢多)|(姦通)|(黒んぼ)|(クンニ)|(毛唐)|
        (強姦)|(和姦)|(処女)|(すけこまし)|(傴僂)|(パン助)|(まんこ)|
        (マンコ)|(クリトリス)|(ガイジ)|(キチガイ)|(殺す)|(死ね)|
        (あなる)|(レズ)|(おっぱい)|(巨乳)|(セフレ)|(ヤリマン)|(ロリコン)|(ゲイ)|
        (ふたなり)|(パイパン)|(陰茎)|(ザーメン)|(正常位)|(騎乗位)|(シックスナイン)|
        (手淫)|(手マン)|(オナニー)|(フェラ)|(足コキ)|(パイズリ)|(セックス)|(マン毛)|
        (ハメ撮り)|(イラマチオ)|(スカトロ)|(ファック)|(マザコン)|(ペド)|
        (ショタ)|(レイプ)|(獣姦)|(イメクラ)|(ラブホ)|(デリヘル)|
        (オナホ)|(ダッチワイフ)|(ペニス)|(愛液)|(ソープランド)|(出会い系)|
        /';

        return [
            'article_name' => [
              'required',
              'max:40',
              $not_regex,
            ],
            'content' => [
              'required',
              'max:6000',
              $not_regex,
            ],
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
      return [
        'required' => '必須項目です',
        'max:40' => '40文字以内で入力ください',
        'max:6000' => '6,000文字以内で入力ください',
        'not_regex' => '不適切なワードが含まれていますので修正してください'
      ];
    }

}
