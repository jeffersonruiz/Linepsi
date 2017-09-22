<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoDocumentoIdentificacion */

$this->title = 'Create Tipo Documento Identificacion';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Documento Identificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-documento-identificacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
