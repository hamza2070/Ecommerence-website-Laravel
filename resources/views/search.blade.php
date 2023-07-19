@extends('master')
@section('content')
 <a href="">Filter</a>
    <div class="container" style="margin-top: 50px">
        <h3>Results</h3>
        <div style="margin-bottom:13%;justify-self:center">
            @forelse ($products as $item)
                <a href="/detail/{{ $item['id'] }}">
                    <div style="margin:0px 50px 0px 50px">
                        <img src="{{ $item['gallery'] }}" style="width:200px;justify-content:center">
                        <div>
                            <h5 style="color: rgb(71, 71, 71);">{{ $item['name'] }}</h5>
                            <p style="color: rgb(71, 71, 71);">{{ $item['description'] }}</p>
                        </div>
                    </div>
                </a>
            @empty
            <h4>No items!</h4>
                <!-- Placeholder content if there are no items -->
            @endforelse
        </div>
@endsection
