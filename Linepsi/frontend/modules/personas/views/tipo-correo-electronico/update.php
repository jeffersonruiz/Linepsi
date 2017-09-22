<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoCorreoElectronico */

$this->title = 'Update Tipo Correo Electronico: ' . $model->IdTipoCorreoElectronico;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Correo Electronicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoCorreoElectronico, 'url' => ['view', 'id' => $model->IdTipoCorreoElectronico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-correo-electronico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
