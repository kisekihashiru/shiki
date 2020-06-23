<?php
//ver1.0

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ValiRequest;
use App\Http\Requests\ImageValiRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show', 'top', 'disclaim']); //コントローラメソッドを指定する
    }


    public function top()
    {
      return view('top');
    }

    public function disclaim()
    {
      return view('disclaim');
    }

    public function index(Request $request)
    {
      $keyword = $request->input('keyword');
      $query = Article::query();

      if(!empty($keyword))
      {
        $query->where('article_name','like','%'.$keyword.'%')
        ->orWhere('content','like','%'.$keyword.'%');
      }

      $articles = $query->orderBy('updated_at', 'desc')->paginate(10);
      return view('articles_index', ['articles' => $articles, 'keyword' => $keyword]);
    }


    public function create()
    {
      $categories = Category::all()->pluck('category_name', 'id');
      return view('articles_new',['categories' => $categories]);
    }


    public function confirm(ValiRequest $request)
    {
      $article = $request->all();
      $category = Category::where('id', $request->category_id)->pluck('category_name', 'id');
      return view('articles_confirm', ['category' => $category])->with($article);
    }


    public function store(Request $request, Article $article)
    {
      $request->session()->regenerateToken();
      $action = $request->get('action', 'back');
      $input = $request->except('action');

      if($action === 'back')
      {
        return redirect()->route('article.new');
      }

      $no_img = 'no_image.jpg';
      $article = new Article;
      $user = \Auth::user();

      $article->article_name = $request->input('article_name');
      $article->content = $request->input('content');
      $article->category_id = $request->input('category_id');
      $article->user_id = $user->id;
      $article->img_path_1 = "/img/" . $no_img;
      $article->img_path_2 = "/img/" . $no_img;
      $article->img_path_3 = "/img/" . $no_img;
      $article->save();

      return view('articles_complete');
    }


    public function complete()
    {
      return view('articles_complete');
    }


    public function show($id, Article $article)
    {
      $article = Article::find($id);
      $user = \Auth::user();

      if($user){
        $login_user_id = $user->id;
      } else {
        $login_user_id = "";
      }

      return view('articles_show', ['article' => $article, 'login_user_id' => $login_user_id]);
    }


    public function image_confirm(ImageValiRequest $request, Article $article)
    {
      $article = Article::find($request->input('id'));
      $no_img = 'no_image.jpg';

      if (null != $request->file('photo_1')) {
        $thum_name_1 = uniqid("THUM_") . "." . $request->file('photo_1')->guessExtension();
        $request->file('photo_1')->move(public_path()."/img/tmp", $thum_name_1);
        $thum_1 = "/img/tmp/".$thum_name_1;
      } elseif (null != $article->img_path_1) {
        $thum_1 = $article->img_path_1;
      } else {
        $thum_1 = "/img/".$no_img;
      }

      if (null != $request->file('photo_2')) {
        $thum_name_2 = uniqid("THUM_") . "." . $request->file('photo_2')->guessExtension();
        $request->file('photo_2')->move(public_path()."/img/tmp", $thum_name_2);
        $thum_2 = "/img/tmp/".$thum_name_2;
      } elseif (null != $article->img_path_2) {
        $thum_2 = $article->img_path_2;
      } else {
        $thum_2 = "/img/".$no_img;
      }

      if (null != $request->file('photo_3')) {
        $thum_name_3 = uniqid("THUM_") . "." . $request->file('photo_3')->guessExtension();
        $request->file('photo_3')->move(public_path()."/img/tmp", $thum_name_3);
        $thum_3 = "/img/tmp/".$thum_name_3;
      } elseif (null != $article->img_path_3) {
        $thum_3 = $article->img_path_3;
      } else {
        $thum_3 = "/img/".$no_img;
      }

      $hash = array(
        'thum_1' => $thum_1,
        'thum_2' => $thum_2,
        'thum_3' => $thum_3
      );

      return view('articles_image_confirm', ['article' => $article])->with($hash);
    }


    public function image_insert(ImageValiRequest $request, Article $article)
    {
      $no_img = 'no_image.jpg';
      $id = $request->input('id');
      $action = $request->get('action', 'back');

      if($action === 'back')
      {
        return redirect()->route('articles');
      }

      $article = Article::find($id);

      if (!file_exists(public_path() . "/img/" . $id))
      {
        mkdir(public_path() . "/img/" . $id, 0777);
      }

      if ($request->input("no1") != "/img/".$no_img) {
        $article->img_path_1 = "/img/" . $id . "/" . uniqid("PIC_") . "." . pathinfo($request->input("no1"), PATHINFO_EXTENSION);
        rename (public_path() . $request->input("no1"), public_path() . $article->img_path_1);
      }

      if ($request->input("no2") != "/img/".$no_img) {
        $article->img_path_2 = "/img/" . $id . "/" . uniqid("PIC_") . "." . pathinfo($request->input("no2"), PATHINFO_EXTENSION);
        rename (public_path() . $request->input("no2"), public_path() . $article->img_path_2);
      }

      if ($request->input("no3") != "/img/".$no_img) {
        $article->img_path_3 = "/img/" . $id . "/" . uniqid("PIC_") . "." . pathinfo($request->input("no3"), PATHINFO_EXTENSION);
        rename (public_path() . $request->input("no3"), public_path() . $article->img_path_3);
      }

      $article->save();
      return view('articles_complete');
    }


    public function edit(Article $article, $id, Request $request)
    {
      $message = 'Edit the article' . $id;
      $article = Article::find($id);
      $categories = Category::all()->pluck('category_name', 'id');

      return view('articles_edit', ['message' => $message, 'article' => $article, 'categories' => $categories]);
    }


    public function update(ValiRequest $request, $id, Article $article)
    {
      $article = Article::find($id);
      $article->article_name = $request->article_name;
      $article->content = $request->content;
      $article->category_id = $request->category_id; 
      $article->save();

      return redirect()->route('article.show', ['id' => $article->id]);
    }


    public function destroy(Request $request, $id, Article $article)
    {
      $article = Article::find($id);
      $article->delete();

      return redirect('/articles');
    }
}
