<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\OperadorTelefonia */

$this->title = $model->IdOperadorTelefonia;
$this->params['breadcrumbs'][] = ['label' => 'Operador Telefonias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operador-telefonia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdOperadorTelefonia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdOperadorTelefonia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdOperadorTelefonia',
            'NombreOperadorTelefonia',
        ],
    ]) ?>

</div>
