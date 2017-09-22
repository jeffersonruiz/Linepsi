<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\Institucion */

$this->title = 'Update Institucion: ' . $model->IdInstitucion;
$this->params['breadcrumbs'][] = ['label' => 'Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdInstitucion, 'url' => ['view', 'id' => $model->IdInstitucion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="institucion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
