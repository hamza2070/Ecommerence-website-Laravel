@extends('master')
@section('content')
    <div class="row" style="margin:5% 0 5% 0">
        <div class="col"></div>
        <div class="col">
            <img src="{{ $products['gallery'] }}" style="width: 300px" />
        </div>
        <div class="col">
            <br>
            <a href="/">
                <button class="btn btn-secondary">
                    <- Go Back</button>
            </a>
            <br>
            <br>
            <h2>{{ $products['name'] }}</h2>
            <h3>Price: ${{ $products['price'] }}</h3>
            <p>
            <h4>Description:</h4>
            <p> {{ $products['description'] }}</p>
            </p>
            <h5>Category: {{ $products['category'] }}</h5>
            <button class="btn btn-warning">Add to Cart</button>
            <br>
            <br>
            <button class="btn btn-success">Buy Now</button>
            <br>
            <br>
        </div>
        <div class="col"></div>

    </div>
@endsection
