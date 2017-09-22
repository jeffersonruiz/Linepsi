<?php

//                 '<li class="divider"></li>',
//                 '<li class="dropdown-header">Dropdown Header</li>',

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    
    
    
<div class="wrap">
    <?php
    
    NavBar::begin([
        'brandLabel' => 'SIPPA-Linepsi',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'items' => [
            Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/site/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']],
        ],
    ]);

    $menuItems = [
       
//        ['label' =>'Configuración', 'items' => [
//            ['label' => 'Persona','items' => [
//               ['label' => 'Sexo', 'url' => ['/personas/sexo/index']], 
//               ['label' => 'Genero', 'url' => ['/personas/genero/index']],
//               ['label' => 'Pais', 'url' => ['/personas/pais/index']], 
//               ['label' => 'Ciudad', 'url' => ['/personas/ciudad/index']],
//               ['label' => 'Estado Civil', 'url' => ['/personas/estado-civil/index']], 
//               ['label' => 'Tipo Correo', 'url' => ['/personas/tipo-correo-electronico/index']], 
//               ['label' => 'Tipo Direccion', 'url' => ['/personas/tipo-direccion/index']], 
//               ['label' => 'Tipo Telefono', 'url' => ['/personas/tipo-telefono/index']],
//               ['label' => 'Indicatico Telefonico', 'url' => ['/personas/tipo-correo-electronico/index']],
//               ['label' => 'Tipo Documento Identificacion', 'url' => ['/personas/tipo-documento-identificacion/index']],
//               ['label' => 'Operador Telefonico', 'url' => ['/personas/operador-telefonia/index']],
//            ]],
//         
//        ]],
        
        ['label' =>'Personas', 'items' => [
            ['label' => 'Configuracion','items' => [
               ['label' => 'Sexo', 'url' => ['/personas/sexo/index']], 
               ['label' => 'Genero', 'url' => ['/personas/genero/index']],
               ['label' => 'Pais', 'url' => ['/personas/pais/index']], 
               ['label' => 'Ciudad', 'url' => ['/personas/ciudad/index']],
               ['label' => 'Estado Civil', 'url' => ['/personas/estado-civil/index']], 
               ['label' => 'Tipo Correo', 'url' => ['/personas/tipo-correo-electronico/index']], 
               ['label' => 'Tipo Direccion', 'url' => ['/personas/tipo-direccion/index']], 
               ['label' => 'Tipo Telefono', 'url' => ['/personas/tipo-telefono/index']],
               ['label' => 'Indicatico Telefonico', 'url' => ['/personas/tipo-correo-electronico/index']],
               ['label' => 'Tipo Documento Identificacion', 'url' => ['/personas/tipo-documento-identificacion/index']],
               ['label' => 'Operador Telefonico', 'url' => ['/personas/operador-telefonia/index']],
            ]],
            
            ['label' => 'Persona', 'items' => [
               ['label' => 'Correo', 'url' => ['/personas/persona-correo-electronico/index']],
               ['label' => 'Telefono', 'url' => ['/personas/persona-telefono/index']], 
               ['label' => 'Direccion', 'url' => ['/personas/persona-direccion/index']],
               ['label' => 'Persona', 'url' => ['/personas/persona/index']], 
            ]],
            ['label' => 'Perfil Persona', 'items' => [
               ['label' => 'Docente', 'url' => ['/personas/docente/index']],
               ['label' => 'Estudiante', 'url' => ['/personas/estudiante/index']], 
            ]],
            
        ]],
        
        ['label' =>'Agenda Citas', 'items' => [
            ['label' => 'Configuracion', 'items' => [
               ['label' => 'Dias Semana', 'url' => ['/Citas/dias-semana/index']],
               ['label' => 'Tipo Solicitud', 'url' => ['/Citas/tipo-solicitud-cita/index']],
               ['label' => 'Estado Solicitud', 'url' => ['/Citas/estado-solicitud-cita/index']],
               ['label' => 'Institucion', 'url' => ['/Citas/institucion/index']],
               ['label' => 'Campo Psocologico', 'url' => ['/Citas/campo-psicologico/index']],
            ]],
            ['label' => 'Itinerario Persona', 'items' => [
               ['label' => 'Horario', 'url' => ['/Citas/itinerario-persona/index']],
            ]],
            ['label' => 'Cita', 'items' => [
               ['label' => 'Solicitud', 'url' => ['/Citas/solicitud-cita/index']], 
            ]],
        ]],
        
        ['label' =>'Servicios', 'items' => [
            ['label' => 'Configuracion', 'items' => [
               ['label' => 'Tipo Proceso', 'url' => ['/servicio/tipo-proceso/index']],
               ['label' => 'Tipo Prueba', 'url' => ['/servicio/tipo-prueba-psicologica/index']], 
               ['label' => 'Tipo Documento', 'url' => ['/servicio/tipo-documento/index']], 
               ['label' => 'Autorizacion', 'url' => ['/servicio/autorizacion-consentimiento/index']], 
            ]],
            ['label' => 'Proceso Admision', 'items' => [
               //['label' => 'Gestion Documental', 'url' => ['/servicio/gestion-documental/index']], 
               ['label' => 'Historia Clinica', 'url' => ['/servicio/historia-clinica/index']],
            ]],
        ]],
        
        
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    
    
</div>

    
    
    
    
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Ingenieria de Sistemas Unicatolica <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
