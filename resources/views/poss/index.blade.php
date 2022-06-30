@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Liste des points de ventes </h3>
    </div>

    <!-- container -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-xl-8">
                                            <form
                                                class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                                <div class="col-auto">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <input type="search" class="form-control" id="inputPassword2"
                                                        placeholder="Search...">
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center">
                                                        <label for="status-select" class="me-2">Status</label>
                                                        <select class="form-select" id="status-select">
                                                            <option selected="">Choose...</option>
                                                            <option value="1">zone 1</option>
                                                            <option value="2">zone 2</option>
                                                            <option value="3">zone 3</option>
                                                            <option value="4">zone 4</option>
                                                            <option value="5">zone 5</option>
                                                            <option value="6">zone 6</option>
                                                            <option value="6">zone 6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-4">
                                            <a class="nav-link" href="{{ route('poss.create') }}">
                                                <div class="text-xl-end mt-xl-0 mt-2">
                                                    <button type="button" class="btn btn-danger mb-2 me-2"><i
                                                            class="mdi mdi-basket me-1"></i> Ajouter POS</button>

                                                </div>
                                            </a>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>


                                                <th>Nom de POS</th>
                                                <th> Address</th>
                                                <th> nom de animateur </th>
                                                <th>telephone</th>
                                                <th>Etat</th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($poss as $pos)
                                                <tr>


                                                    <td>
                                                        {{ $pos->Nom_POS }}
                                                    </td>
                                                    <td>{{ $pos->Adresse }}</td>
                                                    <td>{{ $pos->user->name }}</td>
                                                    <td>0{{ $pos->telephone }}</td>


                                                    @if ($pos->Statut == 'active')
                                                        <td><span class="badge badge-success">{{ $pos->Statut }}</span>
                                                        </td>
                                                    @else
                                                        <td> <span class="badge badge-danger">{{ $pos->Statut }}</span>
                                                        </td>
                                                    @endif

                                                    <td>
                                                        <a href="{{ route('poss.edit', $pos->id) }}">

                                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>
                                                                Modifier</button>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('poss.destroy', $pos) }}"accept-charset="UTF-8"
                                                            style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                title="Delete Student" onclick="return confirm("Confirm
                                                                delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                Supprimer</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                </div>
                            </div>
                        @endsection
