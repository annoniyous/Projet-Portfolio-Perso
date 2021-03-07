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
      
    <form class="text-center border border-light p-5" action="/porfolioimgs/{{$edit->id}}" method="POST">
      @csrf
      @method('PUT')
      <p class="h4 mb-4">Update un élément</p>

      <input type="text" id="" class="form-control mb-4" name="src" value="{{old('src') ? old('src'): $edit->src}}" placeholder="Src">
      <input type="text" id="" class="form-control mb-4" name="name" value="{{old('name') ? old('name'): $edit->name}}" placeholder="Nom">
      <input type="text" id="" class="form-control mb-4" name="p" value="{{old('p') ? old('p'): $edit->p}}" placeholder="Description">
      <input type="text" id="" class="form-control mb-4" name="href" value="{{old('href') ? old('href'): $edit->href}}" placeholder="href">
      <input type="text" id="" class="form-control mb-4" name="filter" value="{{old('filter') ? old('filter'): $edit->filter}}" placeholder="Filter">
      
      <button class="btn btn-info btn-block" type="submit">Ajouter</button>
    </form>
  </div>
@endsection