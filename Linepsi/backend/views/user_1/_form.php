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
                                            'readonly'=> false]) ?>
        </div>
        
        <div class="col-lg-2">
            <?= $form->field($model, 'primernombre')->textInput(['readonly'=> false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'segundonombre')->textInput(['readonly'=> false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'primerapellido')->textInput(['readonly'=> false]) ?>
        </div>    

        <div class="col-lg-2">
            <?= $form->field($model, 'segundoapellido')->textInput(['readonly'=> false]) ?>
        </div>
        
        <div class="col-lg-2">
            <?php echo $form->field($model, 'status')->dropDownList(['0' => 'Inactivo', '10' => 'Activo'],
                                                    ['prompt'=>'Seleccionar Estado ...',
                                                    'readonly'=> false]); ?>
        </div>
        
    </div>    
    
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'email')->textInput(['readonly'=> false]) ?>
        </div>
        <div class="col-lg-2">
            <?= $form->field($model, 'rol_id')->dropDownList(Rol::getListaRoles(), 
                                            ['prompt' => ' Seleccionar Rol ... ',
                                             'readonly'=> false]);?>             
        </div>   
        
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
