<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Laboratorio de Investigación y Evaluación Psicológica - Linepsi</h1>

         <div class="row">
            <div class="col-lg-12">
                <?php
                    $rutalogo = substr(Yii::getAlias('@web'),0,strpos(Yii::getAlias('@web'), '/', 1))  . '/frontend/assets/Imagenes/Logo_Unicatólica.png';
                ?>
                <img src="<?php echo $rutalogo ?>" >
            </div>
        </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Misión</h2>

                <p>Linepsi tiene como misión el apoyo a las funciones sustantivas de docencia,
                    investigación y proyección social de la institución.</p>
            </div>
            <div class="col-lg-4">
                <h2>Objetivo general</h2>

                <p>Contribuir al ejercicio docente y la formación profesional de estudiantes en investigación
                    y evaluación psicológica, mediante procesos educativos y de proyección social a la comunidad.</p>
            </div>
            <div class="col-lg-4">
                <h2>Objetivos específicos</h2>

                <p>-Apoyar proyectos de investigación, prácticas profesionales y trabajos de grado en el campo
                    de la medición y evaluación psicológica.</p></br>
                <p>-Contribuir al fortalecimiento conceptual, ético y práctico del estudiante en el 
                    área de la medición y la evaluación psicológica.</p></br>
                <p>-Ofrecer servicios de proyección social para la comunidad institucional y 
                    usuarios externos, en el campo de la evaluación y orientación psicológica</p>
            </div>
        </div>

    </div>
</div>
