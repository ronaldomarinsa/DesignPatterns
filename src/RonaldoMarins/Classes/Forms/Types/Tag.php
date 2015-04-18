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

class Tag implements FormInterface
{
    public $nome;
    public $name;
    public $type;
    public $placeholder;
    public $class;
    public $value;
            
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function setType($type) 
    {
        $this->type = $type;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function setClass($class) {
        $this->class = $class;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->class = $this->class;
        $tag->type = $this->type;
        $tag->name = $this->name;
        $tag->placeholder = $this->placeholder;
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close();  
    }
} 