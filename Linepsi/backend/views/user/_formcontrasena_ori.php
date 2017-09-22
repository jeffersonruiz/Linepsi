<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\Rol;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-2">            
            <?= $form->field($model, 'documento',['inputOptions' => 
                                            [   'class' => 'form-control',
                                                'autofocus' => 'autofocus', 
                                                'class' => 'form-control'
                                            ]
                                        ])->textInput(['maxlength' => true,
                                            'readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>
        
        <div class="col-lg-2">
            <?= $form->field($model, 'primernombre')->textInput(['readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'segundonombre')->textInput(['readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'primerapellido')->textInput(['readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'segundoapellido')->textInput(['readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>
        
        <div class="col-lg-2">
            <?php echo $form->field($model, 'status')->dropDownList(['0' => 'Inactivo', '10' => 'Activo'],
                                                    ['prompt'=>'Seleccionar Estado ...',
                                                    'readonly'=>($contrasena == 1) ? true : false]); ?>
        </div>
        
    </div>    
    
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'email')->textInput(['readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>
        <div class="col-lg-2">
            <?= $form->field($model, 'rol_id')->dropDownList(Rol::getListaRoles(), 
                                            ['prompt' => ' Seleccionar Rol ... ',
                                             'readonly'=>($contrasena == 1) ? true : false]);?>             
        </div>   

        <div class="col-lg-2">
            <?= $form->field($model, 'username')->textInput(['minlength' => 6,
                'readonly'=>($contrasena == 1) ? true : false]) ?>
        </div>
        
        <div class="col-lg-3">
            <?= $form->field($model, 'password')->passwordInput()->label('Contraseña')?>
        </div>            
        
        
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
