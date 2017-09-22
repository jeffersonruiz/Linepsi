<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TiposGarantia */

$this->title = 'Error Usuario : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-error-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'documento',
            'primernombre',
            'segundonombre',
            'primerapellido',
            'segundoapellido',
            'status',
            'email',
            'rol_id',
            'updated_at',
            'created_at',
            'IdUsuarioGraba',
            'IdUsuarioModifica',
            'password_hash',
            'auth_key',
        ],
    ]) ?>

</div>
