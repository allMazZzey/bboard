@extends('layouts.base')
@section('title', 'Мои объявления')
@section('main')
<p class="text-right"><a href="{{ route('ad.showAddForm') }}">Добавить объявление</a></p>
@if (count($ads) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ads as $ad)
        <tr>
            <td>
                <h3>{{ $ad->title }}</h3>
            </td>
            <td>{{ $ad->price }}</td>
            <td>
                <a href="{{ route('ad.showEditForm', ['ad' => $ad->id])}}">Изменить</a>
            </td>
            <td>
                <a href="{{ route('ad.showDeleteForm', ['ad' => $ad->id])}}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection