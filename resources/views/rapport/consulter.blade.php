@extends('layouts.admin')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Rapport </h3>
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

                                        <!-- end col-->
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th> numero </th>


                                                <th> Date</th>
                                                <th> probleme  </th>
                                                <th> action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                                </td>
                                                <td></td>
                                                <td> </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                                </td>
                                                <td> Messsy Adam </td>
                                                <td> July 1, 2015 </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>



                                            </tr>
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endsection
