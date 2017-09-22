<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaTelefono */

$this->title = $model->IdPersonaTelefono;
$this->params['breadcrumbs'][] = ['label' => 'Persona Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-telefono-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPersonaTelefono], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPersonaTelefono], [
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
            'IdPersonaTelefono',
            'IdPersona',
            'NumeroTelefono',
            'EsPrincipal',
            'IdTipoTelefono',
            'IdOperadorTelefonia',
            'IdCiudad',
            'IdPais',
            'NombreCiudadExtranjero',
            'IdIndicativoTelefono',
        ],
    ]) ?>

</div>
