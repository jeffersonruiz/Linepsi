<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\Url;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\ItinerarioPersona */
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
                    <div class="col-lg-4">
                        <?= $form->field($model, 'DiaSemana')->textInput() ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'HoraInicio')->textInput() ?>
                    </div>
                    <div class="col-lg-4">
                        <?= $form->field($model, 'HoraFin')->textInput() ?>
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


