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
        $articles = Article::where('type', $type)->orderBy('created_at', 'desc')->simplepaginate(10);
        if($articles->isEmpty()) {
            return redirect('/');
        }
        return view('articles.index', compact('articles', 'type'));
    }

    public function show($type, $slug) {

        $article = Article::where('slug', $slug)->firstOrFail();
        //dd($article);
        return view('articles.article', compact('article', 'type'));
    }

    public function latestIndex() {

        $jobs = Article::where('type', "Jobs")->orderBy('id', 'desc')->take(10)->get();
        $results = Article::where('type', "Results")->orderBy('id', 'desc')->take(10)->get();
        $admissions = Article::where('type', "Admissions")->orderBy('id', 'desc')->take(10)->get();
        $syllabus = Article::where('type', "Syllabus")->orderBy('id', 'desc')->take(10)->get();
        $answerKeys = Article::where('type',"Answer keys")->orderBy('id', 'desc')->take(10)->get();
        $admitCards = Article::where('type', "Admit Card")->orderBy('id', 'desc')->take(10)->get();
        $certificates = Article::where('type',"Certificates")->orderBy('id', 'desc')->take(10)->get();
        $importants = Article::where('type', "Important")->orderBy('id', 'desc')->take(10)->get();
        $downloads = Article::where('type', "Downloads")->orderBy('id','desc')->take(10)->get();
        $categories = Category::with('articles')->latest()->get();
        $hotlinks = Hotlink::orderBy('id', 'desc')->take(10)->get();
        return view('welcome', compact('jobs','results','admissions','syllabus','answerKeys','admitCards','certificates','importants', 'downloads', 'categories','hotlinks'));
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
