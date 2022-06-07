@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>

    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">$ 15,0000</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Weekly Orders <i
                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">45,6334</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                        <div id="visit-sale-chart-legend"
                            class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rapport des visites</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> nom de POS</th>


                                    <th> Date</th>
                                    <th> Etat </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                                    </td>
                                    <td> Herman Beck </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="assets/images/faces-clipart/pic-2.png" alt="image" />
                                    </td>
                                    <td> Messsy Adam </td>
                                    <td> July 1, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>



                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="assets/images/faces-clipart/pic-3.png" alt="image" />
                                    </td>
                                    <td> John Richards </td>
                                    <td> Apr 12, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Problemes</h4>
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> nom de POS</th>
                                    <th>probleme</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>53275531</td>
                                    <td>Activation de pus</td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                </tr>
                                <tr>
                                    <td>Messsy</td>
                                    <td>53275532</td>
                                    <td>Activation de pus</td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>53275533</td>
                                    <td>Activation de pus</td>
                                    <td><label class="badge badge-info">Fixed</label></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>53275534</td>
                                    <td>Activation de pus</td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td>Activation de pus</td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- content-wrapper ends -->

    </div>
@endsection