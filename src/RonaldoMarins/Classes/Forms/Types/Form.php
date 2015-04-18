<?php
/**
 * @author Ronaldo Marins
 * Date: 18/04/2015
 * 02 - Projeto | Módulo 04 - Design Patterns | Potal Code Education
 * Linguagem: php
 */

namespace RonaldoMarins\Classes\Forms\Types;
use RonaldoMarins\Classes\Forms\Utils\Element;
use RonaldoMarins\Classes\Forms\Interfaces\FormInterface;
use RonaldoMarins\Classes\Validation\Validator;

class Form implements FormInterface
{
    public $nome;

    function __construct(Validator $validados, $nome)
    {
        $this->nome = $nome;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->name = "form_contato";
        $tag->class = "form-horizontal";
        $tag->action = "dados.php";
        $tag->method = 'post';
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close();  
    }
} 