@extends('layouts.app')

@section('title', 'All of our products')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    @foreach ($products as $product)
        <article>
            <h3><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h3>

            <p>{{ $product->price }}</p>

            @if (Auth::user() && Auth::user()->id === $product->user_id)
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    <a class="btn btn-blue" href="{{ route('products.show', $product->id) }}">Show</a>
                    <a class="btn btn-blue" href="{{ route('products.edit', $product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-red">Delete</button>
                </form>
            @endif
        </article>
    @endforeach

    {{ $products->links() }}
@endsection

