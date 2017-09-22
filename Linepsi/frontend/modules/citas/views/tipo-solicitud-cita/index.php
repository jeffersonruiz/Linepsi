<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\search\TipoSolicitudCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Solicitud Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-solicitud-cita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Solicitud Cita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTipoSolicitudCita',
            'NombreTipoSolicitudCita',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
