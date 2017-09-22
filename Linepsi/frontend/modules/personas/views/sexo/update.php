<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\Sexo */

$this->title = 'Update Sexo: ' . $model->IdSexo;
$this->params['breadcrumbs'][] = ['label' => 'Sexos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSexo, 'url' => ['view', 'id' => $model->IdSexo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sexo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
