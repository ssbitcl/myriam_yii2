<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Modelos y Alertas';

?>

<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row ">
            <div class="col-3 ">
                <div class="row ">
                    <div class="col-12 grid-margin ">
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
                <div class="row ">
                    <div class="col-12 grid-margin ">
                        <div class="card">
                            <div class="card-title card-title2">Correlaciones</div>
                            <div class="card-body2">
                                <canvas id="scatterChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-5 ">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card no-padding ">
                        <div class="card ">
                            <div class="card-title card-title2">Alarma de Falla</div>

                            <div class="card-body2">
                                <table class="table select-table table3">
                                    <thead>
                                    <tr>

                                        <th>S</th>
                                        <th>Componente</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Presicion</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="">
                                        <td>   <div style="background-color: red; width: 30px; height: 30px; border-radius: 5px;"></div> </td>
                                        <td> <?php echo $comp;?></td>
                                        <td> <?php echo $alarma;?></td>
                                        <td>  <?php echo $fecha;?></td>
                                        <td>  <?php echo $p;?>%</td>
                                    </tr>



                                    </tbody>
                                </table>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card no-padding ">
                        <div class="card ">
                            <div class="card-title card-title2">Variables Monitoreadas</div>
                            <div class="card-body2">
                                <div id="performance-line-legend"></div>
                                <div class="chartjs-wrapper mt-2">
                                    <canvas id="performaneLine"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 grid-margin stretch-card no-padding pe-1">
                        <div class="card">
                            <div class="card-title card-title2">Analisis Descriptivo</div>
                            <div class="card-body2">

                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 grid-margin stretch-card no-padding ps-1">
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
                    <div class="card-title card-title2">Alertas por Fallas ocultas</div>
                    <div class="card-body2">

                        <div class="table-responsiv  mt-1">
                            <table class="table select-table table4">

                                <tbody>
                                <tr class="table-danger2">
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


