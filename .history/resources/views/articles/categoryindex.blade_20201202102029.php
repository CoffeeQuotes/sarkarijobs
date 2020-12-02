@extends('layouts.app')
@section('page_title', $category->name)
@section('content')
<h1 class="py-5">{{$category->name}}</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col" class=".d-none .d-sm-block">Notification</th>
            <th scope="col">Update</th>
            <th scope="col">Type<th>
            </tr>
    </thead>
    <tbody>
@foreach($articles as $key => $article)
<tr>
    <td><a class="font-weight-bold" href="{{route('articleShow',$article->id)}}">{{$article->title}}</a></td>
            <td class=".d-none .d-sm-block">{{$article->created_at->isoFormat('dddd D')}}</td>
            <td>{{$article->updated_at->isoFormat('dddd D')}}</td>
            <td><span class="badge badge-pill badge-success">{{$article->category->name}}</span></td>
        </tr>
@endforeach
</tbody>
</table>
@endSection
