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
                    <div class="col-4 ">
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
                                                <td>   <div style="background-color: red; width: 10px; height: 10px; border-radius: 5px;"></div> </td>
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
                                    <div class="card-title card-title2">Variables monotoreadas</div>

                                    <div class="card-body2" >
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Prescriptivo</label>
                                            <textarea rows="2" style="height: unset;"  class="form-control" id="exampleInputUsername1" placeholder=""></textarea>
                                            <button type="button" class="btn btn-xs btn-secondary" style="float: right;">Editar</button>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername2">Recomendacion</label>
                                            <textarea rows="2" style="height: unset;"  class="form-control" id="exampleInputUsername2" placeholder=""></textarea>
                                            <button type="button" class="btn btn-xs btn-secondary" style="float: right;">Editar</button>

                                        </div>
                                    </div>
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
                    <div class="col-4 grid-margin stretch-card no-padding">
                        <div class="card">
                            <div class="card-title card-title2">Maximos admisibles</div>
                            <div class="card-body2">
                                <div class="table-responsive  mt-1">
                                    <table class="table select-table table3">
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

        </div>
    </div>
</div>



