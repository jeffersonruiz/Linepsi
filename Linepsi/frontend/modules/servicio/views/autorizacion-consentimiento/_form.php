<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\file\FileInput;

use frontend\modules\personas\models\Persona;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\AutorizacionConsentimiento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Consentimiento' : 'Actualizar Consentimiento' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-10">  

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">

                    <div class="col-lg-4">
                        <?= $form->field($model, 'Respuesta')->dropDownList(['1' => 'Si', '0' => 'No'],
                                                                            ['prompt'=>'Seleccionar Respuesta ...'])
                                                                            ->label('Respuesta');?>
                    </div>
                    <div class="col-lg-8">
                        <?= $form->field($model, 'NombreFirma')->textInput()->label('Firma');?>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-lg-12">   
                        <?php
                            if ($model->isNewRecord){
                                $initialpreview = false;
                                $initialcaption = '';
                            }else{
                                $initialpreview = [Html::img( $model->RutaDocumento . $model->NombreDocumento, ['class'=>'file-preview-image'])];
                                $initialcaption = $model->NombreDocumento;
                            }
                        ?>
                        
                        <?= $form->field($model, 'FileUpload')->widget(FileInput::classname(), [
                                                            'pluginOptions' => [
                                                                //'allowedFileExtensions'=>['jpg', 'gif', 'png', 'bmp'],
                                                                'allowedFileExtensions'=>['pdf', 'docx', 'xlsx'],
                                                                'showPreview' => true,
                                                                'showCaption' => true,
                                                                'showRemove' => true,
                                                                'showUpload' => false,
                                                                'initialPreview'=>$initialpreview,
                                                                'initialCaption' => $initialcaption,
                                                                'overwriteInitial'=>true,
                                                            ],
                                                            //'options' => ['accept' => 'image/*'],
                                                            ])->label('Documento')?>                        
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

