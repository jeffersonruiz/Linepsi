<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use backend\models\Rol;

use frontend\models\Persona;

$this->title = 'Registrar Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
      
    
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Datos Usuario'?></h3>
    </div>
    
    <div class="panel-body">
        <div class="container"> 
            
            <div class="col-sm-10">    
    
                <!--
                <h1><?= Html::encode($this->title) ?></h1>
                -->

                <p>Favor diligenciar los siguientes campos para registrase:</p>

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'IdPersona',['inputOptions' => 
                                                        [   'class' => 'form-control',
                                                            'autofocus' => 'autofocus', 
                                                        ]
                                                    ])->dropDownList(Persona::getListaEmpleado(), 
                                                                    [   'prompt' => ' Seleccionar Colaborador ... ' 
                                                                    ])->label('Colaborador');?>             
                    </div>                    

                    <div class="col-lg-3">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-lg-3">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>            
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    </div>
                    
                    <div class="col-lg-3">
                        <?= $form->field($model, 'rol_id')->dropDownList(Rol::getListaRoles(), ['prompt' => ' Seleccionar Rol ... ' ]);?>             
                    </div>        
                    
                    <div class="col-lg-3">
                        <?php echo $form->field($model, 'status')->dropDownList(['0' => 'Inactivo', '10' => 'Activo'],
                                                                ['prompt'=>'Seleccionar Estado ...']); ?>
                    </div>                    
                </div>    

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <?= Html::submitButton('Registrarse', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>    
</div>
