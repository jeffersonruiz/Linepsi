<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaCorreoElectronico */

$this->title = $model->IdPersonaCorreoElectronico;
$this->params['breadcrumbs'][] = ['label' => 'Persona Correo Electronicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-correo-electronico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPersonaCorreoElectronico], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPersonaCorreoElectronico], [
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
            'IdPersonaCorreoElectronico',
            'IdPersona',
            'CuentaCorreoElectronico',
            'EsPrincipal',
            'IdTipoCorreoElectronico',
        ],
    ]) ?>

</div>
