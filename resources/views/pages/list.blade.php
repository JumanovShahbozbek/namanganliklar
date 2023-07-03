@extends('layouts.main')

@section('content')
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

    </main>
@endsection
