@extends('layouts.base')

@section('title', 'Главная')

@section('main')
@if(count($ads) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ads as $ad)
        <tr>
            <td><h3>{{$ad->title}}</h3></td>
            <td>{{$ad->price}}</td>
            <td>
                <a href="{{ route('detail', ['ad' => $ad->id])}}">Подробнее...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection('main')