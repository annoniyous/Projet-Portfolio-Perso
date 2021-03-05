@extends('template.second')
@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Lien</th>
                <th scope="col">class</th>
                <th scope="col">icone</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
        
                @foreach ($socialicones as $item)
                    <tr>
                        <th scope="row">{{$item->}}</th>
                        <td>{{$item->}}</td>
                        <td>{{$item->}}</td>
                        <td>{{$item->}}</td>
                        <td><a href="socialicones/{id}/edit">Edit</a></td>
        
                        <td>
                          <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
        
                      <td>
                          <a class="btn btn-success" href="">show more</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection