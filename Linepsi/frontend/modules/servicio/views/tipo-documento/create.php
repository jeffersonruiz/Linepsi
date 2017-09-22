<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoDocumento */

$this->title = 'Registrar Tipo Documento';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-documento-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
