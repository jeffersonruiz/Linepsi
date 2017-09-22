<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\EstadoCivil */

$this->title = 'Create Estado Civil';
$this->params['breadcrumbs'][] = ['label' => 'Estado Civils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-civil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
