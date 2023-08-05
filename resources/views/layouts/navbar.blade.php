<ul class="navbar__menu basic-flex">

    @foreach ($categories as $item)
        
    <li class="menu__item active"><a href="{{ route('list', $item->id) }}">{{ $item['name_'.\App::getLocale()] }}</a></li>

    @endforeach

</ul>
