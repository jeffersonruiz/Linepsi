<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\TipoDocumentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Documento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Tipo Documento' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Registrar Tipo Documento', ['create'], ['class' => 'btn btn-success']) ?>
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
                            'attribute' => 'IdTipoDocumento',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute' => 'NombreTipoDocumento',
                            'options' => ['width' => '250'],
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


