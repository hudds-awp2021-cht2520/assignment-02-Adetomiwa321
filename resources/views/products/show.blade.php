@extends('layouts.app')

@section('title', 'Showing ' . $product->name)

@section('content')
    <p>{{ $product->price }}</p>
@endsection
