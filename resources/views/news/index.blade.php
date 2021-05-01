@extends('layouts.main')

@section('content')

    @foreach($categories as $category => $item)
        @php
            $url = route('news::category::idCategory', ['idCategory' => $category]);

        @endphp

        <div class="category">
            <a href="{{$url}}">{{$item}}</a>
        </div>


    @endforeach

@endsection
