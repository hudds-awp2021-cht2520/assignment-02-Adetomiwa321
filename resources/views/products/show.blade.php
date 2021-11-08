@extends('layouts.app')

@section('title', 'Showing ' . $product->name)

@section('content')
    <p>{{ $product->name }}</p>
    <p>{{ $product->price }}</p>
@endsection
