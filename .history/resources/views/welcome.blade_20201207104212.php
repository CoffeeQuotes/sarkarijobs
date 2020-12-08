@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="d-flex flex-wrap">
        @foreach($hotlinks as $key => $hotlink)
    <div class="p-2 m-1 bg-primary">
            <a class="text-white font-weight-bolder" data-toggle="tooltip" data-placement="bottom" title="{{$hotlink->title}}" href="{{$hotlink->url}}"><span class="blinking">{{\Illuminate\Support\Str::limit($hotlink->title, 30, $end='...')}}</span></a>
            </div>
        @endforeach
    </div>
     <nav class="navbar pt-5">
     @foreach($categories as $key => $category)
        <span class=" m-1 badge badge-pill badge-warning"><a href="{{route('articleCategory', $category->id)}}" class="text-dark m-1">{{$category->name}}</a></span>
     @endforeach
    </nav>
    {{-- @foreach($categories as $key => $category)
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
    @endforeach --}}
    <div class="row py-5">
      <div class="col-sm">
          <h3 class=" p-1 text-center rounded text-white bg-dark">Latest Jobs</h3>

        @foreach($jobs as $key => $job)
            <a href="{{route('articleShow',$job->slug)}}">{{$job->title}}
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
        @if($jobs->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Jobs')}}">View All </a>
        @else<s
        vg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
        @endif

      </div>
      <div class="col-sm">
          <h3 class="  p-1 text-center rounded text-white bg-dark">Results</h3>
        @foreach($results as $key => $result)
            <a href="{{route('articleShow', $result->slug)}}">{{$result->title}}
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
         @if($results->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        @else<s
        vg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

        @endif
      </div>
      <div class="col-sm">
        <h3 class="  p-1 text-center rounded text-white bg-dark">Admissions</h3>
        @foreach($admissions as $key => $admission)
            <a href="{{route('articleShow', $admission->slug)}}">{{$admission->title}}
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
         @if($admissions->isNotEmpty())
            <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>

        @else
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
        @endif
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Syllabus</h3>
          @foreach($syllabus as $key => $syllabi)
            <a href="{{route('articleShow', $syllabi->slug)}}">{{$syllabi->title}}
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
           @if($syllabus->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
          @else
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

          @endif
        </div>
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Answer Keys</h3>
          @foreach($answerKeys as $key => $answers)
            <a href="{{route('articleShow',$answers->slug)}}">{{$answers->title}}
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
           @if($importants->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
          @else
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

          @endif
        </div>
        <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Admit Card</h3>
          @foreach($admitCards as $key => $admit)
            <a href="{{route('articleShow',$admit->slug)}}">{{$admit->title}}
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
           @if($admitCards->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
          @else
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

          @endif
        </div>
      </div>
      <div class="row mt-5">
          <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Certificates</h3>
            @foreach($certificates as $key => $certificate)
              <a href="{{route('articleShow', $certificate->slug)}}">{{$certificate->title}}
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
            @if($certificates->isNotEmpty())
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          @else
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

            @endif
          </div>
          <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Importants</h3>
            @foreach($importants as $key => $importants)
              <a href="{{route('articleShow', $important->slug)}}">{{$important->title}}
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
             @if($importants->isNotEmpty())
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          @else
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

            @endif
          </div>
      </div>
  </div>
  <style>
    .blinking{
  animation:blinkingText 2.6s infinite;
}
@keyframes blinkingText{
  0%{		color: #fff;	}
  49%{	color: #FFFF00;	}
  /*50%{	color: transparent;	}*/
  /*99%{	color:transparent;	}*/
  100%{	color: #fff;	}
}
</style>
@endSection
