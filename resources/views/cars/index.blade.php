@extends('layouts.master')

@section('title', 'List of cars')

@section('content')
    @foreach ($cars as $car)
        <div>
            <p><a href="/cars/{{ $car->id }}">{{ $car->title }}</a></p>
        </div>
    @endforeach    
@endsection
