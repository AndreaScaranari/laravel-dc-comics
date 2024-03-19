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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus repellendus nobis
                    inventore aliquid aperiam hic ratione aliquam quam sunt dignissimos cupiditate quasi possimus illum qui
                    facere itaque, nulla deleniti.
                </div>
            </div>
        </div>
    </main>
@endsection
