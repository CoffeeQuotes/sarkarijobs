@extends('layouts.app')

@section('page_title', $type)

@section('content')
    <h1 class="py-5">{{$type}}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type<th>
            </tr>
        </thead>
        <tbody>
    @foreach($articles as $article )
    <tr>
    <td><a class="font-weight-bold" href="{{route('articleshow',$article->id)}}">{{$article->title}}</a></td>
            <td><span class="badge badge-pill badge-success">{{$article->category->name}}</span></td>
    </tr>
    @endforeach
        </tbody>
    </table>
@endSection
