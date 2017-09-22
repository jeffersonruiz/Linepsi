<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\IndicativoTelefono */

$this->title = 'Update Indicativo Telefono: ' . $model->IdIndicativoTelefono;
$this->params['breadcrumbs'][] = ['label' => 'Indicativo Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdIndicativoTelefono, 'url' => ['view', 'id' => $model->IdIndicativoTelefono]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indicativo-telefono-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
