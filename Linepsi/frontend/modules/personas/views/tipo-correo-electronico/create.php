<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoCorreoElectronico */

$this->title = 'Create Tipo Correo Electronico';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Correo Electronicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-correo-electronico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
