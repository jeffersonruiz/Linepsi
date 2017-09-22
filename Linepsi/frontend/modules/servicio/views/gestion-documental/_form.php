<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\file\FileInput;

use frontend\modules\servicio\models\TipoPruebaPsicologica;
use frontend\modules\servicio\models\HistoriaClinica;
use frontend\modules\servicio\models\TipoDocumento;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\GestionDocumental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Documento' : 'Actualizar Documento' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-10"> 

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">
                    <div class="col-lg-4">
                        <?= $form->field($model, 'IdTipoPruebaPsicologica')->dropDownList(TipoPruebaPsicologica::getListaTipoPrueba(),
                                                                                    [   'disabled'=>true,
                                                                                        'prompt'=>'Seleccione Tipo Prueba ...'])
                                                                                     ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'IdHistoriaClinica')->dropDownList(HistoriaClinica::getListaHistoriaClinica(),
                                                                                    [   'disabled'=>true,
                                                                                        'prompt'=>'Seleccione N° De Historia Clinica ...'])
                                                                                     ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'IdTipoDocumento')->dropDownList(TipoDocumento::getListadoTipoDocumento(),
                                                                     ['prompt'=>'Seleccione Tipo Documentos ...'])
                                                                     ?>
                    </div>
                    
                </div>
               

                <div class="row">
                    <div class="col-lg-10">
                        <?= $form->field($model, 'ObservacionesDocumento')->textarea(['rows' => 6]) ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-10">   
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

