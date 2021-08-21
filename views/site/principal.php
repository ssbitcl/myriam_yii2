<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Principal';
?>
<div class="main-panel">
    <div class="content-wrapper2">
        <div class="row ">
            <div class="col-4 grid-margin ">
                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-title card-title2" >Mayores Detenciones</div>
                            <div class="card-body2">

                                <div class="table-responsiv  mt-1">
                                    <table class="table select-table table4">
                                        <thead>
                                        <tr>
                                            <th>Equipo</th>
                                            <th>Tipo</th>
                                            <th>Q Detencion</th>
                                            <th>Tiempo</th>
                                            <th>MTBF</th>
                                            <th>MTTR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 grid-margin  ">
                        <div class="card ">
                            <div class="card-title card-title2" >Distribucion anomalias</div>
                            <div class="card-body2">

                                <div id="container_donu"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-title card-title2" >Equipos con mas anomalias</div>
                            <div class="card-body2">

                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-title card-title2" >Alertas por falla ocultas</div>
                            <div class="card-body2">

                                <div class="table-responsiv  mt-1">
                                    <table class="table select-table table4">
                                        <thead>
                                        <tr>
                                            <th>Equipo</th>
                                            <th>Tipo</th>
                                            <th>Pfalla</th>
                                            <th>Precision</th>
                                            <th>Descripcion</th>
                                            <th>Modo F</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>
                                        <tr>
                                            <td> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1',
                                                    'tag'=>'CH001',
                                                    'comp'=>'Motor',
                                                    'alarma'=>'Fisura Corona-piñon',
                                                    'fecha'=>'W32 (Sep 2021)',
                                                    'vi'=>'85',
                                                    'vf'=>'162',
                                                    'p'=>'79',
                                                ]);?>">CH001</a> </td>
                                            <td> Motor </td>
                                            <td> 184 </td>

                                            <td> 2774 </td>
                                            <td> 301 </td>
                                            <td> 301 </td>

                                        </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-8 grid-margin ">

                <div class="row">
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Pala 1</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/pala.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Pala 2</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/pala.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 1</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 2</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 3</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 4</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 5</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">
                                <div class="card-title card-title2" >Camion 6</div>
                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/camion.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card ">
                        <div class="card ">
                            <div class="card-body2">

                                <div class="text-center">
                                    <img src="<?php echo Url::base();?>/template/images/diagrama.svg?v=2" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
