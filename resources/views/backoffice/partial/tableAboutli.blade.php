@extends('template.second')
@section('content')
    <div class="container mt-5">

        <h1 class="mb-5">Les About li</h1>
        <div class="mb-5">
            <a href="/aboutlis/create" class="btn btn-info mr-5"> Ajouter un élément</a>
            <a href="{{route('destroyall')}}" class="btn btn-secondary ">Delete All</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Icone</th>
                <th scope="col">Li</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
        
                @foreach ($aboutlis as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->icone}}</td>
                        <td>{{$item->li}}</td>
                        <td><a href="/aboutlis/{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
        
                        <td>
                          <form action="/aboutlis/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
        
                      <td>
                          <a class="btn btn-success" href="/aboutlis/{{$item->id}}">Show more</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection