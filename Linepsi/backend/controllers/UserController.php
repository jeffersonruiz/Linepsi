<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use backend\models\search\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\models\PasswordForm;
use frontend\models\Persona;
use backend\models\Rol;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())){
            $model->setPassword($model->password);
            $model->generateAuthKey();
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                echo $this->render('/user/view_error', ['model'=>$model]);
            }    
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){
            
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                echo $this->render('/user/view_error', ['model'=>$model]);
            }    
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionContrasena($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){
            
            $model->setPassword($model->password);
            $model->generateAuthKey();
            
//            if (!$model->validate()) { 
//                
//                var_dump($model->getErrors()); die("hola ..");
//            
//            }
            
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                echo $this->render('/user/view_error', ['model'=>$model]);
            }
        }else {
            return $this->render('contrasena', [
                'model' => $model,
            ]);
        }
    }

    public function actionCambiarcontrasena($id){
        
        $model = $this->findModel($id);
        $modelPassword = new PasswordForm();
        $modelPersona = Persona::findOne($model->IdPersona);
        $modelRol = Rol::findOne($model->rol_id);
        
        $modelPassword->username = $model->username;
        $modelPassword->NombrePersona = $modelPersona->PrimerNombre . ' ' . $modelPersona->SegundoNombre;
        $modelPassword->NombreRolUsuario = $modelRol->nombre;
        
        //$model->NombreEstado = 'Activo';
        
        
        if ($modelPassword->load(Yii::$app->request->post())) {
            
            if ($modelPassword->validate()){
            //return $this->redirect(['view', 'id' => $model->id]);
                
                $model->setPassword($modelPassword->newpass);
                $model->update();
                
                Yii::$app->getSession()->setFlash( 'success', 'Contraseña Actualizada Con Exito' );
                return $this->redirect(['index']);
            }
        } 
        
        return $this->render('updatecontrasena', [
                'model' => $model,
                'modelPassword' => $modelPassword
        ]);
                
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
