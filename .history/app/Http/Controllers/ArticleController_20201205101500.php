<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Hotlink;

class ArticleController extends Controller
{
    //
    public function index($type)
    {
      $articles = Article::where('type', $type)->get();
      if($articles->isEmpty()) {
          return redirect('/');
      }
      return view('articles.index', compact('articles', 'type'));
    }

    public function show($slug) {
        $article = Article::where('slug', $slug)->firstOrFail();
        // $article = Article::find($id);
        //dd($article);
        return view('articles.article', compact('article'));
    }

    public function latestIndex() {

        $jobs = Article::where('type', "Jobs")->orderBy('id', 'desc')->take(3)->get();
        $results = Article::where('type', "Results")->orderBy('id', 'desc')->take(3)->get();
        $admissions = Article::where('type', "Admissions")->orderBy('id', 'desc')->take(3)->get();
        $syllabus = Article::where('type', "Syllabus")->orderBy('id', 'desc')->take(3)->get();
        $answerKeys = Article::where('type',"Answer keys")->orderBy('id', 'desc')->take(3)->get();
        $admitCards = Article::where('type', "Admit Card")->orderBy('id', 'desc')->take(3)->get();
        $certificates = Article::where('type',"Certificates")->orderBy('id', 'desc')->take(3)->get();
        $importants = Article::where('type', "Important")->orderBy('id', 'desc')->take(3)->get();
        $categories = Category::with('articles')->latest()->get();
        $hotlinks = Hotlink::latest(10);
        return view('welcome', compact('jobs','results','admissions','syllabus','answerKeys','admitCards','certificates','importants', 'categories', 'hotlinks'));
    }

    public function indexCategory($id) {
        $articles = Article::where('category_id', $id)->get();
        $category = Category::findOrFail($id);
        if($articles->isEmpty()) {
            return redirect('/');
        }
        return view('articles.categoryindex', compact('articles', 'category'));
    }
}
