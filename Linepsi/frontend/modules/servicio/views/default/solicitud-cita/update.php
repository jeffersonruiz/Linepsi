<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\SolicitudCita */

$this->title = 'Update Solicitud Cita: ' . $model->IdSolicitudCita;
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSolicitudCita, 'url' => ['view', 'id' => $model->IdSolicitudCita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitud-cita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
