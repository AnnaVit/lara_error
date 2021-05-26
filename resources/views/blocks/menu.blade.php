<div class="menu">
    @foreach($menu as $item)
        <div>
            <a href="{{route($item['route'])}}">
                {{__('labels.' . $item['title']) }}
            </a>
        </div>

    @endforeach

</div>
