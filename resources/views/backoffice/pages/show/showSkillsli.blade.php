@extends('template.second')
@section('content')
<div class="container mb-5 mt-5">
    <h1>Aperçu du contenu</h1>

    <div class="card mt-5">
        <div class="card-body elegant-color white-text rounded-bottom text-center">
            <h3 class="card-title">Id: {{$show->id}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Nom: {{$show->pourcent}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Attribus A: {{$show->airav}}</h3>
            <hr class="hr-light">
            <h3 class="card-title">Attribus B: {{$show->airam}}</h3>
           
        </div>
  </div>

</div>
    
@endsection