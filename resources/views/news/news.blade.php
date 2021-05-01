@extends('layouts.main')

@section('news')

    @forelse($news as $id => $item)
        @php

            $url = route('news::category::idCategory::id', ['idCategory' => $idCategory, 'id' => $id]);
        @endphp

        <div>
            <a href="{{$url}}">{{$item}}</a>
        </div>

    @empty
        Новостей нет
    @endforelse
@endsection
