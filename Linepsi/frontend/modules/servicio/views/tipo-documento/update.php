<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoDocumento */

$this->title = 'Actualizar Tipo Documento: ' . $model->IdTipoDocumento;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoDocumento, 'url' => ['view', 'id' => $model->IdTipoDocumento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-documento-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
