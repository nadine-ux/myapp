@extends('layouts.adminposr')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Ajouter un Pos</div>
        <div class="card-body">

            <form action="{{ route('poss.store') }}" method="post">
                {!! csrf_field() !!}
                <label>Nom_POS</label></br>
                <input type="text" name="Nom_POS" id="Nom_POS" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="Adresse" id="Adresse" class="form-control"></br>
                <label>Statut</label></br>
                <input type="text" name="Statut" id="Statut" class="form-control"></br>

                <label>telephone</label></br>
                <input type="text" name="telephone" id="telephone" class="form-control"></br>
                <div class="field">
                    <label class="label">nom de annimateur</label>
                    <div class="select">
                        <select name="user_id" class="form-select" aria-label="Default select example">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div></br></br>
                <input type="submit" value="Enregistrer" class="btn btn-danger"></br>
            </form>

        </div>
    </div>
@endsection
