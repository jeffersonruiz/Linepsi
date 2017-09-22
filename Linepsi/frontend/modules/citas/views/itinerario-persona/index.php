<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\search\ItinerarioPersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itinerario Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Itinerario Persona' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">   

<!--                <h1><?= Html::encode($this->title) ?></h1>-->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Registrar Itinerario', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn',
                            'headerOptions' => ['width' => '10']
                        ],
                        [
                            'attribute'=>'IdItinerarioPersona',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'DiaSemana',
                            'options' => ['width' => '150'],
                        ], 
                        [
                            'attribute'=>'HoraInicio',
                            'options' => ['width' => '150'],
                        ], 
                        [
                            'attribute'=>'HoraFin',
                            'options' => ['width' => '150'],
                        ], 
                   
//                        'IdUsuarioGraba',
//                        // 'FechaGraba',
//                        // 'IdUsuarioModifica',
//                        // 'FechaModifica',
                        [   'class' => 'yii\grid\ActionColumn',
                            'header'=>'Acción',
                            'headerOptions' => ['width' => '50'],
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

