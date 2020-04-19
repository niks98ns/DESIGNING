@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Restaurants</h2><br><br>

    <a href={{route('user_orders.create')}} class="btn btn-success">Add Menu</a><br><br>
    {{-- <a href="{{ url('restaurants/' . $restaurant->id . '/menus/create')}}" class="btn btn-success" role="button">Add Menu</a><br><br> --}}
    {{-- {{dd($menu->all())}} --}}
    
    {{-- <a href="{{ url('restaurants/' . $restaurant->id . '/menus/create')}}" class="btn btn-success" role="button">Add Menu</a><br><br> --}}

  
      
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Restaurant</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Restaurant Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $restaurant->id }}</td>
                <td>{{ $restaurant->name}}</td>
                <td>{{ $restaurant->email }}</td>
                <td>{{ $restaurant->address }}</td>
                <td><img class="rounded" src='{{asset('storage/'.$restaurant->restaurant_image)}}' height="50px" width="100px"></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
