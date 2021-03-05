@extends('template.second')
@section('content')
<div class="container mb-5 mt-5">
    <h1>Aperçu du contenu</h1>

    <div class="card mt-5">
        <div class="card-body elegant-color white-text rounded-bottom text-center">
            <h3 class="card-title">Id: {{$show->id}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Link: {{$show->href}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Class: {{$show->class}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Icone: {{$show->icone}}</h3>
            <hr class="hr-light">
        </div>
  </div>

</div>
    
@endsection