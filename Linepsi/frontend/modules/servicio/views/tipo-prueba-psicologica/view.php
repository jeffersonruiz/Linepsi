<?php

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoPruebaPsicologica */

$this->title = 'Consultar Tipo Prueba Psicologica' . $model->IdTipoPruebaPsicologica;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Prueba Psicologica', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Tipo Prueba Psicologica' : 'Actualizar Tipo Prueba Psicologica' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-10">  

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

                <p>
                    <?= Html::a('Actualizar', ['Update', 'id' => $model->IdTipoPruebaPsicologica], ['class' => 'btn btn-primary']) ?>
                    <?=
                    Html::a('Eliminar', ['Delete', 'id' => $model->IdTipoPruebaPsicologica], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Esta Seguro de Eliminar Este Registro?',
                            'method' => 'post',
                        ],
                    ])
                    ?>
                </p>

                <?php
                $attributes = [
                    [
                        'columns' => [
                            [
                                'attribute' => 'IdTipoPruebaPsicologica',
                                'format' => 'raw',
                                'value' => '<kbd>' . $model->IdTipoPruebaPsicologica . '</kbd>',
                                'labelColOptions' => ['style' => 'width:10%'],
                                'valueColOptions' => ['style' => 'width:10%'],
                                'displayOnly' => true
                            ],
                            [
                                'attribute' => 'NombreTipoPruebaPsicologica',
                                'format' => 'raw',
                                'value' => $model->NombreTipoPruebaPsicologica,
                                'labelColOptions' => ['style' => 'width:15%'],
                                'valueColOptions' => ['style' => 'width:75%'],
                                'displayOnly' => true
                            ],
                        ],
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'Orden',
                                'format' => 'raw',
                                'value' => $model->Orden,
                                'labelColOptions' => ['style' => 'width:10%'],
                                'valueColOptions' => ['style' => 'width:10%'],
                                'displayOnly' => true
                            ],
                            [
                                'attribute' => 'EstadoTipoPruebaPsicologica',
                                'format' => 'raw',
                                'value'=>($model->EstadoTipoPruebaPsicologica == 1) ? 'Activo' : 'Inactivo',
                                'labelColOptions' => ['style' => 'width:10%'],
                                'valueColOptions' => ['style' => 'width:30'],
                                'displayOnly' => true
                            ],
                            [
                                'attribute' => 'IdTipoProceso',
                                'format' => 'raw',
                                'value' => 'NombreTipoProceso',
                                'labelColOptions' => ['style' => 'width:25%'],
                                'valueColOptions' => ['style' => 'width:30%'],
                                'displayOnly' => true
                            ],
                        ],
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'Descripcion',
                                'format' => 'raw',
                                'value' => $model->Descripcion,
                                'labelColOptions' => ['style' => 'width:13%'],
                                'valueColOptions' => ['style' => 'width:87%'],
                                'displayOnly' => true
                            ],
                        ],
                    ],
                        ]
                ?>

                <?=
                DetailView::widget([
                    'model' => $model,
                    'attributes' => $attributes,
                    'mode' => DetailView::MODE_VIEW,
                    /* 'panel'=>[
                      'heading'=>'ID Persona No ' . $model->IdPersona,
                      'type' => DetailView::TYPE_INFO,
                      ], */
                    'bordered' => TRUE,
                    'striped' => FALSE,
                    'condensed' => FALSE,
                    'responsive' => TRUE,
                    'hover' => TRUE,
                    'hAlign' => 'left',
                    'vAlign' => 'middle',
                    'fadeDelay' => 800,
                    'deleteOptions' => [ // your ajax delete parameters
                        'params' => ['id' => $model->IdTipoPruebaPsicologica, 'kvdelete' => true],
                    ],
                    'container' => ['id' => 'kv-demo'],
                    'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])] // your action to delete
                ])
                ?>

            </div>
        </div>
    </div>    
</div>


