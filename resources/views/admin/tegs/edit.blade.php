@extends('admin.layouts.main')

@section('tegs')
    active
@endsection

@section('content')

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
    <!-- MAIN -->

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>O'zgartirish</h3>
                <a href="{{ route('admin.tegs.index') }}">
                    <button type="button" class="btn btn-outline-dark m-2">Qaytish</button>
                </a>
            </div>

            <form class="create__inputs" action="{{ route('admin.tegs.update', $teg->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <strong> tegs uz:</strong>
                <input type="text" name="teg_uz" value="{{ $teg->teg_uz }}" class="form-control"> <br>
                @error('teg_uz')
                    {{ $message }}
                @enderror

                <strong> tegs ru:</strong>
                <input type="text" name="teg_ru" value="{{ $teg->teg_ru }}" class="form-control"> <br>
                @error('teg_ru')
                    {{ $message }}
                @enderror

                <input type="submit" value="O'zgartirish">

            </form>
        </div>
    </div>
    <!-- MAIN -->
@endsection
