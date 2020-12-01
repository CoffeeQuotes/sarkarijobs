@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row">
      <div class="col-sm">
          <h3 class="bg-secondary p-1 text-center rounded text-dark">Latest Jobs</h3>
        @foreach($jobs as $key => $job)
            <a href="{{route('article',$job->type)}}">{{$job->title}}
            &nbsp;
            <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($job->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($result->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($admission->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($syllabi->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($answers->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($admit->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($certificate->updated_at)->format('j F, Y')}}</span></a>
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
                <span style="letter-spacing: 2px;" class="badge badge-info">{{\Carbon\Carbon::parse($important->updated_at)->format('j F, Y')}}</span></a>
              </a>
            @endforeach
            <br/><br/><br/>
            <a class="btn btn-sm btn-primary" href="{{route('article','Important')}}">View All</a>
          </div>
      </div>
  </div>
@endSection
