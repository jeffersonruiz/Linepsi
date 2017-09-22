<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\OperadorTelefonia */

$this->title = 'Create Operador Telefonia';
$this->params['breadcrumbs'][] = ['label' => 'Operador Telefonias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operador-telefonia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
