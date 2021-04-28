<h1>я создаю новость</h1>
<label for="create">Создать новость</label>
<form action="{{route('admin::news::save')}}" name="create" method="post">
    @csrf
    <p>
        <input type="text" name="article[title]" placeholder="заголовок">
    </p>
    <p>
        <textarea name="article[content]" id="" cols="30" rows="10" placeholder="текст новости"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
</form>

