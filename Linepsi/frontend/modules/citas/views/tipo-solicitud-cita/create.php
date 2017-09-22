<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\TipoSolicitudCita */

$this->title = 'Create Tipo Solicitud Cita';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Solicitud Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-solicitud-cita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
