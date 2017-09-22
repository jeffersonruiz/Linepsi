<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\AutorizacionConsentimiento */

$this->title = 'Registrar Consentimiento';
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Cita', 'url' => ['/Citas/solicitud-cita/index']];
//$this->params['breadcrumbs'][] = ['label' => 'Autorizacion Consentimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorizacion-consentimiento-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
