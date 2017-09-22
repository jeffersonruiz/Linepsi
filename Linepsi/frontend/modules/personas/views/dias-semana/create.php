<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\DiasSemana */

$this->title = 'Create Dias Semana';
$this->params['breadcrumbs'][] = ['label' => 'Dias Semanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dias-semana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
