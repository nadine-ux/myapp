@extends('layouts.adminposr')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Modifier un Pos</div>
        <div class="card-body">

            <form action="{{ route('poss.update', [$pos->id]) }}" method="post">
                {!! csrf_field() !!}
                @method('put')
                <label>Nom_POS</label></br>
                <input type="text" name="Nom_POS" id="Nom_POS" value="{{ $pos->Nom_POS }}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="Adresse" id="Adresse" value="{{ $pos->Adresse }}" class="form-control"></br>
                <label>Statut</label></br>
                <input type="text" name="Statut" id="Statut" value="{{ $pos->Statut }}" class="form-control"></br>

                <label>telephone</label></br>
                <input type="text" name="telephone" id="telephone" value="{{ $pos->telephone }}"
                    class="form-control"></br>

                <input type="submit" value="Enregistrer" class="btn btn-danger"></br>
            </form>

        </div>
    </div>
@endsection
