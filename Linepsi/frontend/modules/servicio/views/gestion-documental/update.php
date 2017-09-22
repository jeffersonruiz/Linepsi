<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\GestionDocumental */
if($opcion == 1){
    $this->title = 'Actualizar Docuemnto: ' . $model->IdGestionDocumental;
    $this->params['breadcrumbs'][] = ['label' => 'Historia Clinica', 'url' => ['/servicio/historia-clinica/historiaclinica', 'idhistoria' => $idhistoria]];
    //$this->params['breadcrumbs'][] = ['label' => $model->IdGestionDocumental, 'url' => ['view', 'id' => $model->IdGestionDocumental]];
    $this->params['breadcrumbs'][] = 'Actualizar';
}else{
    $this->title = 'Actualizar Docuemnto : ' . $model->IdGestionDocumental;
    $this->params['breadcrumbs'][] = ['label' => 'Historia Clinica Realizada', 'url' => ['/servicio/historia-clinica/historiaclinicarealizada', 'idhistoria' => $idhistoria]];
    //$this->params['breadcrumbs'][] = ['label' => $model->IdGestionDocumental, 'url' => ['view', 'id' => $model->IdGestionDocumental]];
    $this->params['breadcrumbs'][] = 'Actualizar';
}

?>
<div class="gestion-documental-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
