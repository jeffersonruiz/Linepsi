<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaDireccion */

$this->title = $model->IdPersonaDireccion;
$this->params['breadcrumbs'][] = ['label' => 'Persona Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-direccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPersonaDireccion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPersonaDireccion], [
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
            'IdPersonaDireccion',
            'IdPersona',
            'Direccion',
            'IdTipoDireccion',
            'EsPrincipal',
            'IdCiudad',
            'IdPais',
            'NombreCiudadExtranjero',
        ],
    ]) ?>

</div>
