<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\TipoDocumentoIdentificacion */

$this->title = 'Update Tipo Documento Identificacion: ' . $model->IdTipoDocumentoIdentificacion;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documento Identificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoDocumentoIdentificacion, 'url' => ['view', 'id' => $model->IdTipoDocumentoIdentificacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-documento-identificacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
