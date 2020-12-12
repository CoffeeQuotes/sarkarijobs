@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="d-flex flex-wrap mt-5">
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

    {{--First Row --}}
    <div class="row py-5">
            {{-- Latest Job --}}
                <div class="col-sm">
          <h3 class=" p-1 text-center rounded text-white bg-dark">Latest Jobs</h3>

        @foreach($jobs as $key => $job)
            <li><a href="{{route('articleShow',$job->slug)}}">{{$job->title}}
            @if(\Carbon\Carbon::Now()->diffInDays($job->updated_at) < 7)
              <br/>
            <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif

   </a>         {{$job->updated_at->diffForHumans()}}
            </li>
        @endforeach

        @if($jobs->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Jobs')}}">View All
        @endif
        </a>
      </div>
            {{-- Result --}}
                <div class="col-sm">
          <h3 class="  p-1 text-center rounded text-white bg-dark">Results</h3>
        @foreach($results as $key => $result)
            <li><a href="{{route('articleShow', $result->slug)}}">{{$result->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($result->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif

   </a>         {{$result->updated_at->diffForHumans()}}
            </li>
        @endforeach

         @if($results->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        @endif
      </div>
            {{-- Download --}}
                <div class="col-sm">
        <h3 class="  p-1 text-center rounded text-white bg-dark">Download</h3>
        @foreach($downloads as $key => $download)
            <li><a href="{{route('articleShow', $download->slug)}}">{{$download->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($download->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif

   </a>         {{$download->updated_at->diffForHumans()}}
            </li>
        @endforeach

         @if($admissions->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Downloads')}}">View All</a>
        @endif
      </div>
    </div>
    {{-- Second Row --}}
    <div class="row mt-5">
            {{--Admit Card--}}
                <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Admit Card</h3>
          @foreach($admitCards as $key => $admit)
            <li><a href="{{route('articleShow',$admit->slug)}}">{{$admit->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($admit->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
            {{$admit->updated_at->diffForHumans()}}
        </li>
          @endforeach

           @if($admitCards->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
          @endif
        </div>
            {{--Syllabus--}}
                <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Syllabus</h3>
          @foreach($syllabus as $key => $syllabi)
            <li><a href="{{route('articleShow', $syllabi->slug)}}">{{$syllabi->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($syllabi->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif

   </a>         {{$syllabi->updated_at->diffForHumans()}}
            </li>
          @endforeach

           @if($syllabus->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
          @endif
        </div>
            {{--Certificates --}}
                <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Certificates</h3>
            @foreach($certificates as $key => $certificate)
              <li><a href="{{route('articleShow', $certificate->slug)}}">{{$certificate->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($certificate->updated_at) < 7)
                <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
            {{$certificate->updated_at->diffForHumans()}}
        </li>
            @endforeach

            @if($certificates->isNotEmpty())
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
            @endif
          </div>
    </div>
    {{--Third Row --}}
      <div class="row mt-5">
          {{-- Admission --}}
            <div class="col-sm">
        <h3 class="  p-1 text-center rounded text-white bg-dark">Admissions</h3>
        @foreach($admissions as $key => $admission)
            <li><a href="{{route('articleShow', $admission->slug)}}">{{$admission->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($admission->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif

   </a>         {{$admission->updated_at->diffForHumans()}}
            </li>
        @endforeach

         @if($admissions->isNotEmpty())
        <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
        @endif
      </div>
          {{--Impotants -}}
            <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Importants</h3>
            @foreach($importants as $key => $importants)
              <li><a href="{{route('articleShow', $important->slug)}}">{{$important->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($important->updated_at) < 7)
                <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
            {{$important->updated_at->diffForHumans()}}
        </li>
            @endforeach

             @if($importants->isNotEmpty())
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
            @endif
          </div>
          {{-- Answer Keys--}}
            <div class="col-sm">
            <h3 class="  p-1 text-center rounded text-white bg-dark">Answer Keys</h3>
          @foreach($answerKeys as $key => $answers)
            <li><a href="{{route('articleShow',$answers->slug)}}">{{$answers->title}}
                @if(\Carbon\Carbon::Now()->diffInDays($answers->updated_at) < 7)
              <br/>
                <img src="https://img.icons8.com/doodle/48/000000/new--v1.png" width="24" height="auto" />
            @endif
            </a>
            {{$answers->updated_at->diffForHumans()}}
        </li>
          @endforeach

           @if($importants->isNotEmpty())
          <a class="btn btn-sm btn-primary" href="{{route('article','Results')}}">View All</a>
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
