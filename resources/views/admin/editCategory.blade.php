

<label for="category">{{__('labels.new_category')}}</label>
    <form action="{{route('admin::news::saveCategory')}}" name="category" method="post">
    @csrf
    <p>
        <input type="hidden" name="id" value="{{$id ?? ''}}">
        <input type="text" name="name_category" placeholder="{{__('labels.category_news')}}"  value="{{$name_category ?? ''}}">
        @error('name_category')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </p>
    <p>
        <input type="submit" value="{{__('labels.save')}}">
    </p>


    </form>


