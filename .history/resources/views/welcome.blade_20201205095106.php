@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="d-flex flex-wrap">
        @foreach($hotlinks as $key => $hotlink)
    <div class="" style="background-color: #66{{$key}}666">
            <a href="{{$hotlink->url}}">{{$hotlink->title}}</a>
            </div>
        @endforeach
    </div>
     <nav class="navbar pt-5">
     @foreach($categories as $key => $category)
        <span class=" m-1 badge badge-pill badge-warning"><a href="{{route('articleCategory', $category->id)}}" class="text-dark m-1">{{$category->name}}</a></span>
     @endforeach
    </nav>
    @foreach($categories as $key => $category)
    <div class="row">
        @foreach($category->articles as $key => $article)
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse--{{$key}}" aria-expanded="true" aria-controls="collapse--{{$key}}">
                <h3>{{$category->name}}</h3>
              </button>
            </h2>
          </div>
          <div id="collapse--{{$key}}" class="collapse show" aria-labelledby="heading--{{$key}}" data-parent="#accordionExample">
            <div class="card-body">
            <h3><a href="{{route('articleShow', $article->slug)}}">{{ $article->title}}</a></h3>
            <p>Posted {{$article->created_at->diffForHumans()}} & Updated {{ $article->updated_at->diffForHumans()}}</p>
                <p>{{ $article->excerpt}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
    <div class="row py-5">
      <div class="col-sm">
          <h3 class=" p-1 text-center rounded text-white bg-dark">Latest Jobs</h3>
        @foreach($jobs as $key => $job)
            <a href="{{route('article',$job->type)}}">{{$job->title}}
            &nbsp;
            @if(\Carbon\Carbon::Now()->diffInDays($job->updated_at) < 7)
              <br/>
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
            {{$job->updated_at->diffForHumans()}}
            <br/>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Jobs')}}">View All
        </a>
      </div>
      <div class="col-sm">
          <h3 class="  p-1 text-center rounded text-white bg-dark">Results</h3>
        @foreach($results as $key => $result)
            <a href="{{route('article', $result->type)}}">{{$result->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($result->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
                {{$result->updated_at->diffForHumans()}}
            <br/>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
      </div>
      <div class="col-sm">
        <h3 class="  p-1 text-center rounded text-white bg-dark">Admissions</h3>
        @foreach($admissions as $key => $admission)
            <a href="{{route('article', $admission->type)}}">{{$admission->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($admission->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
                {{$admission->updated_at->diffForHumans()}}
                <br>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Syllabus</h3>
          @foreach($syllabus as $key => $syllabi)
            <a href="{{route('article', $syllabi->type)}}">{{$syllabi->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($syllabi->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
                {{$syllabi->updated_at->diffForHumans()}}
                <br>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Answer Keys</h3>
          @foreach($answerKeys as $key => $answers)
            <a href="{{route('article',$answers->type)}}">{{$answers->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($answers->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
        </a>
                {{$answers->updated_at->diffForHumans()}}
                <br>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Admit Card</h3>
          @foreach($admitCards as $key => $admit)
            <a href="{{route('article',$admit->type)}}">{{$admit->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($admit->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
        </a>
                {{$admit->updated_at->diffForHumans()}}
                <br>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
      </div>
      <div class="row mt-5">
          <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Certificates</h3>
            @foreach($certificates as $key => $certificate)
              <a href="{{route('article', $certificate->type)}}">{{$certificate->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($certificate->updated_at) < 7)
                <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
        </a>
                {{$certificate->updated_at->diffForHumans()}}
                <br>
            @endforeach
            <br/><br/><br/>
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          </div>
          <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Importants</h3>
            @foreach($importants as $key => $importants)
              <a href="{{route('article', $important->type)}}">{{$important->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($important->updated_at) < 7)
                <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
        </a>
                {{$important->updated_at->diffForHumans()}}
                <br>

            @endforeach
            <br/><br/><br/>
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          </div>
      </div>
  </div>
@endSection
