<?php

use yii\helpers\Html;
use yii\helpers\Url;

//use yii\grid\GridView;

use kartik\detail\DetailView;
//use kartik\grid\GridView;
use kartik\grid\GridView;
use kartik\grid\ExpandRowColumn;

use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;

use frontend\modules\servicio\models\search\GestionDocumentalSearch;





/* @var $this yii\web\View */
/* @var $$modelHistoria frontend\modules\citas\models\SolicitudCita */

if($opcion == 1){
    $this->title = 'Histortia Clinica';
    $this->params['breadcrumbs'][] = ['label' => 'Solicitud Cita', 'url' => ['/Citas/solicitud-cita/index']];
    $this->params['breadcrumbs'][] = $this->title;
}else{
    $this->title = 'Histortia Clinica';
    $this->params['breadcrumbs'][] = ['label' => 'Listado Historia Clinica', 'url' => ['/servicio/historia-clinica/index']];
    $this->params['breadcrumbs'][] = $this->title;
}


?>
<div class="panel panel-primary">
    
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Histortia Clinica N°: ' . $modelHistoria->IdHistoriaClinica ?></h3>
    </div>
    
    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

                <?php
                
                    $attributes = [
                        [
                            'group'=>true,
                            'label'=>'Sección 1: Información Basica Historia Clinica',
                            'rowOptions'=>['class'=>'info']
                        ],
                        [
                            'columns' => [
                                [
                                    'attribute'=>'IdHistoriaClinica',
                                    'label' => 'N°',
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->IdHistoriaClinica,
                                    'labelColOptions'=>['style'=>'width:5%'],
                                    'valueColOptions'=>['style'=>'width:5%'], 
                                    'displayOnly'=>true
                                ],
                                [
                                    'attribute'=>'IdSolicitudCita', 
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->IdSolicitudCita,
                                    'labelColOptions'=>['style'=>'width:7%'],
                                    'valueColOptions'=>['style'=>'width:5%'], 
                                    'displayOnly'=>true
                                ],
                                [
                                    'attribute'=>'Fecha', 
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->Fecha,
                                    'labelColOptions'=>['style'=>'width:10%'],
                                    'valueColOptions'=>['style'=>'width:20%'], 
                                    'displayOnly'=>true
                                ],
                                [
                                    'attribute'=>'IdConcepto', 
                                    'format'=>'raw', 
                                    'value'=> $modelHistoria->NombreConcepto,
                                    'labelColOptions'=>['style'=>'width:10%'],
                                    'valueColOptions'=>['style'=>'width:20%'], 
                                    'displayOnly'=>true
                                ],
                            ],
                            
                        ],
                        [
                            'columns' => [
                                [
                                    'attribute'=>'IdPersonaSolicita', 
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->NombrePersona,
                                    'labelColOptions'=>['style'=>'width:10%'],
                                    'valueColOptions'=>['style'=>'width:30%'], 
                                    'displayOnly'=>true
                                ],
                                [
                                    'attribute'=>'IdDocente', 
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->NombreDocente,
                                    'labelColOptions'=>['style'=>'width:10%'],
                                    'valueColOptions'=>['style'=>'width:30%'], 
                                    'displayOnly'=>true
                                ],
                                
                            ],
                            
                        ],
                        [
                            'columns' => [
                                [
                                    'attribute'=>'ObservacionesGeneral', 
                                    'format'=>'raw', 
                                    'value'=>$modelHistoria->ObservacionesGeneral,
                                    'labelColOptions'=>['style'=>'width:10%'],
                                    'valueColOptions'=>['style'=>'width:100%'], 
                                    'displayOnly'=>true
                                ],
                                
                                
                            ],
                            
                        ],
                        
                    ]
                
                ?>
                    
                <?=
                DetailView::widget([
                    'model' => $modelHistoria,
                    'attributes' => $attributes,
                    'mode' => DetailView::MODE_VIEW,
                    /*'panel'=>[
                        'heading'=>'ID Persona No ' . $model->IdPersona,
                        'type' => DetailView::TYPE_INFO,
                    ],*/
                    'bordered' => TRUE,
                    'striped' => FALSE,
                    'condensed' => FALSE,
                    'responsive' => TRUE,
                    'hover' => TRUE,
                    'hAlign'=> 'left',
                    'vAlign'=>'middle',
                    'fadeDelay'=>800,
                    'deleteOptions'=>[ // your ajax delete parameters
                        'params' => ['id' => $modelHistoria->IdHistoriaClinica, 'kvdelete'=>true],
                    ],
                    'container' => ['id'=>'kv-demo'],
                    'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])] // your action to delete
                ]) 

                ?>

            </div>
        </div>
    </div>    
</div>


<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Pruebas Psicologicas' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

                 <?php
                 
                    //$idHistoriaClinica = $modelHistoria->IdHistoriaClinica;
                 
                 ?>
                
                <?=
                GridView::widget([
                    'dataProvider' => $datProviderTipoPrueba,
                    'filterModel' => $searchModelTipoPrueba,
                    'summary' => "Mostrando {begin} - {end} de {totalCount} Registro(s)",
                    'columns' => [
                        [
                            'attribute' => 'NombreTipoPruebaPsicologica',
                            'options' => ['width' => '100'],
                        ],
                        [
                            'attribute' => 'Orden',
                            'options' => ['width' => '100'],
                        ],
                        [
                            'attribute' => 'IdTipoProceso',
                            'value' => 'NombreTipoProceso',
                            'options' => ['width' => '100'],
                        ],
                        
                        [
                            'attribute' => 'EstadoTipoPruebaPsicologica',
                            'options' => ['width' => '100'],
                            'label' => 'Estado',
                            'filter'=>array("1"=>"Activo","0"=>"Inactivo"),
                            'content'=> function($data){
                                return ($data->EstadoTipoPruebaPsicologica == 1) ? 'Activo' : 'Inactivo';
                            },
                        ],
                        [
                            'class'=>ExpandRowColumn::className(),
                            'width'=>'50px',
                            'value'=>function ($model, $key, $index, $column) {
                                return GridView::ROW_COLLAPSED;
                                
                            },
                            'detail'=>function ($model, $key, $index, $column) use ($modelHistoria) {
                                
                                 $searchModelDocumento = new GestionDocumentalSearch();
                                 $datProviderDocumento = $searchModelDocumento->search(Yii::$app->request->queryParams, $model->IdTipoPruebaPsicologica, $modelHistoria->IdHistoriaClinica);
                                 
                                 return Yii::$app->controller->renderPartial('/gestion-documental/indexparcialrealizada', ['searchModel' =>  $searchModelDocumento,
                                                                                                          'dataProvider' => $datProviderDocumento,
                                                                                                          'idprueba' => $model->IdTipoPruebaPsicologica,
                                                                                                          'idhistoria' =>$modelHistoria->IdHistoriaClinica]);
                            },
                            'headerOptions'=>['class'=>'kartik-sheet-style'],
                            'expandOneOnly'=>true
                        ],
                        
                    ],
                    'resizableColumns'=>true,
                    'bordered'=>true,
                    'striped'=>false,
                    'condensed'=>true,
                    'responsive'=>false,
                    'hover'=>false,
                    'showPageSummary'=>false,              
                   
                ]);
                ?>
            </div>
        </div>
    </div>
</div>


