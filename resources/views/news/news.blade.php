@extends('layouts.main')

@section('news')

    @forelse($news as $id => $item)
        @php

            $url = route('news::category::idCategory::id', ['idCategory' => $id, 'id' => $item['id']]);
        @endphp

        <div>
            <a href="{{$url}}">{{$item['title']}}</a>
        </div>

    @empty
        Новостей нет
    @endforelse
@endsection
