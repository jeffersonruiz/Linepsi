<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\AutorizacionConsentimiento */

$this->title = 'Actualizar Consentimiento: ' . $model->IdAutorizacionConsentimiento;
$this->params['breadcrumbs'][] = ['label' => 'Autorizacion Consentimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAutorizacionConsentimiento, 'url' => ['view', 'id' => $model->IdAutorizacionConsentimiento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="autorizacion-consentimiento-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
