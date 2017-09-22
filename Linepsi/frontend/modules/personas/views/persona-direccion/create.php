<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaDireccion */

$this->title = 'Create Persona Direccion';
$this->params['breadcrumbs'][] = ['label' => 'Persona Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-direccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
