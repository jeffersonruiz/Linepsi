<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\PersonaCorreoElectronicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persona Correo Electronicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-correo-electronico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persona Correo Electronico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPersonaCorreoElectronico',
            'IdPersona',
            'CuentaCorreoElectronico',
            'EsPrincipal',
            'IdTipoCorreoElectronico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
