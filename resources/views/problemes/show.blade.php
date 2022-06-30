@extends('layouts.adminposr')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Consulter rapport</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Description : {{ $rapport->description }}</h5>
                <h5 class="card-title">Appartient a pointe de vente : {{ $rapport->pos->Nom_POS }}</h5>
                <h5 class="card-title">Etablir par animateur : {{ $rapport->user->name }}</h5>
                <p class="card-text">Date_rapport : {{ $rapport->updated_at }}</p>
                <p class="card-text">Etat : @if ($rapport->Etat)
                        <span class="badge badge-success">active</span>
                    @else
                        <span class="badge badge-danger">inactive</span>
                    @endif
                </p>
            </div>
            </hr>
        </div>
    </div>
@endsection
