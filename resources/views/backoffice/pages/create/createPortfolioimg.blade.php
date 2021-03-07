@extends('template.second')
@section('content')
  <div class="container mt-5">
    {{-- Valiate condition --}}
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
        </ul> 
    </div> 
    @endif
      
    <form class="text-center border border-light p-5" action="/portfolioimgs" method="POST">
      @csrf
      <p class="h4 mb-4">Ajouter un élément</p>

      <input type="text" id="" class="form-control mb-4" name="src" value="{{old('src')}}" placeholder="Src">
      <input type="text" id="" class="form-control mb-4" name="name" value="{{old('name')}}" placeholder="Nom">
      <input type="text" id="" class="form-control mb-4" name="p" value="{{old('p')}}" placeholder="Description">
      <input type="text" id="" class="form-control mb-4" name="href" value="{{old('href')}}" placeholder="Href">
      <input type="text" id="" class="form-control mb-4" name="filter" value="{{old('filter')}}" placeholder="Filter">
     


      <button class="btn btn-info btn-block" type="submit">Ajouter</button>
    </form>
  </div>
@endsection