<div class="servicio-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
    
       <p>
        Este es el contenido de la vista para la acción"<?= $this->context->action->id ?>".
        La acción pertenece al controlador"<?= get_class($this->context) ?>"
        en el "<?= $this->context->module->id ?>" module.
    </p>
    <h1>  Esto si funciona</h1>
    <p>
        Puede personalizar esta página editando el siguiente archivo: <br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
