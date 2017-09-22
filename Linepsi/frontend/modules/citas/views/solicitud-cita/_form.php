<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\modules\personas\models\Persona;
use frontend\modules\citas\models\TipoSolicitudCita;
use frontend\modules\citas\models\EstadoSolicitudCita;

use yii\helpers\Url;
use kartik\date\DatePicker;



/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\SolicitudCita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Itinerario Persona' : 'Actualizar Itinerario  Persona' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-11"> 

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'IdPersona')->textInput()?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model, 'IdDocente')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <?= $form->field($model, 'FechaSolicitudRegistro')->widget(DatePicker::className(),[
                            'name' => 'FechaSolicitudRegistro', 
                            'language'=>'es',
                            'options' => ['placeholder' => 'Seleccionar Fecha Nacimiento ...'],
                            'pluginOptions' => [
                                'autoclose'=>true,
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]) ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'IdTipoSolicitudCita')->dropDownList(TipoSolicitudCita::getListaTipo(), 
                                    ['prompt' => ' Seleccionar Tipo Solicitud ... ' ]); ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'IdEstadoSolicitudCita')->dropDownList(EstadoSolicitudCita::getListaEstado(), 
                                    ['prompt' => ' Seleccionar Estado Solicitud ... ' ]); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <?= $form->field($model, 'IdCampoPsicologico')->textInput() ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'NecesitaConsentimiento')->textInput() ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'IdInstitucion')->textInput() ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
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

