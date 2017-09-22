<?php

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoDocumento */

$this->title = 'Consultar Tipo Documento' . $model->IdTipoDocumento;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Tipo Documento' : 'Actualizar Tipo Documento' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-10">  

<!--                <h1><?= Html::encode($this->title) ?></h1>-->

                <p>
                    <?= Html::a('Actualizar', ['update', 'id' => $model->IdTipoDocumento], ['class' => 'btn btn-primary']) ?>
                    <?=
                    Html::a('Eliminar', ['delete', 'id' => $model->IdTipoDocumento], [
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
                                'attribute' => 'IdTipoDocumento',
                                'format' => 'raw',
                                'value' => '<kbd>' . $model->IdTipoDocumento . '</kbd>',
                                'labelColOptions' => ['style' => 'width:13%'],
                                'valueColOptions' => ['style' => 'width:83%'],
                                'displayOnly' => true
                            ],
                          ],  
                        ],
                        [
                          'columns' => [
                              [
                                'attribute' => 'NombreTipoDocumento',
                                'format' => 'raw',
                                'value' => $model->NombreTipoDocumento,
                                'labelColOptions' => ['style' => 'width:25%'],
                                'valueColOptions' => ['style' => 'width:75%'],
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
                        'params' => ['id' => $model->IdTipoDocumento, 'kvdelete' => true],
                    ],
                    'container' => ['id' => 'kv-demo'],
                    'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])] // your action to delete
                ])
               
                ?>

            </div>
        </div>
    </div>    
</div>


