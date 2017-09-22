<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\CampoPsicologico */

$this->title = 'Create Campo Psicologico';
$this->params['breadcrumbs'][] = ['label' => 'Campo Psicologicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campo-psicologico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
