<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\OperadorTelefonia */

$this->title = 'Update Operador Telefonia: ' . $model->IdOperadorTelefonia;
$this->params['breadcrumbs'][] = ['label' => 'Operador Telefonias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdOperadorTelefonia, 'url' => ['view', 'id' => $model->IdOperadorTelefonia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operador-telefonia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
