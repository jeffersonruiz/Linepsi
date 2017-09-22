<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\IndicativoTelefono */

$this->title = 'Create Indicativo Telefono';
$this->params['breadcrumbs'][] = ['label' => 'Indicativo Telefonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicativo-telefono-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
