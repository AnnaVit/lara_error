<div class="menu">
    @foreach($menu as $item)
        <div>
            <a href="{{route($item['route'])}}">
                {{$item['title']}}
            </a>
        </div>

    @endforeach

</div>
