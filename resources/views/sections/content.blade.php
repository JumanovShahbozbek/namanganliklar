<div class="article__wrapper">
    <h2 class="article__title">{{ $post->title_uz }}
    </h2>
    <span class="article__date basic-flex">{{ $post->created_at }}</span>
    <img src="images/{{ $post->img }}" alt="Шавкат Мирзиёев строго предупредил хокимов всех уровней
      ">
    <p class="important-text">
        {!! $post->body_uz !!}
    </p>

    <div class="hashtags basic-flex">
        <a href="#">#хоким</a>
        <a href="#">#Шавкат Мирзиёев</a>
        <a href="#">#пандемия</a>
    </div>
</div>
