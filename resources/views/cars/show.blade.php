@extends('layouts.master')

@section('title', $car->title)

@section('content')
    <div>
        <p> {{ $car->title }} </p>
        <p> {{ $car->producer }} </p>
        <p> {{ $car->number_of_doors }} </p>
    </div>  
@endsection


