<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoProceso */

$this->title = 'Registrar Tipo Proceso';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Proceso', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-proceso-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
