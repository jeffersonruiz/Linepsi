<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\modules\personas\models\TipoDocumentoIdentificacion;
use frontend\modules\personas\models\Sexo;
use frontend\modules\personas\models\Genero;
use frontend\modules\personas\models\Ciudad;
use frontend\modules\personas\models\EstadoCivil;
use frontend\modules\personas\models\IndicativoTelefono;

use yii\helpers\Url;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-primary">


    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Persona' : 'Actualizar Persona' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container"> 

            <div class="col-sm-11">  

                <?php $form = ActiveForm::begin(); ?>
                
                
                <div>
                    <h3 class="titulos"><?= Html::encode('INFORMACIÓN PERSONAL') ?></h3>
                </div> 

                <div class="row">
                    <div class="col-lg-2">    
                        <?= $form->field($model, 'IdTipoDocumentoIdentificacion')->dropDownList(TipoDocumentoIdentificacion::getListaTipoDocumento(), ['prompt' => ' Seleccionar Tipo Documento ... ' ]);?> 
                    </div>

                    <div class="col-lg-2">        
                        <?= $form->field($model, 'NumeroDocumento',['inputOptions' => 
                                                                            [   'class' => 'form-control',
                                                                                'autofocus' => 'autofocus', 
                                                                            ]
                                                                        ])->textInput() ?>
                    </div>  

                    <div class="col-lg-2"> 
                        <?= $form->field($model, 'PrimerNombre')->textInput(['maxlength' => true]) ?>
                    </div>  

                    <div class="col-lg-2">
                        <?= $form->field($model, 'SegundoNombre')->textInput(['maxlength' => true]) ?>
                    </div>  

                    <div class="col-lg-2">  
                        <?= $form->field($model, 'PrimerApellido')->textInput(['maxlength' => true]) ?>
                    </div>  
                    
                    <div class="col-lg-2">  
                        <?= $form->field($model, 'SegundoApellido')->textInput(['maxlength' => true]) ?>
                    </div>                              
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <?= $form->field($model, 'FechaNacimiento')->widget(DatePicker::className(),[
                            'name' => 'FechaNacimiento', 
                            'language'=>'es',
                            'options' => ['placeholder' => 'Seleccionar Fecha Nacimiento ...'],
                            'pluginOptions' => [
                                'autoclose'=>true,
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]) ?>            
                    </div>  
                    
                    <div class="col-lg-2">
                        <?= $form->field($model, 'IdGenero')->dropDownList(Genero::getListaGeneros(), ['prompt' => ' Seleccionar Género ... ' ]);?>             
                    </div>      
                    <div class="col-lg-2">
                        <?= $form->field($model, 'IdSexo')->dropDownList(Sexo::getListaSexos(), ['prompt' => ' Seleccionar Sexo ... ' ]);?>             
                    </div>       

                    <div class="col-lg-2">
                        <?= $form->field($model, 'IdEstadoCivil')->dropDownList(EstadoCivil::getListaEstadoCivil(), ['prompt' => ' Seleccionar Estado Civil ... ' ]);?>             
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

