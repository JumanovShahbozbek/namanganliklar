<ul class="navbar__menu basic-flex">

    @foreach ($categories as $item)
        
    <li class="menu__item active"><a href="/">{{ route('list', $item->id) }}</a></li>

    @endforeach

    <li class="menu__item"><a href="/article">Мир</a></li>
    <li class="menu__item"><a href="/contact">Экономика</a></li>
    <li class="menu__item"><a href="/list">Политика</a></li>
    {{-- <li class="menu__item"><a href="#">Общество</a></li>
    <li class="menu__item"><a href="#">Технологии</a></li>
    <li class="menu__item"><a href="#">Спорт</a></li>
    <li class="menu__item"><a href="#">Культура</a></li>
    <li class="menu__item"><a href="#">Происшествия</a></li>
    <li class="menu__item"><a href="#">Туризм</a></li> --}}
</ul>
