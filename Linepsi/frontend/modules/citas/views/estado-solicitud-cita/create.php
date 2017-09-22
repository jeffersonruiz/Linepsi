<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\EstadoSolicitudCita */

$this->title = 'Create Estado Solicitud Cita';
$this->params['breadcrumbs'][] = ['label' => 'Estado Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-solicitud-cita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
