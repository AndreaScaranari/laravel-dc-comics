@extends('layouts.main')

@section('title', 'Team-Edit')

@section('main-content')
    <div class="container">

        <h1 class="text-center">Modifica Comic</h1>

        @include('includes.alert')

        @include('includes.comics.form')
    </div>
@endsection
