<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\GestionDocumental */

if($opcion == 1){
    $this->title = $model->IdGestionDocumental;
    $this->params['breadcrumbs'][] = ['label' => 'Historia Clinica', 'url' => ['/servicio/historia-clinica/historiaclinica', 'idhistoria' => $idhistoria]];
    $this->params['breadcrumbs'][] = $this->title;
}else{
    $this->title = $model->IdGestionDocumental;
    $this->params['breadcrumbs'][] = ['label' => 'Historia Clinica realizada', 'url' => ['/servicio/historia-clinica/historiaclinicarealizada', 'idhistoria' => $idhistoria]];
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
                    <?= Html::a('Actualizar', ['update', 'id' => $model->IdGestionDocumental,'idhistoria'=>$idhistoria,'opcion'=>$opcion], ['class' => 'btn btn-primary']) ?>
                    <?php
//                    Html::a('Eliminar', ['delete', 'id' => $model->IdGestionDocumental], [
//                        'class' => 'btn btn-danger',
//                        'data' => [
//                            'confirm' => 'Está seguro de que desea eliminar este elemento?',
//                            'method' => 'post',
//                        ],
//                    ])
                    ?>
                </p>

                 <?php
                    $attributes=[
                        [
                        'group' => true,
                        'label' => 'Sección 1: Información Basica Documento',
                        'rowOptions' => ['class' => 'info']
                    ],
                        [
                            'columns' =>[
                                [
                                'attribute' => 'IdGestionDocumental',
                                'format' => 'raw',
                                'value' => $model->IdGestionDocumental,
                                'labelColOptions' => ['style' => 'width:5%'],
                                'valueColOptions' => ['style' => 'width:5%'],
                                'displayOnly' => true
                                ],
                                [
                                'attribute' => 'IdHistoriaClinica',
                                'format' => 'raw',
                                'value' => $model->IdHistoriaClinica,
                                'labelColOptions' => ['style' => 'width:15%'],
                                'valueColOptions' => ['style' => 'width:5%'],
                                'displayOnly' => true
                                ],
                                [
                                'attribute' => 'IdTipoDocumento',
                                'format' => 'raw',
                                'value' => $model->NombreTipoDocumento,
                                'labelColOptions' => ['style' => 'width:15%'],
                                'valueColOptions' => ['style' => 'width:15%'],
                                'displayOnly' => true
                                ],
                                [
                                'attribute' => 'IdTipoPruebaPsicologica',
                                'format' => 'raw',
                                'value' => $model->NombreTipoPrueba,
                                'labelColOptions' => ['style' => 'width:15%'],
                                'valueColOptions' => ['style' => 'width:15%'],
                                'displayOnly' => true
                                ],
                            ],
                        ],
                        [
                             'columns' =>[
                                 [
                                'attribute' =>  'ObservacionesDocumento',
                                'format' => 'raw',
                                'value' => $model->ObservacionesDocumento,
                                'labelColOptions' => ['style' => 'width:8%'],
                                'valueColOptions' => ['style' => 'width:92%'],
                                'displayOnly' => true
                                ],
                             ],
                        ],
                        [
                        'group' => true,
                        'label' => 'Sección 2: Visualizacion Documento',
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
                        'params' => ['id' => $model->IdGestionDocumental, 'kvdelete' => true],
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


