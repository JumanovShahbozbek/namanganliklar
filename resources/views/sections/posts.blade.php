<ul class="posts__list basic-flex">

    @foreach ($posts as $item)
        <li class="posts__item">
            <a href="{{ route('singlePost', $item->id) }}">
                <img src="images/{{ $item->img }}" alt="Image" class="posts__img">
                <h2 class="posts__title">{{ $item->title_uz }}</h2>
                <span class="posts__date">{{ $item->created_at->format('H:i / d.m.Y') }}</span>
            </a>
        </li>
    @endforeach

    {{-- <li class="posts__item">
        <a href="#">
            <img src="assets/img/top2.png" alt="Image" class="posts__img">
            <h2 class="posts__title">Карантин в Узбекистане продлен до 1 июня</h2>
            <span class="posts__date">05:28 / 16.05.2020</span>
        </a>
    </li>
    <li class="posts__item">
        <a href="#">
            <img src="assets/img/top3.png" alt="Image" class="posts__img">
            <h2 class="posts__title">Обмелевшая Сардоба: стихия или
                человеческий фактор?</h2>
            <span class="posts__date">05:28 / 16.05.2020</span>
        </a>
    </li>
    <li class="posts__item">
        <a href="#">
            <img src="assets/img/top4.png" alt="Image" class="posts__img">
            <h2 class="posts__title">Следствие проверяет четыре версии
                прорыва Сардобинской плотины</h2>
            <span class="posts__date">05:28 / 16.05.2020</span>
        </a>
    </li>
    <li class="posts__item">
        <a href="#">
            <img src="assets/img/top5.png" alt="Image" class="posts__img">
            <h2 class="posts__title">Выявлено еще 7 случаев коронавируса</h2>
            <span class="posts__date">05:28 / 16.05.2020</span>
        </a>
    </li>
    <li class="posts__item">
        <a href="#">
            <img src="assets/img/top6.png" alt="Image" class="posts__img">
            <h2 class="posts__title">Итоги второго месяца карантина</h2>
            <span class="posts__date">05:28 / 16.05.2020</span>
        </a>
    </li> --}}
</ul>
