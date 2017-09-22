<?php

use yii\helpers\Html;
//use yii\grid\GridView;

use kartik\grid\ExpandRowColumn;
use kartik\grid\GridView;

use frontend\modules\citas\models\search\SolicitudCitaSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\HistoriaClinicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historia Clinicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Historias Clinicas' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?php //Html::a('Create Historia Clinica', ['create'], ['class' => 'btn btn-success']) ?>
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
                            'attribute'=>'NumeroDocumento',
                            'label' => 'Documento',
                            'options' => ['width' => '100'],
                            'format'=>['decimal',0],
                            'contentOptions' =>['align' => 'right'],
                        ],
                        [
                            'attribute'=>'NombrePaciente',
                            'label' => 'Paciente',
                            'options' => ['width' => '230'],
                        ],
                        [
                            'attribute'=>'NombreGenero',
                            'label' => 'Genero',
                            'options' => ['width' => '70'],
                        ],
                        [
                            'attribute'=>'Estado',
                            'options' => ['width' => '70'],
                        ],
                        [
                            'class'=>ExpandRowColumn::className(),
                            'width'=>'50px',
                            'value'=>function ($model, $key, $index, $column) {
                                return GridView::ROW_COLLAPSED;
                                
                            },
                            'detail'=>function ($model, $key, $index, $column){
                                
                                    $searchModelCitas = new SolicitudCitaSearch();
                                    $dataProvaiderCitas = $searchModelCitas->searchCitasXPersonas(Yii::$app->request->queryParams, $model->IdPersonaSolicita);
                                
                                
                                 return Yii::$app->controller->renderPartial('indexcita', ['searchModel' =>  $searchModelCitas,
                                                                                                                    'dataProvider' => $dataProvaiderCitas]);
                            },
                            'headerOptions'=>['class'=>'kartik-sheet-style'],
                            'expandOneOnly'=>true
                        ],
                        
//                        [   'class' => 'yii\grid\ActionColumn',
//                            'header'=>'Acción',
//                            'headerOptions' => ['width' => '50'],
//                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>




