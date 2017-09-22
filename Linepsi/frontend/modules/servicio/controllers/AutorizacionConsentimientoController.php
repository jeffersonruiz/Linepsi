<?php

namespace frontend\modules\servicio\controllers;

use Yii;
use frontend\modules\servicio\models\AutorizacionConsentimiento;
use frontend\modules\servicio\models\search\AutorizacionConsentimientoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Html;

use frontend\controllers\BaseController;


/**
 * AutorizacionConsentimientoController implements the CRUD actions for AutorizacionConsentimiento model.
 */
class AutorizacionConsentimientoController extends BaseController 
{

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all AutorizacionConsentimiento models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new AutorizacionConsentimientoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AutorizacionConsentimiento model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id,$opcion) {
        
        $model = $this->findModel($id);
        
        $dir = $model->RutaDocumento;
        $file = $model->NombreDocumento;
        
        if($dir && $file){
            $path = $dir . $file;
        
            //Obtener información del archivo
            $file_info = pathinfo($path);
            //Obtener la extensión del archivo
            $extension = $file_info["extension"];
        }else{
            $extension = "ninguna";
        }
        
        
        return $this->render('view', [
                    'model' => $model,
                    'extension' => $extension,
                    'opcion' => $opcion,
        ]);
    }

    /**
     * Creates a new AutorizacionConsentimiento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idcita) {
        
        $model = new AutorizacionConsentimiento();

        $model->IdSolicitudCita = $idcita;

        if ($model->load(Yii::$app->request->post())) {

            $doc = UploadedFile::getInstance($model, 'FileUpload');

            if ($doc) {

                $model->NombreDocumento = $doc->name;

                $pos = strpos(Yii::getAlias('@web'), '/', 1);

                $model->RutaDocumento = substr(Yii::getAlias('@web'), 0, $pos)
                        . '/frontend/web/archivos/consentimientos'
                       // . '/frontend/modules/servicio/consentimientos'
                        . '/';
            }

            if ($model->save()) {
                
                $doc = UploadedFile::getInstance($model, 'FileUpload');
                
                if ($doc) {
                    
                    $ruta = Yii::getAlias('@app') . '\web\archivos\consentimientos';
                    //'\modules\servicio\consentimientos\\';

                    $NombreCompleto = $ruta . '\\' . $model->NombreDocumento;

                    //Valida Directorio 
                    if (!file_exists($ruta)) {
                        mkdir($ruta, 0777, true);
                    }

                    $doc->saveAs($NombreCompleto);
                }

                

                return $this->redirect(['view', 'id' => $model->IdAutorizacionConsentimiento]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AutorizacionConsentimiento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $cambio_documento = '0';

            $doc = UploadedFile::getInstance($model, 'FileUpload');


            if ($doc) {
                $model->NombreDocumento = $doc->name;
                $cambio_documento = 1;
            }

            if ($model->NombreDocumento) {

                if ($cambio_documento == 1) {
                    $pos = strpos(Yii::getAlias('@web'), '/', 1);

                    $model->RutaDocumento = substr(Yii::getAlias('@web'), 0, $pos)
                            . '/frontend/web/archivos/consentimientos'
                            //'/frontend/modules/servicio/consentimientos'
                            . '/';
                }

                if ($model->save()) {

                    $ruta = Yii::getAlias('@app') . '\web\archivos\consentimientos';
                            //'\modules\servicio\consentimientos\\';

                    $NombreCompleto = $ruta . '\\' . $model->NombreDocumento;

                    //Valida Directorio Placa Vehiculo
                    if (!file_exists($ruta)) {
                        mkdir($ruta, 0777, true);
                    }

                    $doc->saveAs($NombreCompleto);

                    return $this->redirect(['view', 'id' => $model->IdAutorizacionConsentimiento]);
                }
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AutorizacionConsentimiento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    private function downloadFile($dir, $file, $extensions = []) {
        //Si el directorio existe
        if (is_dir($dir)) {
            //Ruta absoluta del archivo
            $path = $dir . $file;

            //Si el archivo existe
            if (is_file($path)) {
                //Obtener información del archivo
                $file_info = pathinfo($path);
                //Obtener la extensión del archivo
                $extension = $file_info["extension"];

                if (is_array($extensions)) {
                    //Si el argumento $extensions es un array
                    //Comprobar las extensiones permitidas
                    foreach ($extensions as $e) {
                        //Si la extension es correcta
                        if ($e === $extension) {
                            //Procedemos a descargar el archivo
                            // Definir headers
                            $size = filesize($path);
                            header("Content-Type: application/force-download");
                            header("Content-Disposition: attachment; filename=$file");
                            header("Content-Transfer-Encoding: binary");
                            header("Content-Length: " . $size);
                            // Descargar archivo
                            readfile($path);
                            //Correcto
                            return true;
                        }
                    }
                }
            }
        }
        //Ha ocurrido un error al descargar el archivo
        return false;
    }

    public function actionDownload() {
        if (Yii::$app->request->get("file")) {
            //Si el archivo no se ha podido descargar
            //downloadFile($dir, $file, $extensions=[])
            if (!$this->downloadFile("archivos/consentimientos/",Html::encode($_GET["file"]), ["pdf", "xlsx", "docx"])) {
                //Mensaje flash para mostrar el error
                Yii::$app->session->setFlash("errordownload");
            }
        }
        //return $this->render("download");
    }

    

    /**
     * Finds the AutorizacionConsentimiento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AutorizacionConsentimiento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AutorizacionConsentimiento::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
