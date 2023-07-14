@extends('admin.layouts.main')

@section('tegs')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.tegs.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td>tegs uz: </td>
                    <td><b>{{ $teg->teg_uz }}</b></td>
                </tr>

                <tr>
                    <td>tegs ru: </td>
                    <td><b>{{ $teg->teg_ru }}</b></td>
                </tr>
                {{-- <tr>
                    <td> posts teg:</td>
                    <td><b>
                            @foreach ($teg->posts as $teg)
                                {{ $teg->title_uz }} <br>
                            @endforeach
                        </b>
                    </td>
                </tr> --}}
            </thead>
        </table>
        
    </div>
@endsection
