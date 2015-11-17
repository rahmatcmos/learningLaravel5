@extends('app')

@section('content')
<h1>Welcome {{ $first }} {{$last}} You're on about page</h1>
@unless($first == 'Towfiq')
    <h2 class="alert-success">You got 5000k bonus, sir!!!</h2>
@else
    <h2 class="alert-danger">Better luck next time!!!</h2>
@endif
    @if(count($people))
        <h3>People I like</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi odit quia quod voluptatem!
    Ad asperiores perspiciatis repellat, saepe tempore temporibus ullam veniam. Aspernatur deleniti eos
    fugiat nihil porro quos?
</p>
@stop