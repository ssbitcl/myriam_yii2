<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Modelos y Alertas';
?>

<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row">
            <div class="col-8 ">
                <div class="row">
                    <div class="col-5 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-title card-title2">CT-03 1524 ST 2500 16+8 DIN X,L: 7.050[m]</div>
                            <div class="card-body2">

                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/d2_1.jpeg" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-title card-title2 row" style="--bs-gutter-x: 0px;">
                                <div class="col-sm-7">Alarma</div>
                                <div class="col-sm-2">Fecha</div>
                                <div class="col-sm-3">Presc</div>
                            </div>
                            <div class="card-body2">
                                <div class="row" style="--bs-gutter-x: 0px; font-size: 0.7em;">
                                    <div class="col-sm-7">
                                        <div style="background-color: red; width: 30px; height: 30px"></div>
                                        Desgaste acelerado de cubierta de carga en ...
                                    </div>
                                    <div class="col-sm-2">
                                        SD W36 2021
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success">79%</p>
                                            <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="home-tab d-sm-flex justify-content-between align-items-start mt-2">
                                    <div class="">
                                        <h4 class="card-title card-title-dash">Variables Monitoreadas</h4>

                                    </div>
                                    <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-2">
                                    <canvas id="performaneLine"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Correlaciones</div>
                            <div class="card-body2">
                                <canvas id="scatterChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Analisis Descriptivo</div>
                            <div class="card-body2">

                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Modelo Predictivo</div>
                            <div class="card-body2">

                                <canvas id="areaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4 grid-margin stretch-card">
                <div class="card ">
                    <div class="card-title card-title2">Todas las Alertas</div>
                    <div class="card-body2">

                        <div class="table-responsive  mt-1">
                            <table class="table select-table">

                                <tbody>
                                <tr class="table-danger">
                                    <td> <i class="mdi mdi-information text-danger typcn-2x"></i> </td>

                                    <td> Falla oculta <div class="badge badge-opacity-dark">Vibraciones</div></td>
                                    <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6" style="">
                                                <h6 class="dropdown-header">Settings</h6>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div></td>
                                </tr>
                                <tr class="table-warning">
                                    <td> <i class="mdi mdi-information text-warning typcn-2x"></i> </td>

                                    <td> Falla oculta <div class="badge badge-opacity-dark">Vibraciones</div></td>
                                    <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6" style="">
                                                <h6 class="dropdown-header">Settings</h6>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div></td>
                                </tr>

                                <tr class="table-success">
                                    <td> <i class="mdi mdi-check text-success typcn-2x"></i> </td>

                                    <td> Falla oculta <div class="badge badge-opacity-dark">Vibraciones</div></td>
                                    <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6" style="">
                                                <h6 class="dropdown-header">Settings</h6>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div></td>
                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



