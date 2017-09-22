<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\Docente */

$this->title = 'Update Docente: ' . $model->IdDocente;
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdDocente, 'url' => ['view', 'id' => $model->IdDocente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="docente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
