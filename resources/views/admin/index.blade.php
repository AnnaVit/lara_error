<h1>Я шаблон</h1>
<ul>
    @foreach($menu as $item)
        <li>
            <a href="{{route($item['route'])}}">
                {{$item['title']}}
            </a>

        </li>
    @endforeach
</ul>

