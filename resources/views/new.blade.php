@extends('layout')
@section('content')
    <h1>新しいお店</h1>
    <form method='POST' action={{ route('shop.store') }}>
        @csrf
        <div class="form-group">
            <label for='name'>店名:</label>
            <input id='name' type='text' name='name'>
        </div>
        <div class="form-group">
            <label for='address'>住所:</label>
            <input id='address' type='text' name='address'>
        </div>
        <div class='form-group'>
            <label for="category_id">カテゴリ:</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-primary">
        </div>
    </form>
    <div>
        <a href={{ route('shop.list')}}>一覧に戻る</a>
    </div>

@endsection
