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
      
    <form class="text-center border border-light p-5" action="/socialicones" method="POST">
      @csrf
      <p class="h4 mb-4">Ajouter un élément</p>

      <input type="text" id="" class="form-control mb-4" name="href" value="{{old('href') ? old('href'): $edit->href}}" placeholder="Link">
      <input type="text" id="" class="form-control mb-4" name="class" value="{{old('class') ? old('class'): $edit->class}}" placeholder="Class">
      <input type="text" id="" class="form-control mb-4" name="icone" value="{{old('icone') ? old('icone'): $edit->icone}}" placeholder="Icon">


      <button class="btn btn-info btn-block" type="submit">Ajouter</button>
    </form>
  </div>
@endsection