<h1>Добавляю категорию новостей</h1>
<label for="category">Создать новую категорию</label>
<form action="{{route('admin::news::category')}}" name="category" method="post">
    @csrf
    <p>
        <input type="text" name="category" placeholder="название категории">
    </p>
    <p>
        <input type="submit">
    </p>
</form>
