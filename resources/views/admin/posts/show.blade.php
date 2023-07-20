@extends('admin.layouts.main')

@section('posts')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.posts.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td>Category: </td>
                    <td><b>{{ $post->category->name_uz }}</b></td>
                </tr>

                <tr>
                    <td>Title uz: </td>
                    <td><b>{{ $post->title_uz }}</b></td>
                </tr>

                <tr>
                    <td>Title ru: </td>
                    <td><b>{{ $post->title_uz }}</b></td>
                </tr>

                <tr>
                    <td>Image: </td>
                    <td><b><img src="/images/{{ $post->img }}" width="100" alt=""></b>
                </tr>

                <tr>
                    <td>Body uz: </td>
                    <td><b>{{ $post->body_uz }}</b></td>
                </tr>

                <tr>
                    <td>Title ru: </td>
                    <td><b>{{ $post->body_uz }}</b></td>
                </tr>

                <tr>
                    <td>Tegs: </td>
                    <td>
                        <b>
                            @foreach ($post->tegs as $teg)
                            {{ $teg->teg_uz}}<br>
                            @endforeach
                        </b>
                    </td>
                </tr>

            </thead>
        </table>

    </div>
@endsection
