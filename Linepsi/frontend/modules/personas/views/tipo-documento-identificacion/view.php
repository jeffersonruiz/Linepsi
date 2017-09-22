<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoDocumentoIdentificacion */

$this->title = $model->IdTipoDocumentoIdentificacion;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documento Identificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-documento-identificacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdTipoDocumentoIdentificacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdTipoDocumentoIdentificacion], [
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
            'IdTipoDocumentoIdentificacion',
            'NombreTipoDocumentoIdentificacion',
        ],
    ]) ?>

</div>
