
<h1>я создаю новость</h1>
@php
@endphp
<label for="create">Создать новость</label>
<form action="{{route('admin::news::save')}}" name="create" method="post">
    @csrf
    <p>
        <input type="hidden" name="article[id]" value="{{$news->id ?? ''}}">
        <input type="hidden" name="article[news_source]" value="1">
        <input type="text" name="article[title]" placeholder="заголовок" value="{{$news->title ?? ''}}">
    </p>
    <p>
        <textarea name="article[content]" id="" cols="30" rows="10"
                  placeholder="текст новости">{{$news->content ?? ''}}</textarea>
    </p>
    <p>
        <input type="text" name="article[news_category]" placeholder="категория" value="{{$news->news_category ?? ''}}">
    </p>
    <p>
        <input type="submit" value="сохранить изменения">
    </p>
</form>

<form action="{{route('admin::news::delete')}}" name="delete" method="post">
    @csrf
    <p>
        <input type="hidden" name="article[id]" value="{{$news->id ?? ''}}">
    </p>
    <p>
        <input type="submit" value="удалить новость">
    </p>
</form>

