<h1>Добавляю категорию новостей</h1>
<p>список всех категорий</p>
<form action="{{route('admin::news::updateCategory')}}" name="create" method="post">
    @csrf
    <p>
        <input type="submit" value="Создать категорию">
    </p>
</form>
    @foreach($categories as $categoryId => $categoryName)
        <h4>{{$categoryName}}</h4>
        <form action="{{route('admin::news::updateCategory')}}" name="update" method="post">
            @csrf
            <p>
                <input type="hidden" name="id" value="{{$categoryId}}">
                <input type="hidden" name="name_category" value="{{$categoryName}}">
            </p>
            <p>
                <input type="submit" value="Редактировать">
            </p>
        </form>

        <form action="{{route('admin::news::deleteCategory')}}" name="delete" method="post">
            @csrf
            <p>
                <input type="hidden" name="name_category" value="{{$categoryId}}">
            </p>
            <p>
                <input type="submit" value="Удалить категорию">
            </p>
        </form>

    @endforeach




