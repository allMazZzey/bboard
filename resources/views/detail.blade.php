@extends('layouts.base')

@section('title', $ad->title)

@section('main')
<h2>{{$ad->title}}</h2>
<p>{{$ad->content}}</p>
<p>{{$ad->price}} руб.</p>
<p><a href="{{route('index')}}">Ко всем объявлениям</a></p>
@endsection('main')