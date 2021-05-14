@extends('layouts.main')

@section('news')

    @forelse($news as $id => $item)
        @php
            //dd($item);
            //$url = route('news::category::idCategory::id', ['idCategory' => $idCategory, 'id' => $id]);
            $url = route('news::category::idCategory::id', ['idCategory' => $idCategory, 'id' => $id]);
        @endphp

        <div>
            <a href="{{$url}}">{{$item->title}}</a>
        </div>

    @empty
        Новостей нет
    @endforelse
@endsection
