<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Actualizar Usuario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuario', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="user-update">

    <?= $this->render('_formcontrasena', [
        'model' => $model,
        'modelPassword' => $modelPassword
    ]) ?>

</div>
