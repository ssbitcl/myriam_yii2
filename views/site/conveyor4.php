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
                    <div class="card-title card-title2">Plan de mitigacion</div>
                    <div class="card-body2">
                        <div class="row" style="--bs-gutter-x: 0px; font-size: 12px; text-align: center;">
                            <div class="col-sm-3" style="background: green;">Sin Riesgo</div>
                            <div class="col-sm-3" style="background: yellow;">Programable</div>
                            <div class="col-sm-3" style="background: saddlebrown;">Urgente</div>
                            <div class="col-sm-3" style="background: red;">Inmediato</div>
                        </div>

                        <div class="row" style="--bs-gutter-x: 0px; font-size: 12px; text-align: center;">
                            <div class="col-sm-3" >Inspeccion tenica o confiabilidad para encontrar causa raiz</div>
                            <div class="col-sm-3" >Asear cinta, ajustar raspadores, alinear cinta</div>
                            <div class="col-sm-3" >Intervenir con equipo denetendo, ralisar reparacion en caliente</div>
                            <div class="col-sm-3" >Cambio de cinta</div>

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Retroalimentacion</label>
                            <textarea rows="5" style="height: unset;"  class="form-control" id="exampleInputUsername1" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername2">Raelizar una recomentadion a MyRIAM</label>
                            <textarea rows="5" style="height: unset;"  class="form-control" id="exampleInputUsername1" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



