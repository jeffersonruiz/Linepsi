<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\servicio\models\search\SolicitudCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-cita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitud Cita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSolicitudCita',
            'FechaSolicitudRegistro',
            'IdTipoSolicitudCita',
            'IdPersona',
            'IdDocente',
            // 'IdEstadoSolicitudCita',
            // 'NecesitaConsentimiento',
            // 'IdInstitucion',
            // 'descripcion',
            // 'IdCampoPsicologico',
            // 'IdUsuarioGraba',
            // 'FechaGraba',
            // 'IdUsuarioModifica',
            // 'FechaModifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
