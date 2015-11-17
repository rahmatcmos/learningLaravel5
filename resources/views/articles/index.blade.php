@extends('app')
@section('content')
    @foreach($articles as $article)
    <h1><a href="{{url('/articles',$article->id)}}">{{$article->title}}</a></h1>
        {{$article->body}}
    @endforeach
@stop
@section('footer')
    <hr>
    &copy; Towfiq Piash | All right reserved 2015
@stop