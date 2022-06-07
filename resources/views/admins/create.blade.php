@extends('layouts.admin')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un Pos </h4>
                <p class="card-description"> Ajouter un Pos  </p>
                   <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div   class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
                <form action="{{ route('poss.store') }}" method="post" class="forms-sample">
                @csrf
           
                    <div class="form-group">

                        <label for="exampleInputName1">num</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="num">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">nom</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="nom">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">adress</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="adress">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleSelectGender">Etat</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Actif</option>
                            <option>Inactif</option>
                        </select>
                    </div>
                   
                 
                    <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection