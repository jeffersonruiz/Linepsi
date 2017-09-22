<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

use backend\models\SignupForm;

use common\models\AccessHelpers;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                // La clase Yii\filters\AccessControl provee un control de acceso 
                // basado en un conjunto de reglas
                'class' => AccessControl::className(),
                
                // Indica que las reglas se aplicarán sólo a las acciones ‘logout’, 
                // ‘signout’, y ‘about’ . En este contexto los roles significan 
                // ‘autenticado’, o ‘no autenticado’.
                'only' => ['logout', 'about'],
                'rules' => [
                    [
                        //Las acciones ‘login’, ‘signup’, ‘error’, se permitirá el 
                        //acceso para los usuarios que no están autenticados (representados por ‘?’)
                        'actions' => ['login', 'error'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        //Las acciones ‘about’, ‘logout’, e ‘index’ serán accesibles 
                        //para los usuarios autenticados (representados por ‘@’)
                        'actions' => ['about', 'logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
    /*
     * El método beforeAction se ejecuta antes de cualquier acción del controlador, 
     * luego de todos los filtros existentes (como los que se encuentran en el método behaviors).
     * El método beforeAction debe devolver verdadero o falso, que se traduce a 
     * que la acción solicitada se ejecute o no.
     * 
     * En el método beforeAction podemos asegurarnos de chequear que el usuario 
     * tiene acceso a la acción que quiere ejecutar.
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        // Yii::$app->controller->route representa la ruta solicitada 
        // (lo que viene después de la r, en nuestro caso site/about). 
        // Aplicamos un reemplazo y entonces se asigna a $operacion el valor ‘site-about’.
        $operacion = str_replace("/", "-", Yii::$app->controller->route);

        // arreglo con las rutas que estarán siempre disponibles. 
        $permitirSiempre = ['site-captcha', 'site-signup', 'site-index', 'site-error', 
                            'site-contact', 'site-login', 'site-logout'];

        // Si la operación que se quiere realizar está en el arreglo, el método 
        // devuelve verdadero y entonces la acción se ejecuta. 
        if (in_array($operacion, $permitirSiempre)) {
            return true;
        }

        // Si el usuario no tiene un rol con permiso para realizar la operación, 
        // mostramos una vista con un mensaje de error, y devolvemos falso, 
        // evitando que la acción se ejecute
        if (!AccessHelpers::getAcceso($operacion)) {
            echo $this->render('nopermitido');
            return false;
        }

        return true;
    }    

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionSignup()
    {
        $model = new SignupForm();
        
        $model->status = 10;
        
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
}
