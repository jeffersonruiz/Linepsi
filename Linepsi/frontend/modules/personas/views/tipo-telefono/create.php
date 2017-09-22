<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoTelefono */

$this->title = 'Create Tipo Telefono';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-telefono-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
