<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\TipoSolicitudCita */

$this->title = $model->IdTipoSolicitudCita;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-solicitud-cita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdTipoSolicitudCita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdTipoSolicitudCita], [
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
            'IdTipoSolicitudCita',
            'NombreTipoSolicitudCita',
        ],
    ]) ?>

</div>
