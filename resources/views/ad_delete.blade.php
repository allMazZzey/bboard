@extends('layouts.base')

@section('title', 'Удаление объявления :: Мои объявления')

@section('main')
<h2>{{$ad->title}}</h2>
<p>{{$ad->content}}</p>
<p>{{$ad->price}} руб.</p>
<p>Автор: {{$ad->user->name}}</p>
<form action="{{ route('ad.delete', ['ad' => $ad->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Удалить">
</form>
@endsection('main')