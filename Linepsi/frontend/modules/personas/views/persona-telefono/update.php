<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaTelefono */

$this->title = 'Update Persona Telefono: ' . $model->IdPersonaTelefono;
$this->params['breadcrumbs'][] = ['label' => 'Persona Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPersonaTelefono, 'url' => ['view', 'id' => $model->IdPersonaTelefono]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persona-telefono-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
