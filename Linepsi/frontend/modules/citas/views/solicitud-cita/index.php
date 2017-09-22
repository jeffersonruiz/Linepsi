<?php

use yii\helpers\Html;
use yii\grid\GridView;


use yii\helpers\Url;

use frontend\modules\servicio\models\AutorizacionConsentimiento;
use frontend\modules\servicio\models\HistoriaClinica;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\\search\SolicitudCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">

    <div class="panel-heading">
        <h3 class="panel-title"><?php echo 'Listado Solicitud' ?></h3>
    </div>

    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-11">  

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Registrar Solicitud', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn',
                            'headerOptions' => ['width' => '10']
                        ],
                        [
                            'attribute'=>'IdSolicitudCita',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'FechaSolicitudRegistro',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'IdPersona',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'IdDocente',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'IdInstitucion',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'IdTipoSolicitudCita',
                            'options' => ['width' => '50'],
                        ],
                        [
                            'attribute'=>'IdEstadoSolicitudCita',
                            'options' => ['width' => '50'],
                        ],
                        
                        [   'class' => 'yii\grid\ActionColumn',
                            'header'=>'Acción',
                            'headerOptions' => ['width' => '50'],
                            'template' => '{view} {update} {delete} {consentimiento} {admision}',
                            'buttons' => [
                                'admision' => function ($url, $model){
                                    
                                     $modelAutorizacion = AutorizacionConsentimiento::find()
                                                                                    ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                                                                    ->one();
                                     
                                     
                                     // Si hay una autorizacion para ese id datos despliego la opcion de iniciar proceso de admision
                                     If($modelAutorizacion){
                                         return Html::a('<span class="glyphicon glyphicon-list-alt"></span>', $url, [
                                                    'title' => 'Iniciar Proceso Admision',
                                        ]);
                                     }
                                    
                    
                                },
                                'consentimiento' => function ($url, $model){
                                    
                                    $modelAutorizacion = AutorizacionConsentimiento::find()
                                                                                    ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                                                                    ->one();
                                    // si la respiesta es SI (1) Despliego la opcion de Autorizacion        
                                    if($model->NecesitaConsentimiento == 1){
                                        // Si no hay ningun Autorizacion para esa cita despliego la opcion de crear de lo contrario despliego la opcion de ver 
                                        if(!$modelAutorizacion){
                                           return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
                                                    'title' => 'Registrar Consentimiento Informado',
                                            ]); 
                                        }else{
                                            return Html::a('<span class="glyphicon glyphicon-search"></span>', $url, [
                                                        'title' => 'Ver Consentimiento Informado',
                                            ]);
                                        }
                                        
                                    }
                                },
                            ],
                            'urlCreator' => function ($action, $model, $key, $index){
                                    switch ($action){
                                        case 'admision' :
                                            
                                             $modelAutorizacion = AutorizacionConsentimiento::find()
                                                                                    ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                                                                    ->one();
                                            
                                            $modelHistoria = HistoriaClinica::find()
                                                                       ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                                                       ->one();
                                            
                                            if($modelAutorizacion){
                                                if($modelHistoria){
                                                    if($modelHistoria->IdConcepto == 4){
                                                        return Url::toRoute(['/servicio/historia-clinica/historiaclinica','idhistoria' => $modelHistoria->IdHistoriaClinica, 'opcion' => 1]); 
                                                    }else{
                                                        return Url::toRoute(['/servicio/historia-clinica/historiaclinicarealizada','idhistoria' => $modelHistoria->IdHistoriaClinica, 'opcion' => 1]);
                                                    }
                                                }else{
                                                    return Url::toRoute(['/servicio/historia-clinica/create',
                                                                            'idpersona' => $model->IdPersona,
                                                                            'iddocente' => $model->IdDocente,
                                                                            'idcita' => $model->IdSolicitudCita]);
                                                }
                                                
                                            }
                                        break;
                                        case 'consentimiento' :
                                            
                                            $modelAutorizacion = AutorizacionConsentimiento::find()
                                                                                    ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                                                                    ->one();
                                            
                                         if($model->NecesitaConsentimiento == 1){
                                             if(!$modelAutorizacion){
                                                  return Url::toRoute(['/servicio/autorizacion-consentimiento/create','idcita' => $model->IdSolicitudCita]) ;
                                             }else{
                                                return Url::toRoute(['/servicio/autorizacion-consentimiento/view','id' => $modelAutorizacion->IdAutorizacionConsentimiento,'opcion' => 1]) ;
                                            }
                                            
                                         }
                                         break;
                                    default:
                                        return Url::toRoute([$action, 'id' => $model->IdSolicitudCita]);
                                        break; 
                                    }
                                    
                            },
                        ],
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>


