<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\SolicitudCita */

$this->title = $model->IdSolicitudCita;
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-cita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdSolicitudCita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdSolicitudCita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdSolicitudCita',
            'FechaSolicitudRegistro',
            'IdTipoSolicitudCita',
            'IdPersona',
            'IdDocente',
            'IdEstadoSolicitudCita',
            'NecesitaConsentimiento',
            'IdInstitucion',
            'descripcion',
            'IdCampoPsicologico',
            'IdUsuarioGraba',
            'FechaGraba',
            'IdUsuarioModifica',
            'FechaModifica',
        ],
    ]) ?>

</div>
