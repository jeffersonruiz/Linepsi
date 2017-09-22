<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\\search\PersonaDireccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persona Direccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-direccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persona Direccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPersonaDireccion',
            'IdPersona',
            'Direccion',
            'IdTipoDireccion',
            'EsPrincipal',
            // 'IdCiudad',
            // 'IdPais',
            // 'NombreCiudadExtranjero',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
