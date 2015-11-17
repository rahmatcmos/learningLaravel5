@extends('app')

@section('content')
    <h1>Post details page</h1>
    <h2>{{ $article->title }}</h2>
    <p>Published date: {{$article->published_date}}</p>
    <p>{{$article->body}}</p>
@stop