@extends('layouts.main')

@section('content')
    {{--    post start --}}
    <section class="posts">
        <div class="container">

            @include('sections.posts')

        </div>
    </section>

    {{-- posts end --}}
    @include('sections.notification')

    <section class="news">
        <div class="container">
            <div class="news__wrapper basic-flex">

                {{-- news start --}}
                @include('sections.news')
                {{-- news end --}}

                {{-- popular news start  --}}
                <div class="popular-news">
                    @include('sections.popular')
                    @include('sections.advertising1')
                </div>
                {{-- popular news end --}}

            </div>
        </div>
    </section>

    @include('sections.connection')

    </main>
@endsection
