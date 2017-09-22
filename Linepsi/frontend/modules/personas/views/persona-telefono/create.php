<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaTelefono */

$this->title = 'Create Persona Telefono';
$this->params['breadcrumbs'][] = ['label' => 'Persona Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-telefono-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
