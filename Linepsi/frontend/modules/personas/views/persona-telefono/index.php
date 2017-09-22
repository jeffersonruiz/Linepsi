<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\PersonaTelefonoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persona Telefonos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-telefono-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persona Telefono', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPersonaTelefono',
            'IdPersona',
            'NumeroTelefono',
            'EsPrincipal',
            'IdTipoTelefono',
            // 'IdOperadorTelefonia',
            // 'IdCiudad',
            // 'IdPais',
            // 'NombreCiudadExtranjero',
            // 'IdIndicativoTelefono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
