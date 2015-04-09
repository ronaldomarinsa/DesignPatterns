<?php

error_reporting(E_ALL);


# --------------------
# AUTOLOAD
# --------------------
define('CLASS_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = CLASS_DIR . $path . '.php';
    if (is_file($file)) {
        require_once($file);
    } else {
        throw new \ErrorException("Could not load class {$className}. File not found: {$file}");
        die();
    }
});


# --------------------
# GERA O FORMULÁRIO
# --------------------

use Maia\Form\Form;

$f = new Maia\Form\Form();
$f->addElement(new Maia\Form\InputText("Email"));
$f->addElement(new Maia\Form\InputText("Assunto"));
$f->addElement(new Maia\Form\TextArea("Mensagem"));
print $f->render();


?>