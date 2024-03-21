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

            <div class="d-flex py-4 mx-auto justify-content-evenly ">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" class="img-fluid col-5">
                <div class="col-5">
                    {{ $comic->description }}
                </div>
            </div>
        </div>
    </main>
@endsection
