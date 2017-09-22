<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\EstadoSolicitudCita */

$this->title = 'Update Estado Solicitud Cita: ' . $model->IdEstadoSolicitudCita;
$this->params['breadcrumbs'][] = ['label' => 'Estado Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdEstadoSolicitudCita, 'url' => ['view', 'id' => $model->IdEstadoSolicitudCita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-solicitud-cita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
