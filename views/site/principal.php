<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title='Principal';
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Diagrama en Proceso</h4>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo Url::base();?>/template/images/d1.jpeg">
                        </div>
                        <div class="table-responsive  mt-1">
                            <table class="table select-table">
                                <thead>
                                <tr>
                                    <th>Tag</th>
                                    <th>Comp</th>
                                    <th>Alarma</th>
                                    <th>IC</th>
                                    <th>F. Alarma</th>
                                    <th>F. Mtto</th>
                                    <th>Presc</th>
                                    <th>Prescriptivo</th>
                                    <th>Recomendacion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> CH001 </td>
                                    <td> Motor </td>
                                    <td> Fisura Corona-piñon </td>
                                    <td > <div style="background-color: red; width: 30px; height: 30px"></div> </td>
                                    <td> W32 (Sep 2021) </td>
                                    <td> SD W36 2021 </td>
                                    <td>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>T eje. Vibraciones</td>
                                    <td><div class="badge badge-opacity-warning">Inpeccionar</div></td>
                                </tr>
                                <tr>
                                    <td> CT001 </td>
                                    <td> Cinta </td>
                                    <td> Desgaste </td>
                                    <td > <div style="background-color: yellow; width: 30px; height: 30px"></div> </td>
                                    <td> W32 (Sep 2021) </td>
                                    <td> SD W36 2021 </td>
                                    <td>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">92%</p>
                                                <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>T eje. Vibraciones</td>
                                    <td><div class="badge badge-opacity-danger">Cambio</div></td>
                                </tr>
                                <tr>
                                    <td> CH001 </td>
                                    <td> Motor </td>
                                    <td> Fisura Corona-piñon </td>
                                    <td > <div style="background-color: orange; width: 30px; height: 30px"></div> </td>
                                    <td> W32 (Sep 2021) </td>
                                    <td> SD W36 2021 </td>
                                    <td>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>T eje. Vibraciones</td>
                                    <td><div class="badge badge-opacity-warning">Inpeccionar</div></td>
                                </tr>
                                <tr>
                                    <td> CH001 </td>
                                    <td> Motor </td>
                                    <td> Fisura Corona-piñon </td>
                                    <td > <div style="background-color: red; width: 30px; height: 30px"></div> </td>
                                    <td> W32 (Sep 2021) </td>
                                    <td> SD W36 2021 </td>
                                    <td>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>T eje. Vibraciones</td>
                                    <td><div class="badge badge-opacity-warning">Inpeccionar</div></td>
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
