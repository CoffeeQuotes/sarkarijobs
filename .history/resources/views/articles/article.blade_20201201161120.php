@extends('layouts.app')
@section('page_title', 'content')

@section('content')
<div class="pt-5">
    <h3><strong class="text-info">{{ $article->type}}</strong> / <span><strong class="text-info">{{ $article->category->name}}</strong></span></h3>
</div>
<table class="table table-stripped">
    <div class="pt-5">
        <td><h2 class=""><strong class="mt-5 text-danger">Post Name - </strong></h2></td><td><span class="pl-2">{{$article->title}}</span></td>
    </div>
    <div class="pt-2">
        <p class="font-weight-bold"><strong class="mt-5 text-danger">Post Date - </strong><span class="pl-2">{{\Carbon\Carbon::parse($article->created_at)->format('j F, Y')}}</span></p>
    </div>
    <div class="pt-2">
        <p class="font-weight-bold"><strong class="mt-5 text-danger">Post Update - </strong><span class="pl-2">{{\Carbon\Carbon::parse($article->updated_at)->format('j F, Y')}}</span></p>
    </div>
</table>
<div class="bg-info p-2">
    <p class="text-white">
        {{$article->excerpt}}
    </p>
</div>
<div class="pt-5">

</div>
<div class="pt-2">
    {!! $article->description !!}
</div>

@endsection
