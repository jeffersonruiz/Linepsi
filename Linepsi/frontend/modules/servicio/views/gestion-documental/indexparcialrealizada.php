<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\GestionDocumentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Gestion Documentals';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-sm-12">  

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'IdGestionDocumental',
                'vAlign'=>'middle',
                'hAlign'=>'left', 
                'width' => '3',
                
            ],
            [
                'attribute' => 'IdTipoDocumento',
                'value' => 'NombreTipoDocumento',
                'vAlign'=>'middle',
                'hAlign'=>'center', 
                'width' => '12',
            ],
            [
                'attribute' => 'ObservacionesDocumento',
                'vAlign'=>'middle',
                'hAlign'=>'left', 
                'width' => '80',
            ],
            [ 'class' => 'yii\grid\ActionColumn',
                'header' => 'Acción',
                'headerOptions' => ['width' => '5'],
                'template' => '{view} {update}',
                    'buttons' => [
                        
                    ],
                'urlCreator' => function ($action, $model, $key, $index){
                    switch ($action) {
                        case 'view':
                            return Url::toRoute(['/servicio/gestion-documental/view','id' => $model->IdGestionDocumental,'idhistoria'=>$model->IdHistoriaClinica,'opcion'=>2]); 
                        break;
                        case 'update':
                            return Url::toRoute(['/servicio/gestion-documental/update','id' => $model->IdGestionDocumental,'idhistoria'=>$model->IdHistoriaClinica,'opcion'=>2]); 
                        break;

                        default:
                            break;
                    }
        
                 },
            ],
        ],
    ]);
    ?>
</div>




