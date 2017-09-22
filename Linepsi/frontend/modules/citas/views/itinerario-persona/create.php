<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\ItinerarioPersona */

$this->title = 'Registrar Itinerario Persona';
$this->params['breadcrumbs'][] = ['label' => 'Itinerario Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itinerario-persona-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
