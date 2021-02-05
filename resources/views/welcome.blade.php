@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <div class="d-flex flex-wrap mt-5">
            @foreach ($hotlinks as $key => $hotlink)
                <div class="p-2 m-1" style="border-radius: 12.0px;
            background: #3c1874;
            box-shadow: inset 20px 20px 60px #331463,
                        inset -20px -20px 60px #451c85;">
                    <a class="text-white font-weight-bolder" data-toggle="tooltip" data-placement="bottom"
                       title="{{ $hotlink->title }}" href="{{ $hotlink->url }}" target="_blank"><span
                            class="blinking">{{ \Illuminate\Support\Str::limit($hotlink->title, 30, $end = '...') }}</span></a>
                </div>
            @endforeach
        </div>
        <nav class="navbar pt-5">
            @foreach ($categories as $key => $category)
                <span class=" m-1 badge badge-pill badge-warning" style="border-radius: 12.0px;  background: linear-gradient(145deg, #c83044, #ee3951);
        "><a href="{{ route('articleCategory', $category->id) }}" class="text-white m-1">{{ $category->name }}</a></span>
            @endforeach
        </nav>
        {{-- @foreach ($categories as $key => $category)
            <div class="row">
                @foreach ($category->articles as $key => $article)
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapse--{{ $key }}" aria-expanded="true"
                                        aria-controls="collapse--{{ $key }}">
                                        <h3>{{ $category->name }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse--{{ $key }}" class="collapse show" aria-labelledby="heading--{{ $key }}"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h3><a href="{{ route('articleShow', $article->slug) }}">{{ $article->title }}</a></h3>
                                    <p>Posted {{ $article->created_at->diffForHumans() }} & Updated
                                        {{ $article->updated_at->diffForHumans() }}
                                    </p>
                                    <p>{{ $article->excerpt }}</p>
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
            <div class="col-sm py-4 ">
                <h3 class=" p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Latest Jobs</h3>

                @foreach ($jobs as $key => $job)
                    <li><a href="{{ route('articleShow', ['type'=> $job->type, 'slug'=> $job->slug])}}" target="_blank">{{ $job->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($job->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif

                        </a> {{ $job->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($jobs->isNotEmpty())
                    <a class="btn btn-sm" target="_blank" href="{{ route('article', 'Jobs') }}" style="color:  #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All
                        @endif
                    </a>
            </div>
            {{-- Result --}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Results</h3>
                @foreach ($results as $key => $result)
                    <li><a href="{{route('articleShow', ['type' => $result->type, 'slug' => $result->slug])}}" target="_blank">{{ $result->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($result->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif

                        </a> {{ $result->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($results->isNotEmpty())
                    <a class="btn btn-sm" target="_blank" href="{{ route('article', 'Results') }}" style="color: #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
            {{-- Download --}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Download</h3>
                @foreach ($downloads as $key => $download)
                    <li><a href="{{ route('articleShow', ['type' => $download->type, 'slug'=>  $download->slug])}}" target="_blank">{{ $download->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($download->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif

                        </a> {{ $download->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($downloads->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Downloads') }}" target="_blank" style="color:  #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
        </div>
        {{-- Second Row --}}
        <div class="row mt-5">
            {{--Admit Card--}}
            <div class="col-sm py-4 ">
                <h3 class="p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Admit Card</h3>
                @foreach ($admitCards as $key => $admit)
                    <li><a href="{{ route('articleShow', ['type'=> $admit->type, 'slug' => $admit->slug])}}" target="_blank">{{ $admit->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($admit->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif
                        </a>
                        {{ $admit->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($admitCards->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Admit Card') }}" target="_blank" style="color:  #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
            {{--Syllabus--}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Syllabus</h3>
                @foreach ($syllabus as $key => $syllabi)
                    <li><a href="{{ route('articleShow', ['type' => $syllabi->type, 'slug' => $syllabi->slug])}}" target="_blank">{{ $syllabi->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($syllabi->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif

                        </a> {{ $syllabi->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($syllabus->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Syllabus') }}" target="_blank" style="color:  #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
            {{--Certificates --}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Certificates</h3>
                @foreach ($certificates as $key => $certificate)
                    <li><a href="{{ route('articleShow',[ 'type' => $certificate->type, 'slug' => $certificate->slug])}}" target="_blank">{{ $certificate->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($certificate->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif
                        </a>
                        {{ $certificate->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($certificates->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Important') }}" target="_blank" style="color: #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
        </div>
        {{--Third Row --}}
        <div class="row mt-5">
            {{-- Admission --}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Admissions</h3>
                @foreach ($admissions as $key => $admission)
                    <li><a href="{{ route('articleShow', ['type'=> $admission->type, 'slug' => $admission->slug])}}" target="_blank">{{ $admission->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($admission->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif

                        </a> {{ $admission->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($admissions->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Admissions') }}" target="_blank" style="color: #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
            {{--Impotants --}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Importants</h3>
                @foreach ($importants as $key => $important)
                    <li><a href="{{ route('articleShow', ['type'=> $important->type, 'slug' =>  $important->slug])}}" target="_blank">{{ $important->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($important->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif
                        </a>
                        {{ $important->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($importants->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Important') }}" target="_blank" style="color: #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
            {{-- Answer Keys--}}
            <div class="col-sm py-4 ">
                <h3 class="  p-1 text-center rounded text-white" style="border-radius: 12.0px;
        background: linear-gradient(145deg, #c83044, #ee3951);
        ">Answer Keys</h3>
                @foreach ($answerKeys as $key => $answers)
                    <li><a href="{{ route('articleShow', ['type' => $answers->type, 'slug' => $answers->slug])}}" target="_blank">{{ $answers->title }}
                            @if (\Carbon\Carbon::Now()->diffInDays($answers->updated_at) < 7)
                                <br />
                                <img src="https://img.icons8.com/fluent/48/000000/new--v1.png"/>
                            @endif
                        </a>
                        {{ $answers->updated_at->diffForHumans() }}
                    </li>
                @endforeach

                @if ($answerKeys->isNotEmpty())
                    <a class="btn btn-sm" href="{{ route('article', 'Answer keys') }}" target="_blank" style="color: #f3f3f3!important; border-radius: 12px;

background: #932432;border-radius: 12px;

">View All</a>
                @endif
            </div>
        </div>
    </div>

    <style>
        .blinking {
            animation: blinkingText 2.6s infinite;
        }

        @keyframes blinkingText {
            0% {
                color: #fefefe;
            }

            49% {
                color: #f3f3f3;
            }

            /*50%{	color: transparent;	}*/
            /*99%{	color:transparent;	}*/
            100% {
                color: #de453c;
            }
        }

    </style>
@endSection
