@extends('layouts.app')

@section('page_title', $type)

@section('content')
    <h1 class="py-5">{{$type}}</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Notification</th>
                <th scope="col">Update</th>
                <th scope="col">Type<th>
            </tr>
        </thead>
        <tbody>
    @foreach($articles as $article )
    <tr>
    <td><a class="font-weight-bold" href="{{route('articleShow',$article->slug)}}">{{$article->title}}</a></td>
            <td>{{$article->created_at->isoFormat('dddd D')}}</td>
            <td>{{$article->updated_at->isoFormat('dddd D')}}</td>
            <td><span class="badge badge-pill badge-success">{{$article->category->name}}</span></td>
    </tr>
    @endforeach
        </tbody>
    </table>
@endSection
