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
      
    <form class="text-center border border-light p-5" action="/aboutlis/{{$edit->id}}" method="POST">
      @csrf
      @method('PUT')
      <p class="h4 mb-4">Update un élément</p>

      <input type="text" id="" class="form-control mb-4" name="icone" value="{{old('icone') ? old('icone'): $edit->icone}}" placeholder="Icone">
      <input type="text" id="" class="form-control mb-4" name="li" value="{{old('li') ? old('li'): $edit->li}}" placeholder="Li">
      
      <button class="btn btn-info btn-block" type="submit">Ajouter</button>
    </form>
  </div>
@endsection