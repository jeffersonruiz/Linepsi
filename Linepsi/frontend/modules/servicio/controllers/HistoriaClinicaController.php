<?php

namespace frontend\modules\servicio\controllers;

use Yii;
use frontend\modules\servicio\models\HistoriaClinica;
use frontend\modules\servicio\models\search\HistoriaClinicaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use frontend\modules\citas\models\SolicitudCita;
use frontend\modules\servicio\models\search\TipoPruebaPsicologicaSearch;
use frontend\modules\servicio\models\TipoPruebaPsicologica;
use frontend\modules\servicio\models\GestionDocumental;

use frontend\controllers\BaseController;


/**
 * HistoriaClinicaController implements the CRUD actions for HistoriaClinica model.
 */
class HistoriaClinicaController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HistoriaClinica models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HistoriaClinicaSearch();
        $dataProvider = $searchModel->searchHistoriaClinica(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionHistoriaclinica($idhistoria,$opcion){
        
        $modelHistoria = $this->findModel($idhistoria);
        
        $searchModelTipoPrueba = new TipoPruebaPsicologicaSearch();
        $datProviderTipoPrueba = $searchModelTipoPrueba->searchHisoriaClinica(Yii::$app->request->queryParams);
        
        
        
        if ($modelHistoria->load(Yii::$app->request->post())) {
            
            if($modelHistoria->save()){
                
                return $this->render('viewhistoriaclinicarealizada',[
                        'modelHistoria' => $modelHistoria,
                        'searchModelTipoPrueba' => $searchModelTipoPrueba,
                        'datProviderTipoPrueba' => $datProviderTipoPrueba,
                        'opcion' => $opcion,
                        
                    ]);
            }
            
        }else{
            return $this->render('viewhistoriaclinica',[
                        'modelHistoria' => $modelHistoria,
                        'searchModelTipoPrueba' => $searchModelTipoPrueba,
                        'datProviderTipoPrueba' => $datProviderTipoPrueba,
                        'opcion' => $opcion,
                        
                       
            ]);
        }
        
        
        
    }
    
    public function actionHistoriaclinicarealizada($idhistoria, $opcion){
        
        $modelHistoria = $this->findModel($idhistoria);
        
        $searchModelTipoPrueba = new TipoPruebaPsicologicaSearch();
        $datProviderTipoPrueba = $searchModelTipoPrueba->searchHisoriaClinica(Yii::$app->request->queryParams);
        
            return $this->render('viewhistoriaclinicarealizada',[
                        'modelHistoria' => $modelHistoria,
                        'searchModelTipoPrueba' => $searchModelTipoPrueba,
                        'datProviderTipoPrueba' => $datProviderTipoPrueba,
                        'opcion' => $opcion,
                        
                       
            ]);
   
    }
    
    
    
    
    public function actionCreatehistoriaclinica($idpersona,$iddocente,$idcita){
        
        $model = new HistoriaClinica();
        
        $model->IdPersonaSolicita = $idpersona;
        $model->Fecha = date("y-m-d");
        $model->IdDocente = $iddocente;
        $model->IdSolicitudCita = $idcita;
        $model->IdConcepto = 4;
        
        
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                return $this->redirect('historiaclinica',[
                    'idhistoria' => $model->IdHistoriaClinica,
                ]);
            }
        }
    }

    /**
     * Displays a single HistoriaClinica model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HistoriaClinica model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idpersona,$iddocente,$idcita)
    {
        $model = new HistoriaClinica();
        
        $model->IdPersonaSolicita = $idpersona;
        $model->Fecha = date("y-m-d h:m:s");
        $model->IdDocente = $iddocente;
        $model->IdSolicitudCita = $idcita;
        $model->IdConcepto = 4;
        //$model->ObservacionesGeneral = '-';
        
        if ($model->load(Yii::$app->request->post())) {
           
            if($model->save()){
//                return $this->redirect(['view', 'id' => $model->IdHistoriaClinica]);
                return $this->redirect(['historiaclinica',
                    'idhistoria' => $model->IdHistoriaClinica,
                ]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HistoriaClinica model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdHistoriaClinica]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HistoriaClinica model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HistoriaClinica model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HistoriaClinica the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HistoriaClinica::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
     protected function findModelCita($idcita)
    {
        if (($model = SolicitudCita::findOne($idcita)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}
