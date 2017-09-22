<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\Estadocivil */

$this->title = 'Create Estadocivil';
$this->params['breadcrumbs'][] = ['label' => 'Estadocivils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadocivil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
