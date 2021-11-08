@extends('layouts.app')

@section('title', 'New Shoes')

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="my-10">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="p-2 bg-gray-200 @error('name') is-invalid @enderror" />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


       

        <div class=" my-10">
            <label for="price">Price:</label>
            <textarea name="price" id="price" row="5" class=" p-2 bg-gray-200 @error('price') is-invalid @enderror"></textarea>

            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Create</button>
    </form>
@endsection

