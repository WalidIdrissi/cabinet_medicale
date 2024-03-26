{{-- @extends('adminlte::page') --}}

@section('title')
Ajouter un nouveau patient| Cabinet Medicale App
@endsection
@section('content_header')
 <h1>Dashboard</h1>
@endsection
{{-- @section('content') --}}
<div class="container">
@include('layouts.alert')
<div class="row">
<div class="col-md-7 mx-auto">
<div class="card my-5">
<div class='card-header'>
    <div class="text-center font-weight-bold text-uppercase">
        <h4>Ajouter un nouveau patient </h4>
    </div>
</div>
<div class="card-body">
<form action="{{route('patient.store')}}" method="POST" class="mt-3" >
@csrf
<div class="form-group mb-3">
    <label for="id">ID</label>
    <input type="number" class="form-control" name="id" placeholder="id" value="{{old('id')}}">
</div>
<div class="form-group mb-3">
    <label for="nom">NOM</label>
    <input type="text" class="form-control" name="nom" placeholder="nom" value="{{old('nom')}}">
 </div>
<div class="form-group mb-3">
    <label for="prenom">PRENOM</label>
    <input type="text" class="form-control" name="prenom" placeholder="prenom" value="{{old('prenom')}}">
</div>
<div class="form-group mb-3">
    <label for="date_naissance">Date De Naissance</label>
    <input type="date" class="form-control" name="date_naissance" placeholder="date_naissance"value="{{old('date_naissance')}}">
</div>
<div class="form-group mb-3">
    <label for="telephone">TELEPHONE</label>
    <input type="text" class="form-control" name="telephone" placeholder="telephone" value="{{old('telephone')}}">
</div>
<div class="form-group mb-3">
    <label for="poids">POIDS</label>
    <input type="text" class="form-control" name="poids" placeholder="poids" value="{{old('poids')}}">
</div>
<div class="form-group mb-3">
    <label for="taille">TAILLE</label>
    <input type="text" class="form-control" name="taille" placeholder="taille" value="{{old('taille')}}">
</div>
<div class="form-group mb-3">
    <label for="groupe_sanguin">Groupe Sanguin</label>
    <input type="text" class="form-control" name="groupe_sanguin" placeholder="groupe_sanguin" value="{{old('groupe_sanguin')}}">
</div>
<div class="form-group mb-3">
    <label for="antecedants_medicaux"> Les Antecedants Medicaux</label>
    <input type="text" class="form-control" name="antecedants_medicaux" placeholder="antecedants_medicaux" value="{{old('antecedants_medicaux')}}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary"> submit</button>
</div>
</form>
</div>
</div>
</div>
{{-- @endsection --}}
