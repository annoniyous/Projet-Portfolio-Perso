@extends('template.second')
@section('content')
    <div class="container mt-5">

        <h1 class="mb-5">Les Sillks li</h1>
        <div class="mb-5">
            <a href="/skillslis/create" class="btn btn-info mr-5"> Ajouter un élément</a>
            <a href="{{route('destroyall')}}" class="btn btn-secondary ">Delete All</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Pourcentage</th>
                <th scope="col">Attribut A</th>
                <th scope="col">Attribut B</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
        
                @foreach ($skillslis as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->pourcent}}</td>
                        <td>{{$item->airav}}</td>
                        <td>{{$item->airam}}</td>
                        <td><a href="/skillslis/{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
        
                        <td>
                          <form action="/skillslis/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>

        
                      <td>
                          <a class="btn btn-success" href="/skillslis/{{$item->id}}">Show more</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection