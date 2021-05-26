@extends('layouts.admin')

@section('news')
<h3>Список категорий</h3>
    @foreach($categories as $categoryId => $categoryName)
        <h4>{{$categoryName}}</h4>
        <form action="{{route('admin::news::updateCategory')}}" name="update" method="get">
            @csrf
            <p>
                <input type="hidden" name="id" value="{{$categoryId}}">
                <input type="hidden" name="name_category" value="{{$categoryName}}">
            </p>
            <p>
                <input type="submit" value="{{__('labels.edit')}}">
            </p>
        </form>

        <form action="{{route('admin::news::deleteCategory')}}" name="delete" method="post">
            @csrf
            <p>
                <input type="hidden" name="name_category" value="{{$categoryId}}">
            </p>
            <p>
                <input type="submit" value="{{__('labels.delete')}}">
            </p>
        </form>

    @endforeach
@endsection



