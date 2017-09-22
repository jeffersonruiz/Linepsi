<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoTelefono */

$this->title = 'Update Tipo Telefono: ' . $model->IdTipoTelefono;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoTelefono, 'url' => ['view', 'id' => $model->IdTipoTelefono]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-telefono-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
