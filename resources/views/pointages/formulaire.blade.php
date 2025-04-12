@extends('layouts.app')
@section('content')
<div class="card " style="width: 48rem; margin-left: 30%; margin-top: 5%;">
<h5 class="card-title">formulaire d ajout</h5>
<form method="post" action="{{route('pointage.store')}}">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">grade</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="grade">
  </div>
 
  <button type="submit" class="btn btn-primary">ajouter</button>
</form>
</div>

@endsection