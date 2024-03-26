{{-- @extends('adminlte::page') --}}

@section('title')
Liste des patients| Cabinet Medicale App
@endsection

@section('content_header')
 <h1>Dashboard</h1>
@endsection
{{-- @section('content') --}}
<div class="container">
<div class="row">
<div class="col-md-10 mx-auto">
<div class="card my-5">
    <div class='card-header'>
    <div class="text-center font-weight-bold text-uppercase">
        <h4> Patients</h4>
    </div>
    </div>
<div class="card-body"  style="overflow-x:auto ;" >
<table id="myTable"  class=" table table-bodered table-stripped" >
<thead>
    <tr>
        <th> ID</th>
        <th> nom </th>
        <th>prenom</th>
        <th> date_naissance</th>
        <th> telephone</th>
        <th> poids</th>
        <th> taille</th>
        <th> groupe_sanguin</th>
        <th> antecedants_medicaux</th>
        <th> Actions</th>
    </tr>
</thead>
<tbody>
    @foreach ($patients as $key => $patient)
    <tr>
        <td> {{$key+=1}} </td>
        <td>  {{$patient->nom}} </td>
        <td>  {{$patient->prenom}} </td>
        <td>  {{$patient->date_naissance}} </td>
        <td> {{$patient->telephone}} </td>
        <td> {{$patient->poids}} </td>
        <td> {{$patient->taille}} </td>
        <td> {{$patient->groupe_sanguin}} </td>
        <td> {{$patient->antecedants_medicaux}} </td>
        <td class="d-flex justify-content">
            <a href="{{route('patient.show',$patient->id)}}"
                class="btn btn-sm btn-primary">
                <i class="fas fa-eye"></i>
            </a>
            <a href="{{route('patient.edit',$patient->id)}}"
                class="btn btn-sm btn-warning mx-2">
                <i class="fas fa-edit"></i>
            </a>
            <form id="deleteForm" action="{{route('patient.destroy',$patient->id)}}"  method="post">
                 @method('DELETE')
                 @csrf
            </form>
            <button type="submit"
                onclick="deletePat()"
                class="btn btn-sm btn--danger">
                <i class="fas fa-trash"></i>
            </button>
        </td>
    </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
{{-- @endsection --}}
{{-- @section('js')
    <script>
        function deletePat(){
            Swal.fire({
                title: "Êtes-vous sûre ?",
                text: "Vous ne pourrez pas revenir en arrière!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "oui, supprimer!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementbyId('deleteForm').submit();

                }
            });



        }
    </script>
   @if(session()->has('success'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{session()->get('success')}} ",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
   @endif
@endsection --}}
