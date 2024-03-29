@extends('layouts.app')

@section('content')
<div class="container">
   
    <a href="{{route('menus.create')}}" class="btn btn-success">Create Menus</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Food Type</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($menus as $menu)
         {{-- {{dd(asset('storage/'.$menu->image))}} --}}
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->food_name }}</td>
                <td>{{ $menu->price }}</td>
                <td>{{ $menu->status }}</td>
                <td>{{ $menu->food_type }}</td>
                <td><img class="rounded" src='{{asset('storage/'.$menu->image)}}' height="50px" width="100px"></td>
                <td>
                    {{-- {{dd($menu)}} --}}
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary">
                        Edit
                    </a>
    
                    <form class="form-horizontal pull-right" action="{{ URL::route('menus.destroy', [$menu->id]) }}" method="POST" >
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                            Delete
                        </button>
                    
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
