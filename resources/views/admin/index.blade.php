@extends('layouts.admin')

@section('news')
    @forelse($news as $id => $item)

        <div class="news">
            <h3>{{$item->title}}</h3>
            <p>{{$item->content}}</p>

            <form action="{{route('admin::news::update')}}" name="update" method="post">
                @csrf
                <p>
                    <input type="hidden" name="news" value="{{$item->id}}">
                </p>
                <p>
                    <input type="submit" value="редактировать">
                </p>
            </form>
        </div>

    @empty
        Новостей нет
    @endforelse


@endsection
