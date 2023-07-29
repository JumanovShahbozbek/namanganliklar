@extends('layouts.main')

@section('content')
    <section class="article">

        {{-- content start --}}
        <div class="container">
            <div class="news__wrapper basic-flex">
                @include('sections.content')

                {{-- content end --}}

                {{-- papuliar news start --}}
                <div class="popular-news">
                    @include('sections.popular')
                    @include('sections.advertising1')
                </div>
                {{-- papuliar news end --}}

                <div class="related-news">
                    <h3 class="related-news__title">Новости по теме
                    </h3>
                    {{-- postlar soni 3 ta bolishi kerak --}}
                    @include('sections.posts')

                </div>
            </div>
        </div>
    </section>

    </main>
@endsection
