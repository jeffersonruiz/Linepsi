<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\Estadocivil */

$this->title = 'Update Estadocivil: ' . $model->IdEstadoCivil;
$this->params['breadcrumbs'][] = ['label' => 'Estadocivils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdEstadoCivil, 'url' => ['view', 'id' => $model->IdEstadoCivil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estadocivil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
