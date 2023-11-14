@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
<form action="{{ route('ad.update', ['ad' => $ad->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="txtTitle">Товар</label>
        <input name="title" id="txtTitle" class="form-control" value="{{ $ad->title }}">
    </div>
    <div class="form-group">
        <label for="txtContent">Описание</label>
        <textarea name="content" id="txtContent" class="form-control" row="3">{{ $ad->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="txtPrice">Цена</label>
        <input name="price" id="txtPrice" class="form-control" value="{{ $ad->price }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection