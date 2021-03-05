@extends('template.second')
@section('content')
    <div class="container mt-5">

        <h1 class="mb-5">Les Social icones</h1>
        <div class="mb-5">
            <a href="/socialicones/create" class="btn btn-info mr-5"> Ajouter un élément</a>
            <a href="{{route('destroyall')}}" class="btn btn-secondary ">Delete All</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Link</th>
                <th scope="col">Class</th>
                <th scope="col">Icone</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
        
                @foreach ($socialicones as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->href}}</td>
                        <td>{{$item->class}}</td>
                        <td>{{$item->icone}}</td>
                        <td><a href="/socialicones/{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
        
                        <td>
                          <form action="/socialicones/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
        
                      <td>
                          <a class="btn btn-success" href="/socialicones/{{$item->id}}">Show more</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection