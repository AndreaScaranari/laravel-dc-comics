@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <p>Here's the HOME ROUTE</p>
    <a href="{{ route('comics.index') }}">Link all'INDEX</a>
@endsection
