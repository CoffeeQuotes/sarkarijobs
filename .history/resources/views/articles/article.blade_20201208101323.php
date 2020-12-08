@extends('layouts.app')
@section('page_title', $article->title)
@section('keywords', $article->meta_keyword)
@section('description', $article->meta_description)

@section('content')
<div class="pt-5">
    <h3><strong class="text-info">{{ $article->type}}</strong> / <span><strong class="text-info">{{ $article->category->name}}</strong></span></h3>
</div>
<div class="card">
        <div class="card-header pt-5">
            <h2 class=""><strong class="mt-5 text-danger">Post Name - </strong><span class="pl-2">{{$article->title}}</span></h2>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <p class="font-weight-bold"><strong class="mt-5 text-danger">Post Date - </strong><span class="pl-2">{{\Carbon\Carbon::parse($article->created_at)->format('j F, Y')}}</span></p>
            </div>
            <div class="pt-2">
                <p class="font-weight-bold"><strong class="mt-5 text-danger">Post Update - </strong><span class="pl-2">{{\Carbon\Carbon::parse($article->updated_at)->format('j F, Y')}}</span></p>
            </div>
        </div>
        <div class="card-footer bg-info p-2">
            <p class="text-white">
                {{$article->excerpt}}
            </p>
        </div>
</div>

<div class="pt-5">

</div>
<div class="pt-2 d-flex justify-content-md-center">
    {!! $article->description !!}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $("table").addClass("table table-responsive");

</script>
@endsection
