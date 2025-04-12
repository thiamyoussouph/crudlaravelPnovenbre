
@extends('layouts.app')
@section('content')
<a href="{{route('pointage.create')}}"class="btn btn-success m-5">ajouter</a>

<div class="card m-3" style="width: 50rem;">
    <div class="card-header">
        <h2> liste des Pointages</h2>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">grade</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pointagese as $pointage)
    <tr>
      <th scope="row">{{ $pointage->id }}</th>
      <td>{{ $pointage->prenom }}</td>
      <td>{{ $pointage->nom}}</td>
      <td>{{ $pointage->grade}}</td>
      <td><a href="" class="btn btn-success">editer</a>
    <a href="" class="btn btn-warning">detail</a>
    <a href="" class="btn btn-danger">delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
   
    @endsection