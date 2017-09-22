<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\GestionDocumental */

//$this->title = 'Registrar Gestion Documental';
//$this->params['breadcrumbs'][] = ['label' => 'Gestion Documental', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gestion-documental-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
