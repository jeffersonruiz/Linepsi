<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use frontend\modules\servicio\models\AutorizacionConsentimiento;
use frontend\modules\servicio\models\HistoriaClinica;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\\search\SolicitudCitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div class="col-sm-12">  

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
//        ['class' => 'yii\grid\SerialColumn',
//            'headerOptions' => ['width' => '10']
//        ],
        [
            'attribute' => 'IdPersona',
            'value' => 'NombrePersona',
            'options' => ['width' => '60'],
        ],
        [
            'attribute' => 'IdDocente',
            'value' => 'NombreDocente',
            'options' => ['width' => '60'],
        ],
        [
            'attribute' => 'FechaSolicitudRegistro',
            'options' => ['width' => '40'],
        ],
        [
            'attribute' => 'IdInstitucion',
            'value' => 'NombreInsistitucion',
            'options' => ['width' => '60'],
        ],
        [
            'attribute' => 'IdTipoSolicitudCita',
            'value' => 'NombreTipoSolicitud',
            'options' => ['width' => '50'],
        ],
        [
            'attribute' => 'IdEstadoSolicitudCita',
            'value' => 'NombreEstdo',
            'options' => ['width' => '50'],
        ],
        [ 'class' => 'yii\grid\ActionColumn',
            'header' => 'Acción',
            'headerOptions' => ['width' => '30'],
            'template' => '{consentimiento} {admision}',
            'buttons' => [
                'admision' => function ($url, $model) {

                    $modelAutorizacion = AutorizacionConsentimiento::find()
                            ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                            ->one();


                    // Si hay una autorizacion para ese id datos despliego la opcion de iniciar proceso de admision
                    If ($modelAutorizacion) {
                        return Html::a('<span class="glyphicon glyphicon-list-alt"></span>', $url, [
                                    'title' => 'Iniciar Proceso Admision',
                        ]);
                    }
                },
                'consentimiento' => function ($url, $model) {

                    $modelAutorizacion = AutorizacionConsentimiento::find()
                            ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                            ->one();
                    // si la respiesta es SI (1) Despliego la opcion de Autorizacion        
                    if ($model->NecesitaConsentimiento == 1) {
                        // Si no hay ningun Autorizacion para esa cita despliego la opcion de crear de lo contrario despliego la opcion de ver 
                        if (!$modelAutorizacion) {
                            return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
                                        'title' => 'Registrar Consentimiento Informado',
                            ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-search"></span>', $url, [
                                        'title' => 'Ver Consentimiento Informado',
                            ]);
                        }
                    }
                },
                    ],
                'urlCreator' => function ($action, $model, $key, $index) {
                switch ($action) {
                    case 'admision' :

                        $modelAutorizacion = AutorizacionConsentimiento::find()
                                ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                ->one();

                        $modelHistoria = HistoriaClinica::find()
                                ->where('IdSolicitudCita = ' . $model->IdSolicitudCita)
                                ->one();

                        if ($modelAutorizacion) {
                            if ($modelHistoria) {
                                if ($modelHistoria->IdConcepto == 4) {
                                    return Url::toRoute(['/servicio/historia-clinica/historiaclinica', 'idhistoria' => $modelHistoria->IdHistoriaClinica, 'opcion' => 2]);
                                } else {
                                    return Url::toRoute(['/servicio/historia-clinica/historiaclinicarealizada', 'idhistoria' => $modelHistoria->IdHistoriaClinica, 'opcion' => 2]);
                                }
                            } else {
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

                        if ($model->NecesitaConsentimiento == 1) {
                            if (!$modelAutorizacion) {
                                return Url::toRoute(['/servicio/autorizacion-consentimiento/create', 'idcita' => $model->IdSolicitudCita]);
                            } else {
                                return Url::toRoute(['/servicio/autorizacion-consentimiento/view', 'id' => $modelAutorizacion->IdAutorizacionConsentimiento, 'opcion' => 2]);
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

