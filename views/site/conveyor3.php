<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Todas la Variables';
?>

<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="row">
                    <div class="col-sm-12  grid-margin stretch-card">
                        <div class="card ">
                    <div class="card-title card-title2">Dashboar Equipo
                        <div class="badge badge-success" style="float: right;padding: 0.3em;font-size: 10px;">Activo</div></div>
                    <div class="card-body2">

                        <div class="text-center">
                            <img src="<?php echo Url::base();?>/template/images/correa.svg" style="width: 100%;">
                        </div>
                        <div class="card-title card-title2">Información tecnica</div>
                        <table class="table select-table table2">

                            <tbody>
                            <tr class="">
                                <td> Equipo </td>
                                <td> <?php echo $tag;?></td>
                            </tr>
                            <tr class="">
                                <td> Tipo </td>
                                <td> <?php echo $tag;?></td>
                            </tr>
                            <tr class="">
                                <td> Descripcion </td>
                                <td> <?php echo $tag;?></td>
                            </tr>
                            <tr class="">
                                <td> Largo </td>
                                <td> <?php echo $tag;?></td>
                            </tr>
                            <tr class="">
                                <td> Proxima Mantencion </td>
                                <td> <?php echo $tag;?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12  grid-margin stretch-card">
                        <div class="card">

                            <div class="card-title card-title2">Acciones recomendadas</div>
                            <div class="card-body2">

                                <div class="table-responsiv  mt-1">
                                    <table class="table select-table table3">

                                        <tbody>
                                        <tr class="">
                                            <td> 02 Mar </td>

                                            <td> Duracion 10H <div class="badge badge-opacity-black">Desgaste</div></td>
                                            <td> <i class="mdi mdi-eye text-white typcn-1-5x"></i></td>
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

                                            <td> Duracion 10H <div class="badge badge-opacity-black">Desgaste</div></td>
                                            <td> <i class="mdi mdi-eye text-white typcn-1-5x"></i></td>
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

                                            <td> Duracion 10H <div class="badge badge-opacity-black">Desgaste</div></td>
                                            <td> <i class="mdi mdi-eye text-white typcn-1-5x"></i></td>
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
            <div class="col-sm-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-title card-title2">Lectura variables</div>
                    <div class="card-title card-title2">Temperaturas</div>
                    <div class="card-body2">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="card-title card-title2">Corrientes</div>
                    <div class="card-body2">
                        <canvas id="lineChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
                <div class="card ">
                    <div class="card-title card-title2">Alertas por Fallas ocultas</div>
                    <div class="card-body2">
                        <div class="row text-center row-alta">
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-information text-danger typcn-1-5x"></i></div>
                            <div class="col-sm-8 no-margin no-padding"> Falla oculta <div class="badge badge-opacity-black">Vibraciones</div></div>
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-eye text-white typcn-1-5x"></i></div>
                            <div class="col-sm-2 no-margin no-padding">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </div>
                            </div>
                        </div>
                        <div class="row text-center row-media">
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-information text-danger typcn-1-5x"></i></div>
                            <div class="col-sm-8 no-margin no-padding"> Falla oculta <div class="badge badge-opacity-black">Vibraciones</div></div>
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-eye text-white typcn-1-5x"></i></div>
                            <div class="col-sm-2 no-margin no-padding">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </div>
                            </div>
                        </div>
                        <div class="row text-center row-baja">
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-information text-warning typcn-1-5x"></i></div>
                            <div class="col-sm-8 no-margin no-padding"> Falla oculta <div class="badge badge-opacity-black">Vibraciones</div></div>
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-eye text-white typcn-1-5x"></i></div>
                            <div class="col-sm-2 no-margin no-padding">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </div>
                            </div>
                        </div>
                        <div class="row text-center row-buena">
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-check-circle text-success typcn-1-5x"></i></div>
                            <div class="col-sm-8 no-margin no-padding"> Falla oculta <div class="badge badge-opacity-black">Vibraciones</div></div>
                            <div class="col-sm-1 no-margin no-padding"><i class="mdi mdi-eye text-white typcn-1-5x"></i></div>
                            <div class="col-sm-2 no-margin no-padding">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-xs2 dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



