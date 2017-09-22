<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\AutorizacionConsentimiento */

if($opcion == 1){
    $this->title = 'Autorizacion: ' . $model->IdAutorizacionConsentimiento;
    $this->params['breadcrumbs'][] = ['label' => 'Solicitud Cita', 'url' => ['/Citas/solicitud-cita/index']];
    $this->params['breadcrumbs'][] = $this->title;
}else{
    $this->title = 'Autorizacion: ' . $model->IdAutorizacionConsentimiento;
    $this->params['breadcrumbs'][] = ['label' => 'Listado Historia Clinica', 'url' => ['/servicio/historia-clinica/index']];
    $this->params['breadcrumbs'][] = $this->title;
}


?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $model->isNewRecord ? 'Registrar Consentimiento' : 'Actualizar Consentimiento' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-10"> 

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

                <p>
                    <?= Html::a('Actualizar', ['update', 'id' => $model->IdAutorizacionConsentimiento], ['class' => 'btn btn-primary']) ?>
                    <?php
//                    Html::a('Eliminar', ['delete', 'id' => $model->IdAutorizacionConsentimiento], [
//                        'class' => 'btn btn-danger',
//                        'data' => [
//                            'confirm' => 'Are you sure you want to delete this item?',
//                            'method' => 'post',
//                        ],
//                    ])
                    ?>
                </p>



                <?php
                $attributes = [
                    [
                        'group' => true,
                        'label' => 'Sección 1: Información Consentimiento',
                        'rowOptions' => ['class' => 'info']
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'IdSolicitudCita',
                                'format' => 'raw',
                                'value' => $model->IdSolicitudCita,
                                'labelColOptions' => ['style' => 'width:10%'],
                                'valueColOptions' => ['style' => 'width:10%'],
                                'displayOnly' => true
                            ],
                            [
                                'attribute' => 'Respuesta',
                                'format' => 'raw',
                                'value' => ($model->Respuesta == 1) ? 'Si' : 'No',
                                'labelColOptions' => ['style' => 'width:10%'],
                                'valueColOptions' => ['style' => 'width:10%'],
                                'displayOnly' => true
                            ],
                            [
                                'attribute' => 'NombreFirma',
                                'format' => 'raw',
                                'value' => $model->NombreFirma,
                                'labelColOptions' => ['style' => 'width:15%'],
                                'valueColOptions' => ['style' => 'width:50%'],
                                'displayOnly' => true
                            ],
                        ],
                    ],
                    [
                        'group' => true,
                        'label' => 'Sección 2: Información Documento',
                        'rowOptions' => ['class' => 'info']
                    ],
                        ]
                ?>

                <?=
                DetailView::widget([
                    'model' => $model,
                    'attributes' => $attributes,
                    'mode' => DetailView::MODE_VIEW,
                    /* 'panel'=>[
                      'heading'=>'ID Persona No ' . $model->IdPersona,
                      'type' => DetailView::TYPE_INFO,
                      ], */
                    'bordered' => TRUE,
                    'striped' => FALSE,
                    'condensed' => FALSE,
                    'responsive' => TRUE,
                    'hover' => TRUE,
                    'hAlign' => 'left',
                    'vAlign' => 'middle',
                    'fadeDelay' => 800,
                    'deleteOptions' => [ // your ajax delete parameters
                        'params' => ['id' => $model->IdAutorizacionConsentimiento, 'kvdelete' => true],
                    ],
                    'container' => ['id' => 'kv-demo'],
                    'formOptions' => ['action' => Url::current(['#' => 'kv-demo'])] // your action to delete
                ])
                ?>



                <img src="<?php
                    
                        switch ($extension) {
                            case 'pdf':
                                echo "/Linepsi/frontend/web/archivos/extensiones/pdf.png";
                                break;
                            case 'docx':
                                echo "/Linepsi/frontend/web/archivos/extensiones/docx.jpg";
                                break;
                            case 'xlsx':
                                echo "/Linepsi/frontend/web/archivos/extensiones/xlsx.jpg";
                                break;
                            case 'ninguna':
                                echo "/Linepsi/frontend/web/archivos/extensiones/ningunarchivo.jpg";
                                break;
                            default:
                                echo 'Ninguna Imagen Adjunta';
                                break;
                        }
                    
                    
                
                
                ?>" height="70" width="70" /> 



                <?php if (Yii::$app->session->hasFlash('errordownload')): ?>
                    <strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong>

                    <?php elseif ($model->NombreDocumento) : ?>
                        <a href="<?= Url::toRoute(["download", "file" => $model->NombreDocumento, "ruta" => $model->RutaDocumento])
                    ?>">Descargar archivo</a>

                        <?php else:  ?>
                          <a>No Hay Archivo Adjunto</a>
                        <?php endif; ?>
                 


            </div>
        </div>
    </div>    
</div>

