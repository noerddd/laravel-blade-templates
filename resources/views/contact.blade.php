@extends('layouts.mainlayout')
@section('title', 'Contact')

@section('content')
<div class="hello-text">Hello, You Can Contact Me!</div>
<h2 class="hello-text">{{$name}}</h2>
<h2 class="hello-text">{{$email}}</h2>
<h2 class="hello-text">{{$phone}}</h2>
@endsection