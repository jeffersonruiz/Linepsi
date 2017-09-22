<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\TipoPruebaPsicologicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Prueba Psicologicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Tipo Prueba Psicologicas' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Registrar Tipo Prueba Psicologica', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'summary' => "Mostrando {begin} - {end} de {totalCount} Registro(s)",
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn',
                            'headerOptions' => ['width' => '10']
                        ],
                        [
                            'attribute' => 'IdTipoPruebaPsicologica',
                            'options' => ['width' => '50'],
                        ],
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
                        ['class' => 'yii\grid\ActionColumn',
                            'header' => 'Acción',
                            'headerOptions' => ['width' => '100'],
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>


