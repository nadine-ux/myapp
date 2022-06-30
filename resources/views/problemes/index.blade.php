@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Liste des problemes </h3>
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


                                            <!-- end col-->
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> Non de POS </th>
                                                <th> Non animateur </th>
                                                <th> Type de probleme </th>
                                                <th> mettre à jour </th>
                                                <th> Etat </th>




                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($problemes as $probleme)
                                                <tr>


                                                    <td>{{ $probleme->pos->Nom_POS }}</td>
                                                    <td>{{ $probleme->user->name }}</td>
                                                    <td>{{ $probleme->type }}</td>
                                                    <td>{{ $probleme->updated_at }}</td>
                                                    <td>
                                                        @if ($probleme->Etat)
                                                            <span class="badge badge-success">Régler</span>
                                                        @else
                                                            <span class="badge badge-danger">Encore</span>
                                                        @endif
                                                    </td>








                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endsection
