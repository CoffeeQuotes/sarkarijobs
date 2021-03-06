@extends('layouts.app')

@section('content')

<div class="container pt-5">

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
            <h3><a href="{{route('articleshow', $article->id)}}">{{ $article->title}}</a></h3>
            <p>Posted {{$article->created_at->diffForHumans()}} & Updated {{ $article->updated_at->diffForHumans()}}</p>
                <p>{{ $article->excerpt}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
    <div class="row">
      <div class="col-sm">
          <h3 class="bg-secondary p-1 text-center rounded text-dark">Latest Jobs</h3>
        @foreach($jobs as $key => $job)
            <a href="{{route('article',$job->type)}}">{{$job->title}}
            &nbsp;
            @if(\Carbon\Carbon::Now()->diffInDays($job->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            <span style="letter-spacing: 2px;" class="badge badge-info">{{$job->updated_at->diffForHumans()}}</span></a>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Jobs')}}">View All
        </a>
      </div>
      <div class="col-sm">
          <h3 class="bg-secondary  p-1 text-center rounded text-dark">Results</h3>
        @foreach($results as $key => $result)
            <a href="{{route('article', $result->type)}}">{{$result->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($result->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$result->updated_at->diffForHumans()}}</span></a>
            </a>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
      </div>
      <div class="col-sm">
        <h3 class="bg-secondary  p-1 text-center rounded text-dark">Admissions</h3>
        @foreach($admissions as $key => $admission)
            <a href="{{route('article', $admission->type)}}">{{$admission->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($admission->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$admission->updated_at->diffForHumans()}}</span></a>
            </a>
        @endforeach
        <br/><br/><br/>
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm">
            <h3 class="bg-secondary  p-1 text-center rounded text-dark">Syllabus</h3>
          @foreach($syllabus as $key => $syllabi)
            <a href="{{route('article', $syllabi->type)}}">{{$syllabi->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($syllabi->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$syllabi->updated_at->diffForHumans()}}</span></a>
            </a>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
        <div class="col-sm">
            <h3 class="bg-secondary  p-1 text-center rounded text-dark">Answer Keys</h3>
          @foreach($answerKeys as $key => $answers)
            <a href="{{route('article',$answers->type)}}">{{$answers->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($answers->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$answers->updated_at->diffForHumans()}}</span></a>
            </a>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
        <div class="col-sm">
            <h3 class="bg-secondary  p-1 text-center rounded text-dark">Admit Card</h3>
          @foreach($admitCards as $key => $admit)
            <a href="{{route('article',$admit->type)}}">{{$admit->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($admit->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$admit->updated_at->diffForHumans()}}</span></a>
            </a>
          @endforeach
          <br/><br/><br/>
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        </div>
      </div>
      <div class="row mt-5">
          <div class="col-sm">
            <h3 class="bg-secondary  p-1 text-center rounded text-dark">Certificates</h3>
            @foreach($certificates as $key => $certificate)
              <a href="{{route('article', $certificate->type)}}">{{$certificate->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($certificate->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$certificate->updated_at->diffForHumans()}}</span></a>
              </a>
            @endforeach
            <br/><br/><br/>
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          </div>
          <div class="col-sm">
            <h3 class="bg-secondary  p-1 text-center rounded text-dark">Importants</h3>
            @foreach($importants as $key => $importants)
              <a href="{{route('article', $important->type)}}">{{$important->title}}
                &nbsp;
                @if(\Carbon\Carbon::Now()->diffInDays($important->updated_at) < 7)
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
                <span style="letter-spacing: 2px;" class="badge badge-info">{{$important->updated_at->diffForHumans()}}</span></a>
              </a>
            @endforeach
            <br/><br/><br/>
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          </div>
      </div>
  </div>
@endSection
