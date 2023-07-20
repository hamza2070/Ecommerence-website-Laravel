@extends('master')
@section('content')
    <div class="container" style="margin-top: 50px">
        <h6>Result Cart List</h6>
        <div>
            @forelse ($products as $item)
                <div >
                    <div class="border-bottom">
                        <div style="margin:70px 50px 30px 50px;display:flex">
                        <img src="{{ $item->gallery }}" style="width:200px;">
                        <div style="align-self: center;margin-left:10%;width:300px">
                            <h4 style="color: rgb(71, 71, 71); ">{{ $item->name}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                        <a href="remove/{{$item->cart_id}}" class="btn btn-danger" style="height:50px;align-self:center; justify-self:flex-end;margin-left:50px">Remove from cart</a>
                    </div>
                </div>
                    </div>
            @empty
                <!-- Placeholder content if there are no items -->
            @endforelse
        </div>
    </div>
@endsection
