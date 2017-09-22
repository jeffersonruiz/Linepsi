<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\ItinerarioPersona */

$this->title = 'Update Itinerario Persona: ' . $model->IdItinerarioPersona;
$this->params['breadcrumbs'][] = ['label' => 'Itinerario Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdItinerarioPersona, 'url' => ['view', 'id' => $model->IdItinerarioPersona]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itinerario-persona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
