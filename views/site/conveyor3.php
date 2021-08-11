<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Todas la Variables';
?>

<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row">
            <div class="col-sm-8 ">
                <div class="row">
                    <div class="col-sm-6 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-title card-title2">CT-03 1524 ST 2500 16+8 DIN X,L: 7.050[m]</div>
                            <div class="card-body2">

                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/d2_1.jpeg" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Temperaturas</div>
                            <div class="card-body2">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6  grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Acciones recomendadas</div>
                            <div class="card-body2">
                                <div class="table-responsiv mt-1">
                                    <table class="table select-table">

                                        <tbody>
                                        <tr class="">
                                            <td> 02 Mar </td>

                                            <td> Mantencion programada</td>
                                            <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        <tr class="">
                                            <td> 02 Mar </td>

                                            <td> Mantencion programada</td>
                                            <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        <tr class="">
                                            <td> 02 Mar </td>

                                            <td> Mantencion programada</td>
                                            <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="col-sm-6  grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Corrientes</div>
                            <div class="card-body2">
                                <canvas id="lineChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
                <div class="card ">
                    <div class="card-title card-title2">Todas las Alertas</div>
                    <div class="card-body2">


                        <div class="table-responsiv  mt-1">
                            <table class="table select-table">

                                <tbody>
                                <tr class="table-danger">
                                    <td> <i class="mdi mdi-information text-danger typcn-2x"></i> </td>

                                    <td> Falla oculta <div class="badge badge-opacity-dark">Vibraciones</div></td>
                                    <td> <i class="mdi mdi-eye text-primary typcn-2x"></i></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <button class="btn btn-primary btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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



