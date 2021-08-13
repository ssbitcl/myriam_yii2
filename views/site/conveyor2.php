<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Prescriptivo';
?>

<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card ">
                            <div class="card-title card-title2"><?php echo $tag;?></div>
                            <div class="card-body2">

                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/d2_1.jpeg" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin stretch-card">
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
                                        <?php echo $alarma;?>
                                    </div>
                                    <div class="col-sm-2">
                                        <?php echo $fecha;?>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <p class="text-success"><?php echo $p;?>%</p>
                                            <p><?php echo $vi."/".$vf;?></p>
                                        </div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $p;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Prescriptivo</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Recomendacion</label>
                                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Perfil de Desgaste</div>
                            <div class="card-body2">

                                <canvas id="areaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Composicion de alarma</div>
                            <div class="card-body2">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Maximos admisibles</div>
                            <div class="card-body2">
                                <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                        <thead>
                                        <tr>

                                            <th>Varaibles</th>
                                            <th>Cantidad</th>
                                            <th>unidad</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td> Polines </td>
                                            <td> 46</td>
                                            <td> un/sem</td>
                                        </tr>

                                        <tr class="">
                                            <td> Polines </td>
                                            <td> 46</td>
                                            <td> un/sem</td>
                                        </tr>

                                        <tr class="">
                                            <td> Polines </td>
                                            <td> 46</td>
                                            <td> un/sem</td>
                                        </tr>





                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 grid-margin stretch-card">
                        <div class="card">

                            <div class="card-title card-title2">Acciones recomendadas</div>
                            <div class="card-body2">

                                <div class="table-responsiv  mt-1">
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



                </div>

            </div>

        </div>
    </div>
</div>



