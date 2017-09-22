<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persona';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Personas' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">   

                <!--
               <h1><?= Html::encode($this->title) ?></h1>
                -->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Registrar Persona', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'summary' => "Mostrando {begin} - {end} de {totalCount} Registro(s)",
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn',
                            'headerOptions' => ['width' => '30']
                        ],            
                        [
                            'attribute'=>'IdPersona',
                            'options' => ['width' => '70'],
                        ], 
                        [
                            'attribute'=>'NumeroDocumento',
                            'options' => ['width' => '100'],
                            'format'=>['decimal',0],
                            'contentOptions' =>['align' => 'right'],
                        ],
                        [
                            'attribute'=>'NombreCompleto',
                            'options' => ['width' => '230'],
                        ],
//                        [
//                            'attribute'=>'DireccionResidencia',
//                            'label' =>'Direccion',
//                            'options' => ['width' => '100'],
//                            'contentOptions' =>['align' => 'left'],
//                        ],                        
//                        [
//                            'attribute'=>'NumeroTelefonoPersonal',
//                            'label'=> 'Tel. Personal',
//                            'options' => ['width' => '100'],
//                            'contentOptions' =>['align' => 'right'],
//                        ],
//                        [
//                            'attribute'=>'IdEstadoRegistro',
//                            'label' =>'Estado',
//                            'options' => ['width' => '80'],
//                            'label' => 'Estado',
//                            'filter'=>array("1"=>"Activ@","0"=>"Inactiv@"),
//                            'content'=> function($data){
//                                return ($data->IdEstadoRegistro == 1) ? 'Activ@' : 'Inactiv@';
//                            },                                
//
//                        ],
                        
                        //'PrimerNombre',
                        //'SegundoNombre',
                        // 'PrimerApellido',
                        // 'SegundoApellido',
                        // 'FechaNacimiento',
                        // 'IdSexo',
                        // 'IdEstadoCivil',
                        // 'IdGenero',
                        //'IdItinerario',
                        [   'class' => 'yii\grid\ActionColumn',
                            'header'=>'Acción',
                            'headerOptions' => ['width' => '100'],
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

