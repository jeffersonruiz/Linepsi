<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\HistoriaClinica */

$this->title = 'Registrar Historia Clinica';
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Cita', 'url' => ['/Citas/solicitud-cita/index']];
//$this->params['breadcrumbs'][] = ['label' => 'Historia Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historia-clinica-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
