<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\modules\personas\models\Persona;
use frontend\modules\personas\models\Docente;

use yii\helpers\Url;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\HistoriaClinica */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Historia Clinica' : 'Actualizar Historia Clinica' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-11"> 

                <?php $form = ActiveForm::begin(); ?>
                
                 
                
                <div class="row">

                     <div class="col-lg-6">
                         <?= $form->field($model, 'IdPersonaSolicita')->dropDownList( Persona::getListaPersonas(),
                                                            [   'disabled'=>true,
                                                                'prompt' => ' Seleccionar Persona ... ' ])
                                                             ->label('Paciente');?> 
                     </div>
                     <div class="col-lg-6">
                         <?= $form->field($model, 'IdDocente')->dropDownList(Docente::getListaDocente(),
                                                            [   'disabled'=>true,
                                                                'prompt' => ' Seleccionar Docente ... ' ])
                                                                         ->label('Docente');?>
                     </div>
                 </div>
                
                <div class="row">
                    <div class="col-lg-4">
                         <?= $form->field($model, 'IdSolicitudCita')->textInput(['disabled'=>true]
                                                                                )->label('Cita N°'); ?>
                     </div>
                     <div class="col-lg-4">
                          <?= $form->field($model, 'Fecha')->textInput(['disabled'=>true]
                                                                       )->label('Fecha Historia Clinica'); ?>
                     </div>
                     <div class="col-lg-4">
                         <?= $form->field($model, 'IdConcepto')->dropDownList(['0' => 'No Aplica', 
                                                                      '1' => 'Aprobado',
                                                                      '2' => 'Reprobado',
                                                                      '3' => 'Proceso Especial',
                                                                      '4' => 'En Proceso'],
                                                                    ['disabled'=>true,
                                                                     'prompt'=>'Seleccionar Concepto ...'])
                                                                    ->label('Concepto');?>
                     </div>
                    
                 </div>
                
                <div class="row">

                     <div class="col-lg-12">
                          <?= $form->field($model, 'ObservacionesGeneral')->textarea([//'disabled'=>true,
                                                                                    'rows' => 6]) ?>
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

