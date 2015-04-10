<?php

error_reporting(E_ALL);


// AUTOLOAD
define('CLASS_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = CLASS_DIR . $path . '.php';
    if (is_file($file)) {
        require_once($file);
    } else {
        throw new \ErrorException("Não conseguiu abrir a classe {$className}. Arquivo não encontrado: {$file}");
        die();
    }
});


// GERA O FORMULÁRIO
use rma\Form\Form;

$f = new rma\Form\Form();
$f->addElement(new rma\Form\InputText("Email"));
$f->addElement(new rma\Form\InputText("Assunto"));
$f->addElement(new rma\Form\TextArea("Mensagem"));
print $f->render();


?>