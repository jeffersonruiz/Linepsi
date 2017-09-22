<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

use backend\models\Rol;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios - DineroYa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <!--
    <h1><?= Html::encode($this->title) ?></h1>
    -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "Mostrando {begin} - {end} de {totalCount} Registro(s)",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'headerOptions' => ['width' => '50']
            ],
            [
                'attribute'=>'id',
                'options' => ['width' => '50'],
            ],
            [
                'attribute'=>'username',
                'options' => ['width' => '80'],
            ],            
            [
                'attribute'=>'documento',
                'options' => ['width' => '80'],
            ],
            [
                'attribute'=>'primernombre',
                'options' => ['width' => '80'],
            ],
            [
                'attribute'=>'segundonombre',
                'options' => ['width' => '80'],
            ],
            [
                'attribute'=>'primerapellido',
                'options' => ['width' => '80'],
            ],
            [
                'attribute'=>'segundoapellido',
                'options' => ['width' => '80'],
            ],     
            [
                'attribute'=>'rol_id',
                'value' => 'NombreRol',
                'options' => ['width' => '80'],
                'filter' => Rol::getListaRoles(),
            ],            
            [
                'attribute'=>'status',
                'content'=> function($data){
                    return User::getNombreStatus($data->status);
                },
                'options' => ['width' => '80'],
                'filter' => User::getListaStatus(),
            ],            

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Acción',
                'headerOptions' => ['width' => '150'],
		'template' => '{view} {update} {delete} {contrasena}',
                'buttons' => [
                    'contrasena' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-user"></span>', $url, [
                                    'title' => 'Cambiar Contraseña',
                        ]);
                    },
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'contrasena') {
                        return Url::toRoute(['cambiarcontrasena', 'id' => $model->id]);
                    } else {
                            return Url::toRoute([$action, 'id' => $model->id]);
                    }    
                }
            ],
        ],
    ]); ?>

</div>
