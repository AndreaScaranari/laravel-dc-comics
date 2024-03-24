@extends('layouts.main')

@section('title')
    {{ $comic->series }}
@endsection


@section('main-content')
    <main>
        <div class="container w-50">

            <div class="title">
                <h1 class="text-center">{{ $comic->series }}</h1>
                <h3 class="text-center">{{ $comic->type }}</h3>
            </div>

            <div class="d-flex py-4 mx-auto justify-content-evenly" style="height:400px">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" class="img-fluid col-5">
                <div class="col-5 overflow-y-auto">
                    {{ $comic->description }}
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <a href="{{ url("/comics/$comic->id/edit") }}" class="btn btn-warning">Modifica</a>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Go Back!</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </main>
@endsection
