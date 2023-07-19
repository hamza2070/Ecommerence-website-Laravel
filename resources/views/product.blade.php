@extends('master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide"
        style="height: 600px; margin-top:50px;background-color:rgb(247, 247, 247)">
        <div class="carousel-inner" style="justify-content: center;align-items:flex-end">
            @forelse ($products as $item)
                <a href="/detail/{{ $item['id'] }}">
                    <div class="carousel-item {{ $item['id'] == 4 ? 'active' : '' }}">
                    <img src="{{ $item['gallery'] }}" class="d-block" alt="Slide Image" style="width:400px;">
                    <div class="carousel-caption">
                        <h3 style="color: rgb(71, 71, 71)">{{ $item['name'] }}</h3>
                        <p style="color: grey">{{ $item['description'] }}</p>
                    </div>
                </div>
                </a>
            @empty
                <!-- Placeholder content if there are no items -->
            @endforelse
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span style="text-shadow: 1px 1px rgb(255, 0, 0); color:black">
                < Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span style="text-shadow: 1px 1px rgb(255, 0, 0); color:black">Next ></span>
        </button>
    </div>
    <div class="container" style="margin-top: 50px">
        <h2>Trending List</h2>
        <div style="display:flex;align-items:flex-end;">
            @forelse ($products as $item)
                <a href="/detail/{{ $item['id'] }}">
                    <div style="margin:0px 50px 0px 50px">
                        <img src="{{ $item['gallery'] }}" style="width:200px;">
                        <div>
                            <h5 style="color: rgb(71, 71, 71); text-align:center">{{ $item['name'] }}</h5>
                        </div>
                    </div>
                </a>
            @empty
                <!-- Placeholder content if there are no items -->
            @endforelse
        </div>
    </div>
@endsection
