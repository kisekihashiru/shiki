<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;


use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index() {
      $articles = Article::all()->first();
      $categories = Category::all()->first();
      return response()->view('sitemap.index',[
        'article' => $articles,
        'category' => $categories,
      ])->header('Content-Type', 'text/xml');
    }

    public function articles() {
      $article = Article::latest()->get();
      return response()-> view('sitemap.article',[
        'article' => $article,
      ])->header('Content-Type', 'text/xml');
    }

    public function categories() {
      $category = Category::latest()->get();
      return response()-> view('sitemap.category',[
        'category' => $category,
      ])->header('Content-Type', 'text/xml');
    }


}
