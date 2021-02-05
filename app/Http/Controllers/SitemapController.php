<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class SitemapController extends Controller
{
    public function index()
    {
        $articleJobs = Article::where('type', "Jobs")->orderBy('updated_at', 'desc')->first();
        $articleResults = Article::where('type', "Results")->orderBy('updated_at', 'desc')->first();
        $articleAdmissions = Article::where('type', "Admissions")->orderBy('updated_at', 'desc')->first();
        $articleSyllabus = Article::where('type', "Syllabus")->orderBy('updated_at', 'desc')->first();
        $articleAnswerKeys = Article::where('type', "Answer keys")->orderBy('updated_at', 'desc')->first();

        $articleAdmitCard = Article::where('type', "Admit Card")->orderBy('updated_at', 'desc')->first();
        $articleCertificates = Article::where('type', "Certificates")->orderBy('updated_at', 'desc')->first();
        $articleImportant = Article::where('type', "Important")->orderBy('updated_at', 'desc')->first();
        $articleDownloads = Article::where('type', "Downloads")->orderBy('updated_at', 'desc')->first();

        return response()->view('sitemap.index', [
            'articleJobs' => $articleJobs,
            'articleResults' => $articleResults,
            'articleAdmissions' => $articleAdmissions,
            'articleSyllabus' => $articleSyllabus,
            'articleAnswerKeys' => $articleAnswerKeys,
            'articleAdmitCard' => $articleAdmitCard,
            'articleCertificates' => $articleCertificates,
            'articleImportant' => $articleImportant,
            'articleDownloads' => $articleDownloads
        ])->header('Content-Type', 'text/xml');
    }

    public function jobs()
    {   $jobs = Article::where('type', "Jobs")->orderBy('created_at', 'desc')->get();
        return response()->view('sitemap.jobs', [
            'jobs' => $jobs,
        ])->header('Content-Type', 'text/xml');
    }

    public function results()
    {   $results = Article::where('type', "Results")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.results', [
            'results' => $results,
        ])->header('Content-Type', 'text/xml');
    }

    public function admission()
    {   $admissions = Article::where('type', "Admissions")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.admission', [
            'admissions' => $admissions,
        ])->header('Content-Type', 'text/xml');
    }

    public function syllabus()
    {   $syllabus = Article::where('type', "Syllabus")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.syllabus', [
            'syllabus' => $syllabus,
        ])->header('Content-Type', 'text/xml');
    }

    public function answerKeys()
    {   $answerKeys = Article::where('type', "Answer keys")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.answerKeys', [
            'answerKeys' => $answerKeys,
        ])->header('Content-Type', 'text/xml');
    }

    public function admitCard()
    {   $admitCards = Article::where('type', "Admit Card")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.admitCard', [
            'admitCards' => $admitCards,
        ])->header('Content-Type', 'text/xml');
    }

    public function certificates()
    {   $certificates = Article::where('type', "Certificates")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.certificates', [
            'certificates' => $certificates,
        ])->header('Content-Type', 'text/xml');
    }

    public function importants()
    {   $importants = Article::where('type', "Important")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.importants', [
            'importants' => $importants,
        ])->header('Content-Type', 'text/xml');
    }

    public function downloads()
    {   $downloads = Article::where('type', "Downloads")->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.downloads', [
            'downloads' => $downloads,
        ])->header('Content-Type', 'text/xml');
    }
}
