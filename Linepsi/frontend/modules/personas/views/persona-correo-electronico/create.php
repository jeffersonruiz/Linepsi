<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaCorreoElectronico */

$this->title = 'Create Persona Correo Electronico';
$this->params['breadcrumbs'][] = ['label' => 'Persona Correo Electronicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-correo-electronico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
