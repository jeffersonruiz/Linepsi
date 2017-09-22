<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoPruebaPsicologica */

$this->title = 'Registrar Tipo Prueba Psicologica';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Prueba Psicologicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-prueba-psicologica-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
