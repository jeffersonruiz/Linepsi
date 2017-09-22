<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\HistoriaClinica */

$this->title = $model->IdHistoriaClinica;
$this->params['breadcrumbs'][] = ['label' => 'Historia Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historia-clinica-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdHistoriaClinica], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdHistoriaClinica], [
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
            'IdHistoriaClinica',
            'IdPersonaSolicita',
            'Fecha',
            'ObservacionesGeneral:ntext',
            'IdDocente',
            'IdSolicitudCita',
            'IdConcepto',
        ],
    ]) ?>

</div>
