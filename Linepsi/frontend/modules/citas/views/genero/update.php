<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\Genero */

$this->title = 'Update Genero: ' . $model->IdGenero;
$this->params['breadcrumbs'][] = ['label' => 'Generos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdGenero, 'url' => ['view', 'id' => $model->IdGenero]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
