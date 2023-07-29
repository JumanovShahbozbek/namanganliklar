@extends('admin.layouts.main')

@section('posts')
    active
@endsection

@section('content')

    <div class="col-sm-12 col-xl-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-sm-12 col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Ma'lumot qo`shish</h6>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Category</label>
                            <select class="form-select mb-3" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Tegs</label>
                            <select class="form-select mb-3" name="teg_id[]" multiple>
                                @foreach ($tegs as $teg)
                                    <option value="{{ $teg->id }}">{{ $teg->teg_uz }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title Uz</label>
                            <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                            @error('title_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title Ru</label>
                            <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                            @error('title_ru')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Body Uz</label>
                            <textarea class="ckeditor form-control" name="body_uz" value="{{ old('body_uz') }}"></textarea>
                            @error('body_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class=" mb-3">
                            <label class="form-label">Body ru</label>
                            <textarea class="ckeditor form-control" name="body_ru" value="{{ old('body_ru') }}"></textarea>
                            @error('body_ru')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Qo`shish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
