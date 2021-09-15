<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>messages</h1>

    <form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    @csrf
    <button type="submit">Submit</button>

</form>

@extends('master')

@section('title', 'Message List')

<ul>
@foreach ($messages as $message)  
    <li>
    <b><a href="/messages/{{$message->id}}">{{$message->title}}:</a></b><br>
        {{$message->content}}<br>
        {{$message->created_at->diffForHumans()}}            
    </li>

@endforeach
</ul>


@section('content')

    <h2>Recent messages:</h2>

@endsection


</body>
</html>