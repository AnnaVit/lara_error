

<label for="category">Создать новую категорию</label>
    <form action="{{route('admin::news::saveCategory')}}" name="category" method="post">
    @csrf
    <p>
        <input type="hidden" name="id" value="{{$id ?? ''}}">
        <input type="text" name="name_category" placeholder="название категории"  value="{{$name_category ?? ''}}">
        @error('name_category')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </p>
    <p>
        <input type="submit">
    </p>


    </form>


