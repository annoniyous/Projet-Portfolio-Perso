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
      
    <form class="text-center border border-light p-5" action="/skillslis" method="POST">
      @csrf
      <p class="h4 mb-4">Ajouter un élément</p>

      <input type="text" id="" class="form-control mb-4" name="nom" value="{{old('nom')}}" placeholder="Nom">
      <input type="text" id="" class="form-control mb-4" name="pourcent" value="{{old('pourcent')}}" placeholder="Pourcentage">
      <input type="text" id="" class="form-control mb-4" name="airav" value="{{old('airav')}}" placeholder="Attribut A">
      <input type="text" id="" class="form-control mb-4" name="airam" value="{{old('airam')}}" placeholder="Attribut B">
     


      <button class="btn btn-info btn-block" type="submit">Ajouter</button>
    </form>
  </div>
@endsection