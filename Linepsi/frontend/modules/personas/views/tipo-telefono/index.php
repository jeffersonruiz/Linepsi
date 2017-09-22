<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\TipoTelefonoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Telefonos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-telefono-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Telefono', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTipoTelefono',
            'NombreTipoTelefono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
