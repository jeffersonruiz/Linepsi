<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\modules\servicio\models\TipoProceso;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoPruebaPsicologica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Tipo Prueba' : 'Actualizar Tipo Prueba' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-11">  

                <?php $form = ActiveForm::begin(); ?>

                <div class="row">
                    
                    <div class="col-lg-8">
                        <?= $form->field($model, 'NombreTipoPruebaPsicologica')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'Orden')->textInput() ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <?= $form->field($model, 'IdTipoProceso')->dropDownList(TipoProceso::getListaTipoProceso(), 
                                                                ['prompt' => ' Seleccionar Tipo Proceso ... ' ]);?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'EstadoTipoPruebaPsicologica')->dropDownList(['1' => 'Activo', '0' => 'InActivo'],
                                                                                ['prompt'=>'Seleccionar Estado ... ']) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>
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

