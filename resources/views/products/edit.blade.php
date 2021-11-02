@extends('layouts.app')

@section('title', 'Edit signing')

@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="my-10">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" class=" p-2 bg-gray-200 @error('name') is-invalid @enderror" />

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-10">
            <label for="price">Price:</label>
            <textarea name="price" id="price" row="5" class=" p-2 bg-gray-200 @error('price') is-invalid @enderror"> {{ $product->price }}</textarea>

            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Update</button>
    </form>
@endsection
