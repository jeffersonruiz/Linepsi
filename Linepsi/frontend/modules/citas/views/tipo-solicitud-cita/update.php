<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\TipoSolicitudCita */

$this->title = 'Update Tipo Solicitud Cita: ' . $model->IdTipoSolicitudCita;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoSolicitudCita, 'url' => ['view', 'id' => $model->IdTipoSolicitudCita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-solicitud-cita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
