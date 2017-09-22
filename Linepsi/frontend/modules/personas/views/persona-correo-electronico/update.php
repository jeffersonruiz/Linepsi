<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaCorreoElectronico */

$this->title = 'Update Persona Correo Electronico: ' . $model->IdPersonaCorreoElectronico;
$this->params['breadcrumbs'][] = ['label' => 'Persona Correo Electronicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPersonaCorreoElectronico, 'url' => ['view', 'id' => $model->IdPersonaCorreoElectronico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persona-correo-electronico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
