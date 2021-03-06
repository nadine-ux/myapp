@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Liste des rapports </h3>
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
                                                <th> Date_rapport </th>
                                                <th> Etat </th>
                                                <th>Actions</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rapports as $rapport)
                                                <tr>


                                                    <td>{{ $rapport->pos->Nom_POS }}</td>
                                                    <td>{{ $rapport->user->name }}</td>
                                                    <td>{{ $rapport->updated_at }}</td>
                                                    <td>
                                                        @if ($rapport->Etat)
                                                            <span class="badge badge-success">active</span>
                                                        @else
                                                            <span class="badge badge-danger">inactive</span>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ route('rapports.show', $rapport->id) }}">
                                                            <button class="btn btn-info btn-sm">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                consulter</button>
                                                        </a></td>







                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endsection
