
@php

//dd($categories);

@endphp
<label for="create">{{__('labels.create_news')}}</label>

<form action="{{route('admin::news::save')}}" name="create" method="post">
    @csrf
    <p>
        <input type="hidden" name="article[id]" value="{{$news->id ?? ''}}">
        <input type="hidden" name="article[news_source]" value="1">
        <input type="text" name="article[title]" placeholder="{{__('labels.title_news')}}" value="{{$news->title ?? ''}}">
        @error('article.title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </p>
    <p>
        <textarea name="article[content]" id="" cols="30" rows="10"
                  placeholder="{{__('labels.text_news')}}">{{$news->content ?? ''}}</textarea>
        @error('article.content')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </p>
    <p>
        <select  name="article[news_category]" size="1">
            <option disabled>{{__('labels.category_news')}}</option>
            @isset($news)
                <option selected value="{{$news->news_category }}">{{$categories[$news->news_category]}}</option>
            @endisset

            @foreach($categories as $categoryId => $categoryName)
                <option value="{{$categoryId}}">"{{$categoryName}}"</option>
            @endforeach
        </select>

        @error('article.news_category')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

    </p>
    <p>
        <input type="submit" value="{{__('labels.save')}}">
    </p>

</form>

<form action="{{route('admin::news::delete')}}" name="delete" method="post">
    @csrf
    <p>
        <input type="hidden" name="article[id]" value="{{$news->id ?? ''}}">
    </p>
    <p>
        <input type="submit" value="{{__('labels.delete')}}">
    </p>

</form>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
