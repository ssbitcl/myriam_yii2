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
                            <div class="card-title card-title2"><?php echo $tag;?></div>
                            <div class="card-body2">

                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/d2_1.jpeg" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-title card-title2">Historial de fallas</div>
                            <div class="card-body2">
                                <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                        <thead>
                                        <tr>

                                            <th>Fecha</th>
                                            <th>Tiempo</th>
                                            <th>Causa</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td> 41303 </td>
                                            <td> 46H</td>
                                            <td> Causa 1</td>
                                        </tr>


                                        <tr class="">
                                            <td> 41303 </td>
                                            <td> 46H</td>
                                            <td> Causa 1</td>
                                        </tr>


                                        <tr class="">
                                            <td> 41303 </td>
                                            <td> 46H</td>
                                            <td> Causa 1</td>
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



