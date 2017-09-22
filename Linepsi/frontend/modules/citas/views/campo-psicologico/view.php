<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\CampoPsicologico */

$this->title = $model->IdCampoPsicologico;
$this->params['breadcrumbs'][] = ['label' => 'Campo Psicologicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campo-psicologico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdCampoPsicologico], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdCampoPsicologico], [
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
            'IdCampoPsicologico',
            'NombreCampoPsicologico',
        ],
    ]) ?>

</div>
