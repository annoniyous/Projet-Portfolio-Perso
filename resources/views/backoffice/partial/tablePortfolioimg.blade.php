@extends('template.second')
@section('content')
    <div class="container mt-5">

        <h1 class="mb-5">Les images de mon Potfolio</h1>
        <div class="mb-5">
            <a href="/portfolioimgs/create" class="btn btn-info mr-5"> Ajouter un élément</a>
            <a href="{{route('destroyall')}}" class="btn btn-secondary ">Delete All</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Src</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Href</th>
                <th scope="col">Filter</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
        
                @foreach ($portfolioimgs as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->src}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->p}}</td>
                        <td>{{$item->href}}</td>
                        <td>{{$item->filter}}</td>
                        <td><a href="/portfolioimgs/{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
        
                        <td>
                          <form action="/portfolioimgs/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
        
                      <td>
                          <a class="btn btn-success" href="/portfolioimgs/{{$item->id}}">Show more</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection