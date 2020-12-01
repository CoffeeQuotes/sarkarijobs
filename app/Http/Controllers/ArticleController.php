<?php

namespace App\Http\Controllers;

use App\Article;
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

    public function show($id) {
        $article = Article::find($id);
        //dd($article);
        return view('articles.article', compact('article'));
    }

    public function latestIndex() {

        $jobs = Article::where('type', "Jobs")->limit(10)->get();
        $results = Article::where('type', "Results")->limit(10)->get();
        $admissions = Article::where('type', "Admissions")->limit(10)->get();
        $syllabus = Article::where('type', "Syllabus")->limit(10)->get();
        $answerKeys = Article::where('type',"Answer keys")->limit(10)->get();
        $admitCards = Article::where('type', "Admit Card")->limit(10)->get();
        $certificates = Article::where('type',"Certificates")->limit(10)->get();
        $importants = Article::where('type', "Important")->limit(10)->get();

        return view('welcome', compact('jobs','results','admissions','syllabus','answerKeys','admitCards','certificates','importants'));
    }

}
