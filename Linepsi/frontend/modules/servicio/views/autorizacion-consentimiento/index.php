<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\AutorizacionConsentimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autorizacion Consentimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorizacion-consentimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Autorizacion Consentimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAutorizacionConsentimiento',
            'IdSolicitudCita',
            'Respuesta',
            'NombreFirma',
            'RutaDocumento',
            // 'NombreDocumento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
