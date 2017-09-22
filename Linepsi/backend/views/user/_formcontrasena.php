<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\Rol;
use backend\models\Persona;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">      
    
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Cambiar Contraseña'?></h3>
    </div>
    
    <div class="panel-body">
        <div class="container"> 
            
            <div class="col-sm-10">    

                <?php $form = ActiveForm::begin([
                    'id'=>'changepassword-form',        
                ]); ?>

                <div class="row">

                    <div class="col-lg-6">   
                        <?= $form->field($modelPassword, 'NombrePersona')->textInput(['disabled' =>true,]) ?>
                    </div>
                    
                    <div class="col-lg-3">        
                        <?= $form->field($model, 'username')->textInput(['disabled' =>true,]) ?>
                    </div>  

                       
                </div>
                
                <div class="row">
                    
                    <div class="col-lg-9">        
                        <?= $form->field($model, 'email')->textInput(['disabled' =>true,]) ?>
                    </div>  
                    
                    <div class="col-lg-3">
                        <?= $form->field($modelPassword, 'NombreRolUsuario')->textInput(['disabled' =>true,]) ?>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <?= $form->field($modelPassword,'oldpass',['inputOptions'=>[
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus', 
                                    'placeholder'=>'Contraseña Actual'
                               ]])->passwordInput() ?>
                    </div>    

                    <div class="col-lg-4">
                               <?= $form->field($modelPassword,'newpass',['inputOptions'=>[
                                   'class' => 'form-control',
                                   'placeholder'=>'Contraseña Actual'
                               ]])->passwordInput() ?>
                    </div>    

                    <div class="col-lg-4">    
                               <?= $form->field($modelPassword,'repeatnewpass',['inputOptions'=>[
                                   'class' => 'form-control',
                                   'placeholder'=>'Repetir Nueva Contraseña'
                               ]])->passwordInput() ?>                    
                    </div>    
                </div>
                
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>    
</div>
