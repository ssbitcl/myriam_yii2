<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Todas la Variables';
?>
<style>
    #container_arbol h4, #container_arbol p{
        font-size: 10px ;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card">
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
                    <div class="col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Historial de fallas</div>
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
            <div class="col-sm-4  grid-margin stretch-card">
                <div class="card ">
                    <div class="card-title card-title2">Arbol de falla</div>
                    <div class="card-body2">


                        <div id="container_arbol"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
                <div class="card ">
                    <div class="card-title card-title2">Plan de mitigacion</div>
                    <div class="card-body2">
                        <div class="row" style="--bs-gutter-x: 0px; font-size: 12px; text-align: center;">
                            <div class="col-sm-3" style="background: green;border-radius: 5px 0px 0px 5px;">Sin Riesgo</div>
                            <div class="col-sm-3" style="background: yellow;">Programable</div>
                            <div class="col-sm-3" style="background: saddlebrown;">Urgente</div>
                            <div class="col-sm-3" style="background: red;border-radius: 0px 5px 5px 0px;">Inmediato</div>
                        </div>

                        <div class="row" style="--bs-gutter-x: 0px; font-size: 12px; text-align: center; color white;">
                            <div class="col-sm-3" style="color: white;">Inspeccion tenica o confiabilidad para encontrar causa raiz</div>
                            <div class="col-sm-3" style="color: white;">Asear cinta, ajustar raspadores, alinear cinta</div>
                            <div class="col-sm-3" style="color: white;">Intervenir con equipo denetendo, ralisar reparacion en caliente</div>
                            <div class="col-sm-3" style="color: white;">Cambio de cinta</div>

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Retroalimentacion</label>
                            <textarea rows="5" style="height: unset;"  class="form-control" id="exampleInputUsername1" placeholder=""></textarea>
                            <button type="button" class="btn btn-xs btn-secondary" style="float: right;">Editar</button>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername2">Raelizar una recomentadion a MyRIAM</label>
                            <textarea rows="5" style="height: unset;"  class="form-control" id="exampleInputUsername1" placeholder=""></textarea>
                            <button type="button" class="btn btn-xs btn-secondary" style="float: right;">Editar</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



