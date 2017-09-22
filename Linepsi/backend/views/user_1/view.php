<?php

use yii\helpers\Html;
use yii\helpers\Url;

//use yii\widgets\DetailView;
use kartik\detail\DetailView;

use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Consultar Usuario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <!--
    <h1><?= Html::encode($this->title) ?></h1>
    -->

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta Seguro de Eliminar Este Registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
        $attributes = [
            [
                'group'=>true,
                'label'=>'Sección 1: Información Usuario',
                'rowOptions'=>['class'=>'info']
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'id', 
                        'format'=>'raw', 
                        'value'=>'<kbd>'.$model->id.'</kbd>',
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:5%'], 
                        'displayOnly'=>true
                    ],
                    [
                        'attribute'=>'documento', 
                        'format'=>'raw', 
                        'value'=>$model->documento,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:10%'], 
                        'displayOnly'=>true
                    ],                       
                    [
                        'attribute'=>'primernombre', 
                        'format'=>'raw', 
                        'value'=>$model->primernombre,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:14%'], 
                        'displayOnly'=>true
                    ],                       
                    [
                        'attribute'=>'segundonombre', 
                        'format'=>'raw', 
                        'value'=>$model->segundonombre,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:14%'], 
                        'displayOnly'=>true
                    ],                             
                    [
                        'attribute'=>'primerapellido', 
                        'format'=>'raw', 
                        'value'=>$model->primerapellido,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:14%'], 
                        'displayOnly'=>true
                    ],
                    [
                        'attribute'=>'segundoapellido', 
                        'format'=>'raw', 
                        'value'=>$model->segundoapellido,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:14%'], 
                        'displayOnly'=>true
                    ],                    
                ],    
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'username', 
                        'format'=>'raw', 
                        'label' => 'Usuario',
                        'value'=>  $model->username,
                        'labelColOptions'=>['style'=>'width:5%'],
                        'valueColOptions'=>['style'=>'width:10%'], 
                        'displayOnly'=>true
                    ],                                                                                             
                    [
                        'attribute'=>'email', 
                        'format'=>'raw', 
                        'value'=>$model->email,
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:20%'], 
                        'displayOnly'=>true
                    ],
                    [
                        'attribute'=>'rol_id', 
                        'format'=>'raw', 
                        'value'=>$model->NombreRol,
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],                                                     
                    [
                        'attribute'=>'status', 
                        'format'=>'raw', 
                        'value'=>  User::getNombreStatus($model->status),
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],                                                                         
                ],
            ],
            [
                'group'=>true,
                'label'=>'Sección 2: Información Auditoria',
                'rowOptions'=>['class'=>'info']
            ],   
            [
                'columns' => [
                    [
                        'attribute'=>'created_at', 
                        'label' => 'Fecha Graba',
                        'value'=>  $model->created_at,
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],
                    [
                        'attribute'=>'IdUsuarioGraba', 
                        'label' => 'Usuario Graba',
                        'value'=>  User::getNombreUsuarioCompleto($model->IdUsuarioGraba),
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],                    
                    [
                        'attribute'=>'updated_at', 
                        'label' => 'Fecha Modifica',
                        'value'=>  $model->updated_at,
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],                    
                    [
                        'attribute'=>'IdUsuarioModifica', 
                        'label' => 'Usuario Modifica',
                        'value'=>  User::getNombreUsuarioCompleto($model->IdUsuarioModifica),
                        'labelColOptions'=>['style'=>'width:10%'],
                        'valueColOptions'=>['style'=>'width:15%'], 
                        'displayOnly'=>true
                    ],                                        
                ],    
            ],            
        ]
    ?>
    
    <?= DetailView::widget([
        'model' => $model,
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
            'params' => ['id' => $model->id, 'kvdelete'=>true],
        ],
        'container' => ['id'=>'kv-demo'],
        'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])] // your action to delete
    ]) ?>
    
</div>
